<?php
    $page_title = "Welcome to Cirrus Spark";
    include("includes/header.php");
?>

<link rel="stylesheet" type="text/css" href="css/home.css">

<section class="wrapper">
    <section id="main-top">
        <div id="info-top">
            <h2 data-aos="zoom-out"> SPARK </br> A NEW START</h2>

            <div id="withUs" data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                <img src="img/logo.png">
                <p>with</p>
            </div>

            <button>CONTACT US</button>
            <button>OUR SERVICES</button>
        </div>
        
    </section>
    <section id="m-statement">
        <div id="statement-box" data-aos="fade-up">
            <h2>MISSION STATEMENT</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis imperdiet efficitur. 
                Nam porta urna nisl. Donec feugiat nisi ornare, consectetur neque eget, accumsan tellus. 
                Donec ut pellentesque felis. Morbi scelerisque nulla enim, ac elementum nunc mollis eu.
            </p>
        </div>
    </section>
    <section id="ourServices">
        <h2>OUR SERVICES</h2>
        <div id="web-sect">
            <img src="img/webDesign.jpg" class="img" data-aos="fade-right">
            <div class="serv-desc" data-aos="fade-left">
                <h4>CREATE PROFESSIONAL WEBSITES</h4>
                <p>We believe in bringing more user attention with good branding. 
                    This is why we spend extra time with the clients to discuss and 
                    plan out all the clear details of their business to finally create a fully developped website that would reflect their brand.</p>
                <button>LEARN MORE > </button>
            </div>
        </div>
        <div id="serv-sect">
        <img src="img/server.jpg" class="img" data-aos="fade-left">
            <div class="serv-desc" data-aos="fade-right">
                <h4>CREATE PROFESSIONAL WEBSITES</h4>
                <p>We believe in bringing more user attention with good branding. 
                    This is why we spend extra time with the clients to discuss and 
                    plan out all the clear details of their business to finally create a fully developped website that would reflect their brand.</p>
                <button>LEARN MORE > </button>
            </div>
            
        </div>
        <div id="media-sect">
        <img src="img/smedia.jpg" class="img" data-aos="fade-right">
            <div class="serv-desc" data-aos="fade-left">
                <h4>CREATE PROFESSIONAL WEBSITES</h4>
                <p>We believe in bringing more user attention with good branding. 
                    This is why we spend extra time with the clients to discuss and 
                    plan out all the clear details of their business to finally create a fully developped website that would reflect their brand.</p>
                <button>LEARN MORE > </button>
            </div>
        </div>


    </section>



</section>

<?php
    include("includes/footer-2.php");
    include("includes/footer.php");
?>