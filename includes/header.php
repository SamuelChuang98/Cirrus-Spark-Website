<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $page_title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/head-and-foot.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
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
    <nav id="nav-row">
        <ul>
            <li><a href="aboutUs.php">ABOUT US</a></li>
            <li><a href="ourservices.php">OUR SERVICES</a></li>
            <li><a href="index.php"><img src="img/logo.png" alt="logo" id="logo"></a></li>
            <li><a href="portfolio.php">OUR WORK</a></li>
            <li><a href="bookNow.php">BOOK NOW</a></li>        
        </ul>
    </nav>

    <!-- Top Navigation Menu -->
    <div class="topnav">
    <a href="index.php"><img src="img/logo.png" alt="logo" id="logo"></a>
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
        <a href="aboutUs.php">ABOUT US</a>
        <a href="ourservices.php">OUR SERVICES</a>
        <a href="portfolio.php">OUR WORK</a>
        <a href="bookNow.php">BOOK NOW</a>
    </div>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a href="javascript:void(0);" class="icon" onclick="menu()">
        <i class="fa fa-bars"></i>
    </a>
    </div>
