<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valida.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurazione del server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Mittente e destinatario
        $mail->setFrom('', 'Nome del Mittente');
        $mail->addAddress('', 'Nome del Destinatario');

        // Contenuto dell'email
        $mail->isHTML(true);
        $mail->Subject = 'Nuovo Messaggio dal Modulo di Contatto';
        $mail->Body = "<h3>Nuovo messaggio da:</h3><p>Nome: $name</p><p>Email: $email</p><p>Messaggio: $message</p>";
        $mail->AltBody = "Nuovo messaggio da:\nNome: $name\nEmail: $email\nMessaggio: $message";

        $mail->send();
        echo "Messaggio inviato con successo.";
    } catch (Exception $e) {
        echo "Messaggio non inviato. Errore: {$mail->ErrorInfo}";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
