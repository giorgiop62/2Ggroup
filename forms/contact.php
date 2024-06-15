<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valida.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurazione del server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtps.aruba.it';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@2ggroup.net';
        $mail->Password = getenv('PASSWORD');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Mittente e destinatario
        $mail->setFrom('info@2ggroup.net', 'Nome del Mittente');
        $mail->addAddress('info@2ggroup.net', 'Nome del Destinatario');

        // Contenuto dell'email
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<h3>Nuovo messaggio da:</h3><p>Nome: $name</p><p>Email: $email</p><p>Messaggio: $message</p>";
        $mail->AltBody = "Nuovo messaggio da:\nNome: $name\nEmail: $email\nMessaggio: $message";

        $mail->send();
        http_response_code(200);
        echo "OK";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Messaggio non inviato. Errore: {$mail->ErrorInfo}";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
