<?php
$name=$_POST['name'];
$visitor_email=$POST['email'];
$message=$_POST['message'];

$email_from='kmcsltd2011@gmail .com';
$emal_subject="New Form Submission";
$email_body="User Name:$name.\n".
"User Email:$visitor_email.\n";

$to="kmcsltd2011@gmail .com";
$headers="From:$email_from\r\n";
$headers .="Reply-to:$visitor_email\r\n"
mail($to,$email_subject,$email_body,$headers);
header("Location: Join Us.htm);
?>