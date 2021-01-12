<?php
    $page_title="Book Now |  Cirrus Spark";
    $title="Book Now";
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
     <h2 id="touch"><strong> GET IN TOUCH</strong></br>WITH US <strong>TODAY</strong></h2>

     <p data-aos="fade-down-right"> 
         Our <strong>step-by-step</strong> estimate process
         is built to deliver the service of
         <strong>YOUR</strong> requirements
     </p>

     <div class = "list">

         <div class ="instruction" data-aos="fade-down-right">
             <div class="number">
                <h2><strong>1</strong></h2>
             </div>
             <div class="text">
                 <p><strong class= "steps">FILL IN THE FORM</strong></br><span>You will be contacted within the
                 <strong>next 1-2 business days</strong></span></p>
             </div>
         </div>

         <div class="instruction" data-aos="fade-down-right">
         <div class= "number">
                <h2><strong>2</strong></h2>
             </div>
             <div class="text">
                 <p><strong class= "steps">SCHEDULE A MEETING</strong></br><span>Tell us all of your requirements
                 and we come up <strong>with our solution</strong></span></p>
             </div>

         </div>
         <div class="instruction" data-aos="fade-down-right">
         <div class= "number">
                <h2><strong>3</strong></h2>
             </div>
             <div class="text">
                 <p><strong class= "steps">SIT BACK AND RELAX</strong></br><span><strong>Regular review meetings</strong> will occur
                 to make sure we are on the right path</span></p>
             </div>

         </div>
     </div>
 </section>

 <script defer src="form.js"></script>

 <div class ="quote">
    <h4>FREE QUOTE</h4>
    <p> Request today and receive a <strong>15% discount!</strong></p>


     <form class= "fo" id= "form" action="feedback.php" method="post">
         <input type="text" placeholder="Full Name" name="name" id="name" required>
         <input type="text" placeholder="Email" name="email" id="email" required>
         <span id="invalidEmail">** Invalid Email **</span>
         <input type="text" placeholder="Phone Number" name="phoneNum" id="phonenum" required>
         <input type="text" placeholder="City/Town" name="city" id="city">
           <select name="Service" id="Service" required>
           <option value="Service" selected disabled >-- Select a Service --</option>
             <option value="Web Desgin & Development">Web Design & Developement</option>
             <option value="Server Installation">Server Installation & Set up</option>
             <option value="Social Media Marketing">Digital Marketing</option>
           </select>
        <span id="invalidService">** Please select a service **</span>
        <textarea placeholder="Comments & Specifications" name ="comments" id="comments"></textarea>
   
         <input type="submit" Value="BOOK NOW" id="submit" onclick="return ValidateForm()">

     </form>
</div>
</section>

<?php
    include("includes/footer.php");
?>



