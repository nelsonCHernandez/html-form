<?php
$name = $_POST['name'];
$userEmail = $_POST['email'];
$msg = $_POST['msg'];

$emailFrom = 'mercuriss365@gmail.com';
$emailSubject = 'New Form Submission';
$emailBody = "You have received a new message from the user $name.\n".
"Here is the message:\n $msg\n".
"\n Reply-To: $userEmail\n";
// mail
$to = "nelsoncamposh05@gmail.com";
$headers = "From: $emailFrom \r\n";
"Reply-To: $userEmail \r\n".
mail($to, $emailSubject, $emailBody, $headers);
?>
