<?php
// $response = array();
// $error = "";
include_once '../db-api/connection.php';

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

if (isset($_POST)) {
    if (containsInjectionAttempt($_POST["email"])) {
        echo "false||O endereço de e-mail fornecido contém uma tentativa de abuso do sistema.";
    } else {
        $subject = "Inscrição para " . $_POST['formacao'];

        if ($_POST['local_ensino'] == '') $local_ensino = 'Não preencheu.';
        else $local_ensino = $_POST['local_ensino'];

        if ($_POST['curso'] == '') $curso = 'Não preencheu.';
        else $curso = $_POST['curso'];

        if ($_POST['ano_curso'] == '') $ano_curso = 'Não preencheu.';
        else $ano_curso = $_POST['ano_curso'];

        if($_POST['nif'] != '') {
            $message = "
                <html>
                <head>
                </head>
                <body>
                    <p>1. Dados pessoais</p>
                    <ul>
                        <li>Nome: " . $_POST['name'] . "</li>
                        <li>Data de nascimento: " . $_POST['dob'] . "</li>
                        <li>Idade: " . $_POST['age'] . "</li>
                        <li>Morada: " . $_POST['address'] . "</li>
                        <li>Código-Postal: " . $_POST['pc'] . "</li>
                        <li>Localidade: " . $_POST['city'] . "</li>
                        <li>Telefone: " . $_POST['phone'] . "</li>
                        <li>E-mail: " . $_POST['email'] . "</li>
                        <li>NIF: " . $_POST['nif'] . "</li>
                    </ul>
                    <br>
                    <p>2. Dados para emissão de recibo</p>
                    <ul>
                        <li>Nome: " . $_POST['name_recibo'] . "</li>
                        <li>Morada: " . $_POST['address_recibo'] . "</li>
                        <li>Código-Postal: " . $_POST['pc_recibo'] . "</li>
                        <li>NIF: " . $_POST['nif_recibo'] . "</li>
                    </ul>
                    <br>
                    <p>3. Formação Académica</p>
                    <ul>
                        <li>" . $_POST['education'] . "</li>
                    </ul>
                    <br>
                    <p>4. Experiência Profissional</p>
                    <ul>
                        <li>" . $_POST['experience'] . "</li>
                        <li>Profissão: " . $_POST['profissao'] . "</li>
                        <li>Local de trabalho/instituição: " . $_POST['local_trabalho'] . "</li>
                        <li>Instituição de ensino: " . $local_ensino . "</li>
                        <li>Curso: " . $curso . "</li>
                        <li>Ano de frequência do curso: " . $ano_curso . "</li>
                    </ul>
                    <br>
                    <p>5. Candidatura</p>
                    <ul>
                        <li>Quais as suas expetativas para esta formação? " . $_POST['q1'] . "</li>
                        <li>Qual a sua motivação para participar nesta formação? " . $_POST['q2'] . "</li>
                        <li>Quais as competências que imagina alcançar aquando da conclusão da formação? " . $_POST['q3'] . "</li>
                    </ul>
                    <br>
                    <p>6. Onde nos conheceu?</p>
                    <ul>
                        <li>" . $_POST['referral'] . "</li>
                    </ul>
                    <br>
                    <p>7. Outros</p>
                    <ul>
                        <li>" . $_POST['optout'] . "</li>
                    </ul>
                </body>
                </html>
            ";

            require_once($_SERVER['DOCUMENT_ROOT'] . "/ajax/PHPMailer/PHPMailerAutoload.php");

            $mail = new PHPMailer;

            if (array_key_exists('uploaded_file', $_FILES)) {
                $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['uploaded_file']['name']));
                if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile)) {
                    $mail->addAttachment($uploadfile, $_FILES['uploaded_file']['name']);
                    $mail->Host = 'anacarolinapereira.pt';
                    $mail->SMTPAuth = true;
                    $mail->Port = 8080;
                    $mail->CharSet = 'utf-8';
                    $mail->setFrom($_POST["email"], $_POST['name']);
                    $mail->addAddress("geral@anacarolinapereira.pt", "ACP - Clínica de Psicologia");
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $mail->Body    = $message;

                    if (!$mail->send()) {
                        $erro = 'Não foi possível enviar a sua candidatura, por favor tente novamente mais tarde.';
                        // $response["error"] = $erro;
                        echo "false||" . $erro;
                    } else {
                        $erro = 'Candidatura submetida com sucesso.';
                        // $response["success"] = $erro;
                        echo "true||" . $erro;

                        $sql_query = "SELECT date_aviso 
                        from formacao_details
                        where title = '" . $_POST['formacao'] . "'";

                        $result = mysqli_query($conn, $sql_query);
                        $about = array();

                        while ($row = mysqli_fetch_assoc($result)) {
                            $about[] = $row;
                        }

                        $data_fim = $about[0]["date_aviso"];
                        setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
                        date_default_timezone_set('Europe/Lisbon');

                        $data_f = strftime('%d de %B', strtotime($data_fim));

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
                                        É com muito gosto que confirmamos a receção do formulário da sua inscrição, bem como do envio dos documentos por nós solicitados. Enviar-lhe-emos email, em breve, no sentido de partilharmos informações referentes à formação (incluindo dados e plataforma de acesso). 
                                    </p>
                                    <p>
										Para qualquer questão, por favor, queríamos que nos soubesse totalmente disponíveis através do email <a href='mailto:academia@anacarolinapereira.pt'>academia@anacarolinapereira.pt</a> e do telemóvel +351 927667119.
                                    </p>
                                    <p>Atenciosamente,</p>
                                    <p>Ana Carolina Pereira</p>
                                    <br>
                                    <img src='cid:logo_acp' width='100' height='100'>
                                </body>
                            </html>
                        ";

                        $mail1 = new PHPMailer;

                        $mail1->Host = 'anacarolinapereira.pt';
                        $mail1->SMTPAuth = false;
                        $mail1->Port = 8080;
                        $mail1->CharSet = 'utf-8';
                        $mail1->setFrom('no-reply@anacarolinapereira.pt', 'ACP - Clínica de Psicologia');
                        $mail1->addAddress($_POST["email"], $_POST['name']);
                        $mail1->isHTML(true);
                        $mail1->Subject = 'Inscrição | ' . $_POST['formacao'];
                        $mail1->Body    = $message_reply;
                        $mail1->AddEmbeddedImage('../uploads/logo-email.png', 'logo_acp');

                        if (!$mail1->send()) {
                            // echo 'resposta automatica nao enviada';
                        } else {
                            echo ' Verifique o seu e-mail.';
                        }
                    }
                } else {
                    $erro = 'O ficheiro não foi anexado. Por favor, tentar novamente.';
                    // $response["error"] = $erro;
                    echo "false||" . $erro;
                }
            } else {
                $erro = 'O ficheiro não foi anexado. Por favor, tentar novamente.';
                // $response["error"] = $erro;
                echo "false||" . $erro;
            }
        } else {
            $message = "
                <html>
                <head>
                </head>
                <body>
                    <p>1. Dados pessoais</p>
                    <ul>
                        <li>Nome: " . $_POST['name'] . "</li>
                        <li>Data de nascimento: " . $_POST['dob'] . "</li>
                        <li>Idade: " . $_POST['age'] . "</li>
                        <li>Morada: " . $_POST['address'] . "</li>
                        <li>Código-Postal: " . $_POST['pc'] . "</li>
                        <li>Localidade: " . $_POST['city'] . "</li>
                        <li>Telefone: " . $_POST['phone'] . "</li>
                        <li>E-mail: " . $_POST['email'] . "</li>
                    </ul>
                    <br>
                    <p>2. Formação Académica</p>
                    <ul>
                        <li>" . $_POST['education'] . "</li>
                    </ul>
                    <br>
                    <p>3. Experiência Profissional</p>
                    <ul>
                        <li>" . $_POST['experience'] . "</li>
                        <li>Profissão: " . $_POST['profissao'] . "</li>
                        <li>Local de trabalho/instituição: " . $_POST['local_trabalho'] . "</li>
                        <li>Instituição de ensino: " . $local_ensino . "</li>
                        <li>Curso: " . $curso . "</li>
                        <li>Ano de frequência do curso: " . $ano_curso . "</li>
                    </ul>
                    <br>
                    <p>4. Onde nos conheceu?</p>
                    <ul>
                        <li>" . $_POST['referral'] . "</li>
                    </ul>
                    <br>
                    <p>5. Outros</p>
                    <ul>
                        <li>" . $_POST['optout'] . "</li>
                    </ul>
                </body>
                </html>
            ";

            require_once($_SERVER['DOCUMENT_ROOT'] . "/ajax/PHPMailer/PHPMailerAutoload.php");

            $mail = new PHPMailer;
            $mail->Host = 'anacarolinapereira.pt';
            $mail->SMTPAuth = true;
            $mail->Port = 8080;
            $mail->CharSet = 'utf-8';
            $mail->setFrom($_POST["email"], $_POST['name']);
            $mail->addAddress("geral@anacarolinapereira.pt", "ACP - Clínica de Psicologia");
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            if (!$mail->send()) {
                $erro = 'Não foi possível enviar a sua candidatura, por favor tente novamente mais tarde.';
                // $response["error"] = $erro;
                echo "false||" . $erro;
            } else {
                $erro = 'Candidatura submetida com sucesso.';
                // $response["success"] = $erro;
                echo "true||" . $erro;

                $sql_query = "SELECT date_aviso 
                from formacao_details
                where title = '" . $_POST['formacao'] . "'";

                $result = mysqli_query($conn, $sql_query);
                $about = array();

                while ($row = mysqli_fetch_assoc($result)) {
                    $about[] = $row;
                }

                $data_fim = $about[0]["date_aviso"];
                setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
                date_default_timezone_set('Europe/Lisbon');

                $data_f = strftime('%d de %B', strtotime($data_fim));

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
                                É com muito gosto que confirmamos a recepção do formulário da sua inscrição, bem como do envio dos documentos por nós solicitados. 
                                Em função disso, tomaremos a liberdade de enviar-lhe um email, até ao próximo dia " . $data_f . ", no sentido de confirmar a possibilidade 
                                da sua participação na formação " . $_POST['formacao'] . ". 
                                Permita-nos garantir que, caso possa, porventura, não reunir os requisitos necessários para a sua participação nesta formação, 
                                ser-lhe-á devolvido o valor previamente liquidado por si para o IBAN que nos indicar.
                            </p>
                            <p>
                                Para qualquer questão, por favor, queríamos que nos soubesse totalmente disponíveis através do email <a href='mailto:academia@anacarolinapereira.pt'>academia@anacarolinapereira.pt</a> e do telemóvel +351 " . $contact[0]['tlf_1'] . ".
                            </p>
                            <p>Atenciosamente,</p>
                            <p>Ana Carolina Pereira</p>
                            <br>
                            <img src='cid:logo_acp' width='100' height='100'>
                        </body>
                    </html>
                ";

                $mail1 = new PHPMailer;

                $mail1->Host = 'anacarolinapereira.pt';
                $mail1->SMTPAuth = false;
                $mail1->Port = 8080;
                $mail1->CharSet = 'utf-8';
                $mail1->setFrom('no-reply@anacarolinapereira.pt', 'ACP - Clínica de Psicologia');
                $mail1->addAddress($_POST["email"], $_POST['name']);
                $mail1->isHTML(true);
                $mail1->Subject = 'Inscrição | ' . $_POST['formacao'];
                $mail1->Body    = $message_reply;
                $mail1->AddEmbeddedImage('../uploads/logo-email.png', 'logo_acp');

                if (!$mail1->send()) {
                    // echo 'resposta automatica nao enviada';
                } else {
                    echo ' Verifique o seu e-mail.';
                }
            }
        }
    }
} else {
    $erro = 'Informação perdida durante o processo, por favor tente novamente.';
    // $response["error"] = $erro;
    echo "false||" . $erro;
}

// echo json_encode($response);
// exit;
