<?php

$address = $_POST['address'];

$body = htmlspecialchars($_POST['body']);

$name = $_POST['name'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once ('vendor/autoload.php');
// require('info.php');


$m = new PHPMailer(true);

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = 2;

$m->Host = 'smtp.gmail.com';
$m->Username = 'quentinjosephinfo@gmail.com';
$m->Password = 'funktell1980';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->From = $address;
$m->FromName = $name;
$m->addReplyTo($address, 'Reply Address');
$m->addAddress('quentinjosephinfo@gmail.com', 'Quentin Me');

$m->Subject = 'This is a test';
$m->Body = $body;
$m->AltBody = $body;

$m->send();

 ?>
