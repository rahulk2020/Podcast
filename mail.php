<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$mobile= $_POST['mobile'];
$number= $_POST['message'];
$to = "rahulkhannaexe@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile Number = " . &number 
. "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?> 