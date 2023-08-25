<?php

namespace Branar\Blog\model;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Exception;

class Email {
    private $email;
    private $subject;
    private $body;
    private $name;

    public function __construct(string $email, string $subject, string $body, string $name)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->body = $body;
        $this->name = $name;
    }

    public function sendEmail()
    {        
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'atencionalclientebranar@gmail.com';                     //SMTP username
            $mail->Password   = 'Zupkfefxeugumcpv';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('atencionalclientebranar@gmail.com', 'branar.com');
            $mail->addAddress("{$this->email}", "{$this->name}");     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('./img/Logooo.png');         //Add attachments
            // $mail->addAttachment('./img/Logooo.png', 'new.jpg');    //Optional name

            //Content
            $mail->CharSet = 'UTF8';
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $this->subject;
            $mail->Body    = $this->body;

            if (!$mail->send()) {
                header('Location: ../login/');
            } else {
                header('Location: ../../register/verify_account');
            }
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    }
}