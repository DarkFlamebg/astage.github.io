<?php
if (isset($_POST['enviar'])) {
	if (!empty($_POST['name'])&&!empty($_POST['asunto'])&&!empty($_POST['msg'])&& !empty($_POST['email'])) {
		$name = $_POST ['name'];
		$asunto = $_POST ['asunto'];
		$msg = $_POST ['msg'];
		$email = $_POST ['email']
		$header = "From: noreply@example.com" . "\r\n";
		$header = "Reply to: noreply@example.com" . "\r\n";
		$header = "X-Mailer: PHP/" . phpversion();
		$mail = mail($emal, $asunto, $msg, $header);
		if ($mail) {
			echo "<h4>¡Enhorabuena! Su mensaje fue enviado exitosamente </h4>";
		}

		// code...
	}
	// code...
}

?>