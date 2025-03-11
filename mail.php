<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone=$_POST['phone'];
$message= $_POST['message'];
$to = "medha.ai21@bmsce.ac.in";
$subject = "Customer Query mail";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n PhoneNumber =" . $phone . "\r\n Message =" . $message;
$headers = "From: medha2003shashi@gmail.com" . "\r\n" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:tq.html");
?>