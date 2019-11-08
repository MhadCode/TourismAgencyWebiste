<?php 
include('../config/main.php'); 
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// $mail->isSMTP(true);
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'viajeroshubtravelandtours@gmail.com';                 // SMTP username
$mail->Password = 'khongkhong';                           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;      


 $fullname = $_REQUEST['fname'].' '.$_REQUEST['lname'];
 $sender = $_REQUEST['email'];
 $phone = $_REQUEST['phone'];
 $arrival = $_REQUEST['arrival'];
 $depature = $_REQUEST['depature'];
 $child = $_REQUEST['child'];
 $adult = $_REQUEST['adult'];
 $msg = $_REQUEST['message'];
 $query = "INSERT INTO tbl_guest (gst_fname,gst_lname,gst_email,gst_phone,gst_depart_dt,gst_arrival_dt,gst_days,gst_adult,gst_child,gst_tour,gst_booking) VALUES ('{$_REQUEST['fname']}','{$_REQUEST['lname']}','$sender','$phone','$depature','$arrival','0','$adult','$child','0',now())";
 mysqli_query($conn, $query);
 $bodycont = '<!DOCTYPE html>
<html>
<head>
    <title>Book Guest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
        <div class="container">
        <div class="row">
            <div class="col text-center">Dear Viajeros, <br><br>
            Name: '. $fullname .'<br>
            Email: '. $sender .'<br>
            Phone: '. $phone .'<br>
            Arrival: '. $arrival .'<br>
            Depature: '. $depature .'<br>
            Child: '. $child .'<br>
            Adult: '. $adult .'<br>
            Message: '. $msg .'<br><br>
            </div>
        </div>
        <div class="row" id="foot">
        <div class="col text-center">© '.date('Y').' Viajeros Hub Palawab, All Rights Reserved</div>
        </div>
        </div>
        </body>
        </html>';
$mail->setFrom($sender, $fullname);
$mail->addAddress('viajeroshubtravelandtours@gmail.com');
$mail->addReplyTo('noreply@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'Booking';
$mail->Body    =  $bodycont;
$mail->AltBody = $sender; 

if($mail->send()){
    // echo 'Message has been sent';
    include('sent/index.php');
}
else{
    include('error/index.php');
    // echo 'Something went wrong with the Email Server';
}
?>