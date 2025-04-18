<?php


$retVal = array();

if (!isset($_POST['do'])) {
  header('location: ./');
} else {
  $do = $_POST['do'];
}

include 'vendor/config.php';
include 'vendor/clsMail.php';

$clsMail = new clsMail();

switch ($do) {

  case 'ctaForm':

    $data = [
      'fname'     =>  $_POST['fname'],
      'lname'     =>  $_POST['lname'],
      'phone'    =>  $_POST['phone'],
      'email'     =>  $_POST['email'],
      'profession'  =>  $_POST['profession'],
      'service'     =>  $_POST['service'],
      'otherservices' =>  $_POST['otherservices']
    ];

    $sendEmail = $clsMail->ctaForm($adminEmail, $data);

    if ($sendEmail) {
      $retVal['msg'] = 'ok';
    } else {
      $retVal['msg'] = 'err';
    }

    break;

  case 'contactForm':
    $data = [
      'fname'     =>  $_POST['fname'],
      'lname'     =>  $_POST['lname'],
      'phone'    =>  $_POST['phone'],
      'email'     =>  $_POST['email'],
      'profession'  =>  $_POST['profession'],
      'service'     =>  $_POST['service'],
      'otherservices' =>  $_POST['otherservices']
    ];

    $sendEmail = $clsMail->contactForm($adminEmail, $data);

    if ($sendEmail) {
      $retVal['msg'] = 'ok';
    } else {
      $retVal['msg'] = 'err';
    }

    break;

  case 'serviceForm':
    $data = [
      'fname'     =>  $_POST['fname'],
      'lname'     =>  $_POST['lname'],
      'phone'    =>  $_POST['phone'],
      'email'     =>  $_POST['email'],
      'profession'  =>  $_POST['profession'],
      'product'     =>  $_POST['product'],
      'otherText' =>  $_POST['otherText']
    ];

    $sendEmail = $clsMail->serviceForm($adminEmail, $data);

    if ($sendEmail) {
      $retVal['msg'] = 'ok';
    } else {
      $retVal['msg'] = 'err';
    }

    break;

  case 'quizForm':
    $data = [
      'fname'             =>  $_POST['fname'],
      'lname'             =>  $_POST['lname'],
      'phone'             =>  $_POST['phone'],
      'email'             =>  $_POST['email'],
      'annual_income'     =>  $_POST['annual_income'],
      'monthly_expenses'  =>  $_POST['monthly_expenses'],
      'life_event'        =>  $_POST['life_event'],
      'risk_tolerance'    =>  $_POST['risk_tolerance'],
      'existing_plan'     =>  $_POST['existing_plan']
    ];

    $sendEmail = $clsMail->quizForm($adminEmail, $data);

    if ($sendEmail) {
      $retVal['msg'] = 'ok';
    } else {
      $retVal['msg'] = 'err';
    }

    break;
}

echo json_encode($retVal);
