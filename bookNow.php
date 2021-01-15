<?php
    $page_title="Book Now |  Cirrus Spark";
    $title="Book Now";

    $desc="We bring the tools of the big players to everyone. Book a FREE estimate with us today to join the champion's league!";
    $keys="book now, contact us, email, phone number, more info, web development, servers, social media marketing, marketing, social media, web design";
    
    $first_line="We would be more than <strong>HAPPY</strong>";
    $second_line="To work with <strong>YOU!</strong>";
    
    
    include("includes/header.php");
    include("includes/header-2.php");
?>


<link rel="stylesheet" type="text/css" href="css/bookNow.css">
<script src="js/form-validation.js"></script>

<section id="main">

<div id ="booknowlogo"><img src="img/logo.png" alt="Cirrus Spark logo"></div>

 <section id="getintouch">
     <h2 id="touch"><strong> Get in touch </strong></br>with us <strong>Today</strong></h2>

     <p data-aos="fade-down-right" id="sbs-inst"> 
         Our <strong>step-by-step</strong> estimate process
         is built to deliver the service of
         <strong>Your</strong> requirements
     </p>

     <div class="list">

         <div class ="instruction" data-aos="fade-down-right">
             <div class="number">
                <h2>1</h2>
             </div>
             <div class="text">
                 <h3 class= "steps">Fill in the form</h3>
                 <p>You will be contacted within the <strong>next 1-2 business days</strong></p>
             </div>
         </div>

         <div class="instruction" data-aos="fade-down-right">
         <div class= "number">
                <h2>2</h2>
             </div>
             <div class="text">
                 <h3 class= "steps">Schedule a Meeting</h3>
                 <p>Tell us all of your requirements and we come up <strong>with our solution</strong></p>
             </div>

         </div>
         <div class="instruction" data-aos="fade-down-right">
         <div class= "number">
                <h2>3</h2>
             </div>
             <div class="text">
                 <h3 class= "steps">Sit Back and Relax</h3>
                 <p><strong>Regular review meetings</strong> will occur to make sure we are on the right path</p>
             </div>

         </div>
     </div>
 </section>

 <script defer src="form.js"></script>

 <div class ="quote">
    <h4>Free Quote</h4>
    <p> Request today and receive a <strong>15% discount!</strong></p>


     <form class= "fo" id= "form" action="feedback.php" method="post">
         <input type="text" placeholder="Full Name" name="name" id="name" required>
         <input type="text" placeholder="Email" name="email" id="email" required>
         <span id="invalidEmail">** Invalid Email **</span>
         <input type="text" placeholder="Phone Number" name="phoneNum" id="phonenum" required>
         <input type="text" placeholder="City/Town" name="city" id="city">
           <select name="Service" id="Service" required>
           <option value="Service" selected disabled >-- Select a Service --</option>
             <option value="Web Desgin & Development">Web Design</option>
             <option value="Server Installation">Server Installation</option>
             <option value="Social Media Marketing">Social Media Marketing</option>
           </select>
        <span id="invalidService">** Please select a service **</span>
        <textarea placeholder="Comments & Specifications" name ="comments" id="comments"></textarea>
   
         <input type="submit" Value="Book Now" id="submit" onclick="return ValidateForm()">

     </form>
</div>
</section>

<?php
    include("includes/footer.php");
?>



