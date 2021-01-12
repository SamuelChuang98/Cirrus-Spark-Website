<?php 


	$name = $_POST['name'];
	$emailfrom = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$city = $_POST['city'];
	$service = $_POST['Service'];
	$comments = $_POST['comments'];

	$emailTo= "info@cirrusspark.com";
	$headers = "From: ".$emailfrom;
	$txt = "This inquiry is from ".$name.",\n\nCLIENT INFO:\n\nName: ".$name."\nEmail: ".$emailfrom."\nPhone Number: ".$phoneNum."\nCity: "
	.$city."\nService Intersted in: ".$service."\nComments: ".$comments."\n\n=============Please contact him to schedule a quote=============";
	$subject = "Website Lead: ".$service;

	mail($emailTo, $subject, $txt, $headers);
	header("Location: thankyou");


?>
