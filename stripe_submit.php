<?php
require('stripe_config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];
	session_start();
	$price = $_SESSION['price'];
	$title = $_SESSION['title'];
	$data=\Stripe\Charge::create(array(
		"amount"=>$price,
		"currency"=>"usd",
		"description"=>$title,
		"source"=>$token,
	));

	echo "<pre>";
	print_r($data);
}
?>