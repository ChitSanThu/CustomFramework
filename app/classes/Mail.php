<?php


namespace App\Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';
class Mail
{
    private $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->setup();
    }
    public function setup()
    {
        echo SMTP::DEBUG_SERVER."Chit<br>";
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = 'chitsanthu208@gmail.com';                     // SMTP username
        $this->mail->Password   = 'chit204906';                               // SMTP password
        $this->mail->SMTPSecure = false;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $this->mail->setFrom('chitsanthu208@gmail.com', 'Mailer');
        $this->mail->addAddress('ingyin502@gmail.com', 'Joe User');     // Add a recipient
        $this->mail->addReplyTo('chitsanthu208@gmail.com', 'Information');

        // Content
        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->Subject = 'Here is the subject';
        $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $this->mail->send();
        // $this->mail->SMTPDebug = 2;                // Enable verbose debug output
        // $this->mail->isSMTP();                                            // Send using SMTP
        // $this->mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        // $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        // $this->mail->Username   = 'chitsanthu208@gmail.com';                     // SMTP username
        // $this->mail->Password   = 'chit204906';                               // SMTP password
        // $this->mail->SMTPSecure = true;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        // $this->mail->Port       = 587;

        // $this->mail->isHTML(true);
        // // $this->mail->SingleTo(true);
        // $this->mail->setFrom('chitsanthu208@gmail.com', 'Mailer');;
        // // $this->mail->FormName = "CST DEV";
        // $this->mail->addAddress('ingyin502@gmail.com','Auwae Lay');  
        // $this->mail->Subject = 'I am testing gmail in custom framework I Love You Soo Muchhhh ';
        // $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        // $this->mail->send();
        // echo "ia m elfjaijf ";
    }
    public function sent()
    {
        $this->mail->addAddress('ingyin502@gmail.com', 'Auwae Lay');
        $this->mail->Subject = 'I am testing gmail in custom framework I Love You Soo Muchhhh ';
        $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $this->mail->send();
        echo "ia m elfjaijf ";
    }
}
