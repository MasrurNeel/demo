<?php
$name = $_POST['name'];
$visitor_email = $POST_['email'];
$subject = $POST_['subject'];
$message = $POST_['message'];

$email_from ='mikum861@gmail.com';
$email_subject ='New Form Submission';
$email_body = "User Name:$name.\n".
              "User Email:$visitor_email.\n".
              "Subject:$subject.\n".
              "User Message:$message.\n";

$to = 'neeel404@gmail.com';
$headers = "Form: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html");
?>