<?php
    $page_title = "Montreal Web Design and Marketing | Cirrus Spark";

    $desc="Cirrus Spark is a tech and web design company focused on bringing small business into the spotlight.";
    $keys="web design, web development, server installation, social media marketing, canada, montreal, quebec, local, small business, medium business";

    include("includes/header.php");
?>

<link rel="stylesheet" type="text/css" href="css/home.css">

<section class="wrapper">
    <section id="main-top" title="Tech Background">
        <div id="info-top">
            <h2 data-aos="zoom-out"> Spark </br> a new start</h2>

            <div id="withUs" data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                <img src="img/logo.png" alt="Cirrus Spark Logo">
                <p>with</p>
            </div>
            <div id="cta-btn">
                <button onclick="location.href='bookNow'">Contact Us</button>
                <button onclick="location.href='OurServices'">Our Services</button>
            </div>
        </div>
        
    </section>
    <section id="m-statement" title="Montreal">
        <div id="statement-box" data-aos="fade-up">
            <h2>Our Mission</h2>
            <p>Based in Montreal, Cirrus Spark is a tech and web marketing agency dedicated in bringing small and medium size businesses to light 
                with new age technology and resources. We believe that anything is possible as long as the business 
                is set with a great marketing material. In the world of web and media, do you have all you need to increase your audience? 
                Get a quote with us today to see how much more we can improve it!

            </p>
        </div>
    </section>
    <section id="ourServices">
        <h2>Our Services</h2>
        <div id="web-sect">
            <img class="img" data-aos="fade-right"
            
            srcset="img/wd/webDesign.jpg 1600w,
                img/wd/webDesign-l.jpg  1200w,
                img/wd/webDesign-m.jpg  980w,
                img/wd/webDesign-s.jpg  480w
            "
            alt="Web Design"
            >
            <div class="serv-desc" data-aos="fade-left">
                <h4>create professional websites</h4>
                <p>We believe in bringing more user attention with good web design. 
                    This is why we spend extra time with the clients to discuss and 
                    plan out all the clear details of their business to finally create a fully developped website that would reflect their brand.</p>
                <button onclick="location.href='OurServices'">learn more > </button>
            </div>
        </div>
        <div id="serv-sect">
        <img class="img" data-aos="fade-left"
        
        srcset="img/server/server.jpg 1600w,
                img/server/server-l.jpg 1200w,
                img/server/server-m.jpg 980w,
                img/server/server-s.jpg 480w
            "
            alt="Server Installation"
        >
            <div class="serv-desc" data-aos="fade-right">
                <h4>server installation</h4>
                <p>Data management is essential in keeping information organized. 
                    You need a secure place where you can store your client files that can be accessed from any of your computers 24/7 and a backup of your data. 
                    A server is what you need. We will work with you to secure your data and provide and set you up with our most reliable servers. </p>
                <button onclick="location.href='OurServices'">learn more > </button>
            </div>
            
        </div>
        <div id="media-sect">
        <img class="img" data-aos="fade-right"
            srcset="img/media/socialmedia.jpg 1600w,
                    img/media/socialmedia-l.jpg 1200w,
                    img/media/socialmedia-m.jpg 980w,
                    img/media/socialmedia-s.jpg 480w
            "
            alt="Social Media Marketing"
        >

            <div class="serv-desc" data-aos="fade-left">
                <h4>social media marketing</h4>
                <p>Now that the basics are set up, you need to generate some leads! Social Media marketing is the way to go. 
                    Attract traffic to your website using adsense, Facebook ads, LinkedIn ads, etc. We will work with you 
                    to grow your online presence and build a custom marketing plan for your business.
                </p>
                <button onclick="location.href='OurServices'">learn more > </button>
            </div>
        </div>


    </section>



</section>

<?php
    include("includes/footer-2.php");
    include("includes/footer.php");
?>