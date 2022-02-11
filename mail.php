<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "ramya_nithi@yahoo.co.in";
$subject = "New message from HWL Engineering";

$txt = "Name = ". $name . "\r\nEmail = ". $email . "\r\nMessage = ". $message;

$headers = "From: pr_sankar@gmail.com";


if($email!=NULL){

mail($to,$subject,$txt,$headers);

}

header("location: index.html");

 ?>
