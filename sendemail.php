<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kritikalawnandbanquet@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Kritikalawn@777'; // Gmail address Password
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = '465';

    $mail->setFrom('kritikalawnandbanquet@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('kritikalawnandbanquet@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>First_Name : $fname <br> Last_Name : $lname <br> Mobile : $mobile <br> Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>