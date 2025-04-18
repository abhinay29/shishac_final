<?php

include 'config.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function phpmailer($email, $subject, $body)
{

  global $smtp;

  $smtp_host = $smtp['host'];
  $smtp_user = $smtp['user'];
  $smtp_pass = $smtp['pass'];
  $smtp_port = $smtp['port'];
  $smtp_sender = $smtp['sender'];


  // Production

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  // $mail->SMTPSecure = 'tls';
  $mail->SMTPSecure = false;
  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );
  $mail->Host = $smtp_host;
  $mail->Port = $smtp_port;
  $mail->SMTPAuth = true;
  $mail->SMTPAutoTLS = true;
  $mail->Password = $smtp_pass;
  $mail->Username = $smtp_user;
  $mail->setFrom($smtp_user, $smtp_sender);
  $mail->addAddress($email);
  $mail->addReplyTo($smtp_user, $smtp_sender);
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $body;
  $send = $mail->send();
  return $send;

  // Production

}

class clsMail
{

  function ctaForm($adminEmail, $data = array())
  {

    $subject = "[CrestaWealth] CTA Form Data";

    $body = "Hello Admin,<br>
      <p>CTA form details are following.</p>      
      <table style='width: 400px;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['fname']} {$data['lname']}</td></tr>
        <tr><td><strong>Phone Number</strong></td><td>{$data['phone']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Profession</strong></td><td>{$data['profession']}</td></tr>
        <tr><td><strong>Looking For</strong></td><td>{$data['service']}</td></tr>
        <tr><td><strong>Other</strong></td><td>{$data['otherservices']}</td></tr>
      </table>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>Cresta Wealth</p>
      ";

    $sendMail = phpmailer($adminEmail, $subject, $body);

    return $sendMail;
  }

  function contactForm($adminEmail, $data = array())
  {

    $subject = "[CrestaWealth] Contact Us Form Data";

    $body = "Hello Admin,<br>
      <p>Contact Us form details are following.</p>      
      <table style='width: 400px;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['fname']} {$data['lname']}</td></tr>
        <tr><td><strong>Phone Number</strong></td><td>{$data['phone']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Profession</strong></td><td>{$data['profession']}</td></tr>
        <tr><td><strong>Looking For</strong></td><td>{$data['service']}</td></tr>
        <tr><td><strong>Other</strong></td><td>{$data['otherservices']}</td></tr>
      </table>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>Cresta Wealth</p>
      ";

    $sendMail = phpmailer($adminEmail, $subject, $body);

    return $sendMail;
  }

  function serviceForm($adminEmail, $data = array())
  {

    $subject = "[CrestaWealth] Investment Products Form Data";

    $body = "Hello Admin,<br>
      <p>Investment Products form details are following.</p>      
      <table style='width: 400px;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['fname']} {$data['lname']}</td></tr>
        <tr><td><strong>Phone Number</strong></td><td>{$data['phone']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Profession</strong></td><td>{$data['profession']}</td></tr>
        <tr><td><strong>Looking For</strong></td><td>{$data['product']}</td></tr>
        <tr><td><strong>Other</strong></td><td>{$data['otherText']}</td></tr>
      </table>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>Cresta Wealth</p>
      ";

    $sendMail = phpmailer($adminEmail, $subject, $body);

    return $sendMail;
  }
  function quizForm($adminEmail, $data = array())
  {

    $subject = "[CrestaWealth] Financial Planning Readiness Quiz Form Data";

    $body = "Hello Admin,<br>
      <p>Financial Planning Readiness Quiz form details are following.</p>      
      <table style='max-width: 800px; width: 100%;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['fname']} {$data['lname']}</td></tr>
        <tr><td><strong>Phone Number</strong></td><td>{$data['phone']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Current Annual Income</strong></td><td>{$data['annual_income']}</td></tr>
        <tr><td><strong>Monthly Expenses</strong></td><td>{$data['monthly_expenses']}</td></tr>
        <tr><td><strong>Life Event in the near future</strong></td><td>{$data['life_event']}</td></tr>
        <tr><td><strong>Risk Tolerance to investing</strong></td><td>{$data['risk_tolerance']}</td></tr>
        <tr><td><strong>Existing Financial Plans or Investments</strong></td><td>{$data['existing_plan']}</td></tr>
      </table>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>Cresta Wealth</p>
      ";

    $sendMail = phpmailer($adminEmail, $subject, $body);

    return $sendMail;
  }
} // clsMail