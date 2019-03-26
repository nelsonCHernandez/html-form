<?php
$name = $_POST['name'];
$useremail = $_POST['email'];
$msg = $_POST['msg'];

$emailFrom = 'mercuriss365@gmail.com';
$emailSubject = 'New Form Submission';
$emailBody = "You have received a new message from the user $name.\n". 
"Here is the message:\n $message";
// mail(to,subject,message,headers)
$to = "nelsoncamposh05@gmail.com";
$headers = "From: $email_From \r\n";
$headers .= "Reply-To: $useremail \r\n";
mail($to, $emailSubject, $emailBody, $headers);

?>