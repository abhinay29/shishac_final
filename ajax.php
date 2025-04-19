<?php


$retVal = array();

if (!isset($_POST['do'])) {
  $do = "";
} else {
  $do = $_POST['do'];
}

include 'vendor/config.php';
include 'vendor/clsMail.php';

$clsMail = new clsMail();

switch ($do) {

  case 'ctaForm':

    $data = [
      'name'          =>  $_POST['name'],
      'phone'         =>  $_POST['phone'],
      'email'         =>  $_POST['email'],
      'message'       =>  $_POST['message']
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
      'name'          =>  $_POST['name'],
      'phone'         =>  $_POST['phone'],
      'email'         =>  $_POST['email'],
      'company'       =>  $_POST['company'],
      'requirements'  =>  $_POST['requirements']
    ];

    $sendEmail = $clsMail->contactForm($adminEmail, $data);

    if ($sendEmail) {
      $retVal['msg'] = 'ok';
    } else {
      $retVal['msg'] = 'err';
    }

    break;

  case 'careerForm':
    $data = [
      'name'    =>  $_POST['name'],
      'email'   =>  $_POST['email'],
      'resume'  =>  isset($_FILES['resume']) ? $_FILES['resume'] : null,
      'message' =>  $_POST['message']
    ];

    if ($data['resume'] && $data['resume']['error'] == 0) {
      $fileName = $data['resume']['name'];
      $fileTmpName = $data['resume']['tmp_name'];
      $fileSize = $data['resume']['size'];
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
      $sanitizedUserName = preg_replace('/[^a-zA-Z0-9]/', '_', $data['name']);
      $fileName = 'resume_' . $sanitizedUserName . '_' . date('Ymd_His') . '.' . $fileType;

      // Check file size (5MB limit)
      if ($fileSize > 5 * 1024 * 1024) {
        $retVal['status'] = 'err';
        $retVal['err'] = 'Max allowed file size is 5MB.';
        echo json_encode($retVal);
        exit;
      }

      // Move the uploaded file to a specific directory
      $uploadDir = 'uploads/';
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
      }
      move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
      $data['resume_name'] = $fileName;
    } else {
      $retVal['status'] = 'err';
      $retVal['err'] = 'File upload error, please try again. File type should be .pdf, .doc, or .docx';
      echo json_encode($retVal);
      exit;
    }

    $sendEmail = $clsMail->careerForm($adminEmail, $data);

    if ($sendEmail) {
      $retVal['status'] = 'ok';
    } else {
      $retVal['status'] = 'err';
    }

    break;

  default:
    $retVal['msg'] = 'err';
    break;
}


echo json_encode($retVal);
