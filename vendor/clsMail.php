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

  // $mail = new PHPMailer(true);
  // $mail->isSMTP();
  // $mail->SMTPDebug = 0;
  // // $mail->SMTPSecure = 'tls';
  // $mail->SMTPSecure = false;
  // $mail->SMTPOptions = array(
  //   'ssl' => array(
  //     'verify_peer' => false,
  //     'verify_peer_name' => false,
  //     'allow_self_signed' => true
  //   )
  // );
  // $mail->Host = $smtp_host;
  // $mail->Port = $smtp_port;
  // $mail->SMTPAuth = true;
  // $mail->SMTPAutoTLS = true;
  // $mail->Password = $smtp_pass;
  // $mail->Username = $smtp_user;
  // $mail->setFrom($smtp_user, $smtp_sender);
  // $mail->addAddress($email);
  // $mail->addReplyTo($smtp_user, $smtp_sender);
  // $mail->isHTML(true);
  // $mail->Subject = $subject;
  // $mail->Body = $body;
  // $send = $mail->send();
  // return $send;

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPSecure = 'ssl';
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

    $subject = "[SHISH Advanced Composites] CTA Form Data";

    $body = "Hello Admin,<br>
      <p>CTA form details are following.</p>      
      <table style='width: 400px;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['name']}</td></tr>
        <tr><td><strong>Phone Number</strong></td><td>{$data['phone']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Message</strong></td><td>{$data['message']}</td></tr>
      </table>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>SHISH Advanced Composites</p>
      ";

    $sendMail = phpmailer($adminEmail, $subject, $body);

    return $sendMail;
  }

  function contactForm($adminEmail, $data = array())
  {

    $subject = "[SHISH Advanced Composites] Contact Us Form Data";

    $body = "Hello Admin,<br>
      <p>Contact Us form details are following.</p>      
      <table style='width: 400px;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['name']}</td></tr>
        <tr><td><strong>Phone Number</strong></td><td>{$data['phone']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Company</strong></td><td>{$data['company']}</td></tr>
        <tr><td><strong>Requirements</strong></td><td>{$data['requirements']}</td></tr>
      </table>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>SHISH Advanced Composites</p>
      ";

    $sendMail = phpmailer($adminEmail, $subject, $body);

    return $sendMail;
  }

  function careerForm($adminEmail, $data = array())
  {
    global $smtp;

    $subject = "[SHISH Advanced Composites] Career Application";
    $body = "Hello Admin,<br>
      <p>Resume Submitted in Career Form.</p>      
      <table style='width: 400px;'>
        <tr><td style='width: 30%;'><strong>Name</strong></td><td>{$data['name']}</td></tr>
        <tr><td><strong>Email</strong></td><td>{$data['email']}</td></tr>
        <tr><td><strong>Message</strong></td><td>{$data['message']}</td></tr>
      </table>
      <p>Please find the file in attachment.</p>
      <br><br>
      <p>Regards,</p>
      <p>WebMaster</p>
      <p>SHISH Advanced Composites</p>
      ";

    $uploadDir = dirname(__DIR__) . '/uploads/';
    $filePath = $uploadDir . $data['resume_name'];

    if (!file_exists($filePath)) {
      throw new Exception("File not found: " . $filePath);
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = $smtp['host'];
    $mail->Port = $smtp['port'];
    $mail->SMTPAuth = true;
    $mail->SMTPAutoTLS = true;
    $mail->Password = $smtp['pass'];
    $mail->Username = $smtp['user'];
    $mail->setFrom($smtp['user'], $smtp['sender']);
    $mail->addAddress($adminEmail);
    $mail->addReplyTo($smtp['user'], $smtp['sender']);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Attach the file
    $mail->addAttachment($filePath);

    $send = $mail->send();
    return $send;
  }
} // clsMail