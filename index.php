<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="info.php" method="post">
      <label for="name">your name</label>
      <input type="text" name="name" placeholder="name" value="">

      <label for="address">email address</label>
      <input id='addressInput' type="text" name="address" placeholder="email address" value="">

      <label for="message">Message</label>
      <textarea rows="4" cols="50" type="text" name="body" placeholder="your message" value=""></textarea>

      <button type="submit" name="button">submit</button>
    </form>
  </body>
</html>




<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once ('vendor/autoload.php');
require('info.php');


$m = new PHPMailer(true);

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = 2;

$m->Host = 'smtp.gmail.com';
$m->Username = 'quentinjosephinfo@gmail.com';
$m->Password = 'funktell1980';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->From = 'qej2@icloud.com';
$m->FromName = 'Quentin Joseph';
$m->addReplyTo('qej2@icloud.com', 'Reply Address');
$m->addAddress('quentinjoseph@me.com', 'Quentin Me');

$m->Subject = 'This is a test';
$m->Body = 'Trying again without var_dump';
$m->AltBody = 'Trying again without var_dump';

$m->send();
*/ ?>
