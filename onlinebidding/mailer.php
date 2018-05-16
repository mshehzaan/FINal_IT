<?php

date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail -> isSMTP();


$mail -> SMTPDebug = 0;

$mail -> Debugoutput = 'html';

$mail -> Host = 'smtp.gmail.com';

$mail -> Port = 587;
$mail -> SMTPSecure = 'tls';


$mail -> SMTPAuth = true;
$mail -> Username = "databaseucl@gmail.com";

$mail -> Password = "databases";

$mail -> setFrom('databaseucl@gmail.com', 'UCL Database');

