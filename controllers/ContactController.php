<?php

use config\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller {

    public function index()
    {

        $contact_send = false;
        $contact_send_message = '';

        if(isset($_POST) && !empty($_POST)) {
            $contact_send = true;

            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = MAIL_HOST;                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = MAIL_USERNAME;                     //SMTP username
                $mail->Password   = MAIL_PASSWORD;                               //SMTP password
                $mail->Port       = MAIL_PORT;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom($email);
                $mail->addAddress(MAIL_TO);     //Add a recipient
                $mail->addReplyTo($email);
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'News Message From OOP Project';
                $mail->Body    = '
                
                    Name: '.$name.' <br>
                    Lastname: '.$lastname.' <br>
                    Message: '.$message.'
                
                ';
            
                $mail->send();
                $contact_send_message = 'Message has been sent';
            } catch (Exception $e) {
                $contact_send_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        }


        $contact = new Contact();
        
        $this->data['menu'] = $contact->getMenu();
        $this->data['contact_send'] = $contact_send;
        $this->data['contact_send_message'] = $contact_send_message;
        
        $this->tpl = 'contact';
    }

}