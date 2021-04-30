<?php
    echo "ABC";
  
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    
 
    require_once __DIR__ . '/vendor/autoload.php';
    
        
        $result = '';
        function sendEmail()
        {
            
            $mail = new PHPMailer(true);
            $body = "<h1>This message is sent by " + $_POST["fullname"] + ".<br>His email is " + $_POST["email"]  + ".<br> Message - " + $_POST["message"] + "</h1>";
            try {
            $mail->isSMTP();          // Send using SMTP

              $mail->Host = 'smtp.hostinger.in';                    // Set the SMTP server to send through
              $mail->Port = 587;

              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

              $mail->Username   = 'contact@bowe.co.in';                     // SMTP username

              $mail->Password   = 'Contact@bowe123';                               // SMTP password
              
              $mail->setFrom('contact@bowe.co.in', 'BOWE.CO.IN');

              $mail->addAddress('iqlipsen@gmail.com','lyflyqq@gmail.com', '');     // Add a recipient

                          // Name is optional

              // Attachments

           //   $mail->addAttachment($_POST["image"], 'attachment.png');         // Add attachments

            // $mail->addAddress("vkgupta857@gmail.com", '');



              // Content

              $mail->isHTML(true);                                  // Set email format to HTML

              $mail->Subject = 'Email from BOWE website';

              $mail->Body    = $body;

              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



              $mail->send();

              $result = "Email has been sent";

          } catch (Exception $e) {

              $e->getMessage();
              echo $mail->ErrorInfo;

          }
        //   echo $result;
        }
        sendEmail();
       
      
?>