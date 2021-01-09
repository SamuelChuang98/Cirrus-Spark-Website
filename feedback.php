<?php 

if(isset($_POST['#submit'])){
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$PhoneNumber = $_POST['Phone Number'];
	$City = $_POST['City/Town'];
	$Service =$_POST['Service'];
	$comments = $_POST['Comments & specifications'];

	$mailTo ="info@cirrusspark.com";
	$headers ="From: ".$Email;
	$txt = "You have received an email from ".$Name.".\n\n".$comments;

	mail($mailTo, $Service, $txt, $headers);
	header("Location: bookNow.php");
}


?>
