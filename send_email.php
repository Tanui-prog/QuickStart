<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $phpmailer = new PHPMailer();

        $phpmailer->isSMTP();

        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';

        $phpmailer->SMTPAuth = true;

        $phpmailer->Port = 2525;

        $phpmailer->Username = 'f57ff8e57dba1e';

        $phpmailer->Password = '********9a3c';


        //Recipients
        $mail->setFrom('info@rimiatechsolutions.tech', 'Contact Form'); // Replace with your "from" address
        $mail->addAddress('info@rimiatechsolutions.tech', 'Recipient Name'); // Replace with the recipient's address

        // Content
        $mail->isHTML(true);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method';
}
?>
