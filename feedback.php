<?php 


	$name = $_POST['name'];
	$emailfrom = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$city = $_POST['city'];
	$service = $_POST['Service'];
	$comments = $_POST['comments'];

	$emailTo= "info@cirrusspark.com";
	$headers = "From: ".$emailfrom;
	$txt = "You have received an e-mail from ".$name.",\n\n".$comments;

	mail($emailTo, $service, $txt, $headers);
	header("Location: thankyou.php");


?>
