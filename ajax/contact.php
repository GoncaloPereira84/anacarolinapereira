<?php
$response = array();

$error = "";

function containsInjectionAttempt($input) {
    if (stristr("\r", $input) ||
    stristr("\n", $input) ||
    stristr("%0a", $input) ||
    stristr("%0d", $input) ||
    stristr("Content-Type:", $input) ||
    stristr("bcc:", $input) ||
    stristr("to:", $input) ||
    stristr("cc:", $input)) {
        return true;
    } else {
        return false;
    }
}
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["reason"]) && isset($_POST["message"])){
	if(containsInjectionAttempt($_POST["email"])){
		$response = "The given email address contains an attempt of system abuse.";
	}else{
		$subject = "Pedido de Contacto | Ana Carolina Pereira";

		// $email = $_POST["email"] == '' ? 'Não forneceu endereço de e-mail.' : $_POST["email"];
		// $phone = $_POST["phone"] == '' ? 'Não forneceu contacto telefónico.' : $_POST["phone"];

		$message = "
			<html>
			<head>
			</head>
            <body>
				<p>Nome:</p>
				<p>".$_POST["name"]."</p>
				<br>
				<p>E-mail:<p>
				<p>".$_POST["email"]."</p>
                <br>
                <p>Telefone:<p>
				<p>".$_POST["phone"]."</p>
				<br>
				<p>Como obteve conhecimento?<p>
				<p>".$_POST['reason']."</p>
				<br>
				<p>Mensagem:<p>
				<p>".$_POST['message']."</p>
			</body>
			</html>
		";
		require_once ($_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/PHPMailerAutoload.php");

		$mail = new PHPMailer;

		$mail->Host = 'beta.anacarolinapereira.pt';
        $mail->SMTPAuth = true;
      	$mail->Port = 8080;
        $mail->CharSet = 'utf-8'; 
      	$mail->setFrom($_POST["email"], $_POST['name']);
      	$mail->addAddress("geral@anacarolinapereira.pt","Ana Carolina Pereira");
      	$mail->isHTML(true);
	
      	$mail->Subject = $subject;
      	$mail->Body    = $message;

      	if(!$mail->send()) {
      		$erro = 'Não foi possível enviar o seu pedido de contacto, por favor tente novamente mais tarde.';
      		$response["error"] = $erro;
      	}else{
      		$erro = 'Pedido de contacto enviado com sucesso.';
      		$response["result"] = $erro;
      	}
	}
}else{
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
	$response["error"] = $erro;
}

if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["msg"])){
	if(containsInjectionAttempt($_POST["email"])){
		$response = "The given email address contains an attempt of system abuse.";
	}else{
		$subject = "Pedido de Contacto | Ana Carolina Pereira";

		$email = $_POST["email"] == '' ? 'Não forneceu endereço de e-mail.' : $_POST["email"];
		$phone = $_POST["phone"] == '' ? 'Não forneceu contacto telefónico.' : $_POST["phone"];

		$message = "
			<html>
			<head>
			</head>
            <body>
				<p>Nome:</p>
				<p>".$_POST["name"]."</p>
				<br>
				<p>E-mail:<p>
				<p>".$email."</p>
                <br>
                <p>Telefone:<p>
				<p>".$phone."</p>
				<br>
				<p>Assunto:<p>
				<p>".$_POST['subject']."</p>
				<br>
				<p>Mensagem:<p>
				<p>".$_POST['msg']."</p>
			</body>
			</html>
		";
		require_once ($_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/PHPMailerAutoload.php");

		$mail = new PHPMailer;

		$mail->Host = 'beta.anacarolinapereira.pt';
        $mail->SMTPAuth = true;
      	$mail->Port = 8080;
        $mail->CharSet = 'utf-8'; 
      	$mail->setFrom($_POST["email"], $_POST['name']);
      	$mail->addAddress("geral@anacarolinapereira.pt","Ana Carolina Pereira");
      	$mail->isHTML(true);
	
      	$mail->Subject = $subject;
      	$mail->Body    = $message;

      	if(!$mail->send()) {
      		$erro = 'Não foi possível enviar o seu pedido de contacto, por favor tente novamente mais tarde.';
      		$response["error"] = $erro;
      	}else{
      		$erro = 'Pedido de contacto enviado com sucesso.';
      		$response["result"] = $erro;
      	}
	}
}else{
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
	$response["error"] = $erro;
}

echo json_encode($response);
exit;

error:{
	$response["error"] = $error;
  echo json_encode($response);
  exit;
}
