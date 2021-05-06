<?php
    $page_title="Admin Log In |  Cirrus Spark";
    $title="Admin Access";

    $desc="We bring the tools of the big players to everyone. Book a FREE estimate with us today to join the champion's league!";
    $keys="book now, contact us, email, phone number, more info, web development, servers, social media marketing, marketing, social media, web design";
    
    include("includes/header.php");
?>

<link rel="stylesheet" type="text/css" href="css/AdminLogIn.css">

<section id="main">

    <div class="login">

        <h1>LOGIN</h1>
        <p>This page is strictly reserved for the page admins. If you are not supposed to be here, please kindly close the page. Thank you.</p>

        <form id= "credentials" action="" method="post">
         <input type="text" class="input" placeholder="Username" name="Username" id="Username" required>
         <input type="text"  class ="input" placeholder="Password" name="Password" id="Password" required>
   
         <input type="submit" class ="input" Value="Log in" id="connect" onclick="return ()">

     </form>


    
    </div>

</section>