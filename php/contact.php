<?php
session_start();
header('Content-type: application/json');
include 'config.php';
include 'web_classes.php';
$data['name']=$_POST['name'];
$data['email']=$_POST['email'];
$data['social']=$_POST['social'];
$data['message']=$_POST['message'];
$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data2 = array(
		'secret' => '6Lc4kigUAAAAAF930b6S1jk86dadtjsE5CC1MlQ7',
		'response' => $_POST["g-recaptcha-response"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data2)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);
	// if ($captcha_success->success==false) {
	// 	print("error");
	// }else{
		$remote_class=New Remote();
		$customer_check=$remote_class->CallAPI('POST', ENDPOINT."create_wc_contact_home/",$data);
		$customer_c=json_decode($customer_check,true);
		 $response = array ('response'=>'success');  
		 	echo json_encode($response);
	// }
