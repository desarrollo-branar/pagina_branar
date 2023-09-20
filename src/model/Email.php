<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

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
            $mail->setFrom($this->email, $this->name);
            $mail->addAddress("atencionalclientebranar@gmail.com", "branar.com");     //Add a recipient
            $mail->addReplyTo($this->email, $this->name);
            // $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC($this->email, $this->name);
            $mail->addCC('info@branar.com');
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
                header('Location: ../../index.html');
            } else {
                header('Location: ../../index.html');
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    }
}