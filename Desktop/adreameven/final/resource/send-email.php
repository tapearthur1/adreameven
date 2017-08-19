<?php
require 'class.phpmailer.php';

$mail = new PHPMailer();
$mail->IsSMTP(false);
$mail->Mailer = 'smtp';
$mail->SMTPSecure = true;
$mail->Port = 587;
$mail->Host = 'smtp.mandrillapp.com';
$mail->IsHTML(true);

$mail->SMTPAuth = true;
$mail->Username = "adreamevents";
$mail->Password = "fwpTdiPhlGXYdt6XwJewng";

//Sender Info
$mail->From = "tapearthur1@gmail.com";
$mail->FromName = "User Anthentication";
