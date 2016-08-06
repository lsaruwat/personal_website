<?php


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


$message = 
"Name: $name\r\n".
"Email: $email\r\n".
"Subject: $subject\r\n".
"Message: $message\r\n";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

$headers = 'From: webmaster@scriptingaway.com' . "\r\n" .
    'Reply-To: webmaster@scriptingaway.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send
if($email != ""){
	if(mail('lsaruwatari@gmail.com', 'Scriptingaway Form', $message, $headers))$response = "Message sent successfully";
	else $response = "Message failed. Please send email directly to lsaruwatari@gmail";
}

else $response = "Email required!";

echo json_encode(array("response"=>$response));
?>