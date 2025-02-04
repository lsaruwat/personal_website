<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$login = getenv('vitel_user');
$pass = getenv('vitel_pass');
$number = getenv('vitel_number'); 
$cell = '9702703575';

$message = "Name: $name, Email: $email, Subject: $subject, Message: $message";


$url = "https://smsout-api.vitelity.net?login=$login&pass=$pass&cmd=sendsms&src=$number&dst=$cell&msg=$message&xml=yes";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if($http_code == 200) $ret = 'Successfully sent!';
else{
	$ret = 'Message failed. Please send email directly to lsaruwatari@gmail.com';
	error_log(print_r($http_code,true));
	error_log(print_r($response,true));
}
echo json_encode(array("response"=>$ret));

?>
