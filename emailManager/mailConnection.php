<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require __DIR__. '/../vendor/autoload.php';
require __DIR__. '/./email_config.php';

class MailSender {
    private $mail;
    public function __construct() {
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;      
        $mail->isSMTP();
        $mail->Host       = MAIL_SERVER;
        $mail->SMTPAuth   = true;
        $mail->Username   = MAIL_ACCOUNT;
        $mail->Password   = MAIL_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $this->mail = $mail;
    }

    public function setFrom($email, $name=""){
        $email = trim($email);
        $name = trim($name);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Error("Please provide valid From email Address ");
        }

        if(empty($name)) $name = MAIL_DEFAULT_SENDER;

        $this->mail->setFrom($email, $name);
    }

    public function addRecipent($recipientEmail, $recipientName=''){
        
        $recipientEmail = trim($recipientEmail);
        $recipientName = trim($recipientName);

        if(!filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {
            throw new Error("Please provide valid email Address of Recipient");
        }

        $this->mail->addAddress($recipientEmail, $recipientName);
    }

    public function addReplyTo($replyTo, $name){
        $replyTo = trim($replyTo);
        $name = trim($name);

        if(!filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            throw new Error("Please provide valid Reply-to email Address");
        }
        if(empty($name)) $name = MAIL_DEFAULT_SENDER;

        $this->mail->addReplyTo($replyTo, $name);
    }

    public function addSubject($subject) {
        if(empty($subject)) throw new Error("Subject is requried please add it");
        $this->mail->Subject = $subject;
    }

    public function addHTMLBody($html){
        $this->mail->isHTML(true);
        $this->mail->Body = trim($html);
    }

    public function addAltBody($text){
        $this->mail->AltBody = $text;
    }

    public function send() {
        try{
            $mail = $this->mail;

            // checking for from email
            
            // checking for subject
            if($mail->Subject == null) throw new Error("Please provide Subject to mail");

            // checking for body
            if($mail->Body == null) throw new Error("Please Provide the Body to send");

            $this->mail->send();
            return true;
        }catch(PHPMailerException $err) {
            echo ($err->errorMessage());
            return false;
        }catch(Error $err) {
            echo ($err->getMessage());
            return false;
        }
    }
}


?>