


<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $page_title;?></title>
        <meta name="description" content="<?php echo $desc;?>">
        <meta name="keywords" content="<?php echo $keys?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/head-and-foot.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <!-- FAVICON-->
        <link rel="icon" type="image/png" href="img/favicon.jpg"/>

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;900&display=swap" rel="stylesheet">

        <!--- CSS for animation --->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       
        <!----- JS for animation ----->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!---ion icons--->
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

        <script>
            function menu() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
            }
        </script>
    </head>
    
    <body>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v9.0'
            });
            };

            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
            attribution=setup_tool
            page_id="114273446696350"
    theme_color="#2cb1e5"
    logged_in_greeting="Greetings! How may I help you?"
    logged_out_greeting="Greetings! How may I help you?">
        </div>
    <nav id="nav-row">
        <ul>
            <li><a href="aboutUs">ABOUT US</a></li>
            <li><a href="OurServices">OUR SERVICES</a></li>
            <li><a href="index"><img src="img/logo.png" alt="logo" id="logo"></a></li>
            <li><strike>OUR WORK</strike></li>
            <li><a href="bookNow" id="bookNow-btn">BOOK NOW</a></li>        
        </ul>
    </nav>

    <!-- Top Navigation Menu (For mobile and Tablet) -->
        <div class="topnav">
        <a href="index"><img src="img/logo.png" alt="logo" id="logo"></a>
        <!-- Navigation links (hidden by default) -->
        <div id="myLinks">
            <a href="aboutUs">ABOUT US</a>
            <a href="OurServices">OUR SERVICES</a>
            <a href="bookNow">BOOK NOW</a>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a href="javascript:void(0);" class="icon" onclick="menu()">
            <i class="fa fa-bars"></i>
        </a>
        </div>
