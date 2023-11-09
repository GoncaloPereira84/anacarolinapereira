<?php
$response = array();

$error = "";

function containsInjectionAttempt($input)
{
	if (
		stristr("\r", $input) ||
		stristr("\n", $input) ||
		stristr("%0a", $input) ||
		stristr("%0d", $input) ||
		stristr("Content-Type:", $input) ||
		stristr("bcc:", $input) ||
		stristr("to:", $input) ||
		stristr("cc:", $input)
	) {
		return true;
	} else {
		return false;
	}
}

// var_dump($_POST);

if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["local"])) {
	if (containsInjectionAttempt($_POST["email"])) {
		$response = "The given email address contains an attempt of system abuse.";
	} else {
		$subject = "Pedido de Marcação de Consulta | Ana Carolina Pereira";

		$email = $_POST["email"] == '' ? 'Não forneceu endereço de e-mail.' : $_POST["email"];
		$phone = $_POST["phone"] == '' ? 'Não forneceu contacto telefónico.' : $_POST["phone"];

		$message = "
			<html>
			<head>
			</head>
            <body>
				<p>Nome:</p>
				<p>" . $_POST["name"] . "</p>
				<br>
				<p>E-mail:<p>
				<p>" . $email . "</p>
                <br>
                <p>Telefone:<p>
				<p>" . $phone . "</p>
				<br>
				<p>Especialidade:<p>
				<p>" . $_POST['subject'] . "</p>
				<br>
				<p>Clínica:<p>
				<p>" . $_POST['local'] . "</p>
			</body>
			</html>
		";
		require_once($_SERVER['DOCUMENT_ROOT'] . "/ajax/PHPMailer/PHPMailerAutoload.php");

		$mail = new PHPMailer;

		$mail->Host = 'www.anacarolinapereira.pt';
		$mail->SMTPAuth = true;
		$mail->Port = 8080;
		$mail->CharSet = 'utf-8';
		$mail->setFrom($_POST["email"] == '' ? "no-reply@anacarolinapereira.pt" : $_POST["email"], $_POST['name']);
		$mail->addAddress("geral@anacarolinapereira.pt", "Ana Carolina Pereira");
		// $mail->addAddress("silviabaptista18@gmail.com", "Sílvia Baptista");
		$mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body    = $message;

		if (!$mail->send()) {
			$erro = 'Não foi possível enviar o seu pedido de marcação de consulta, por favor tente novamente mais tarde.';
			$response["error"] = $erro;
		} else {
			$erro = 'Pedido de marcação de consulta enviado com sucesso.';
			$response["result"] = $erro;

			$sql_contact = "SELECT tlf_1 
                    from home_contactos";

			$result1 = mysqli_query($conn, $sql_contact);
			$contact = array();

			while ($row1 = mysqli_fetch_assoc($result1)) {
				$contact[] = $row1;
			}

			$message_reply = "
                        <html>
                            <head>
                            </head>
                            <body>
                                <p>Caro/a " . $_POST['name'] . ",</p>
                                <p>
									Agrademos a mensagem que nos fez chegar. 
									Tomaremos, em função disso, a liberdade de contactarmos o mais brevemente possível para o contacto que nos indicou. 
									Temos esperança de podermos responder-lhe ainda durante o dia de hoje. 
									Caso assim não suceda, por qualquer imponderável da nossa parte, fá-lo-emos no limite máximo de um dia.
                                </p>
                                <p>
                                    Qualquer questão, por favor, não hesite em contactar-nos através do email <a href='mailto:geral@anacarolinapereira.pt'>geral@anacarolinapereira.pt</a> e do telemóvel +351 927667119.
                                </p>
                                <p>Atenciosamente,</p>
                                <p>Ana Carolina Pereira</p>
                                <br>
                                <img src='cid:logo_acp' width='100' height='100'>
                            </body>
                        </html>
                    ";

			$mail1 = new PHPMailer;

			$mail1->Host = 'www.anacarolinapereira.pt';
			$mail1->SMTPAuth = false;
			$mail1->Port = 8080;
			$mail1->CharSet = 'utf-8';
			$mail1->setFrom('no-reply@anacarolinapereira.pt', 'ACP - Clínica de Psicologia');
			$mail1->addAddress($_POST["email"], $_POST['name']);
			$mail1->isHTML(true);
			$mail1->Subject = 'Marcação de consulta | ' . $_POST['subject'];
			$mail1->Body    = $message_reply;
			$mail1->AddEmbeddedImage('../uploads/logo-email.png', 'logo_acp');

			if (!$mail1->send()) {
				echo '';
			} else {
				echo '';
			}
		}
	}
} else {
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
	$response["error"] = $erro;
}

echo json_encode($response);
exit;

error: {
	$response["error"] = $error;
	echo json_encode($response);
	exit;
}
