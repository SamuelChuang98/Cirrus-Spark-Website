<?php
    $page_title="Book Now |  Cirrus Spark";
    $title="Book Now";
    $first_line="We would be more than <strong>HAPPY</strong>";
    $second_line="To work with <strong>YOU!</strong>";
    $bg_img="img/lap2.jpg";
    
    
    include("includes/header.php");
    include("includes/header-2.php");
?>


<link rel="stylesheet" type="text/css" href="css/bookNow.css">

<section id="main">

<div id ="booknowlogo"><img src="img/logo.png" alt="Cirrus Spark logo"></div>

 <section id="getintouch">
     <h2 id="touch"><strong> GET IN TOUCH</strong></br>WITH US <strong>TODAY</strong></h2>

     <p data-aos="fade-down-right"> 
         Our <strong>step-by-step</strong> estimate process</br>
         is built to deliver the service of</br>
         <strong>YOUR</strong> requirements
     </p>

     <div class = "list">

         <div class ="instruction" data-aos="fade-down-right">
             <div class="number">
                <h2><strong>1</strong></h2>
             </div>
             <div class="text">
                 <p><strong class= "steps">FILL IN THE FORM</strong></br><span>You will be contacted within the</br>
                 <strong>next 1-2 business days</strong></span></p>
             </div>
         </div>

         <div class="instruction" data-aos="fade-down-right">
         <div class= "number">
                <h2><strong>2</strong></h2>
             </div>
             <div class="text">
                 <p><strong class= "steps">SCHEDULE A MEETING</strong></br><span>Tell us all of your requirements</br>
                 and we come up <strong>with our solution</strong></span></p>
             </div>

         </div>
         <div class="instruction" data-aos="fade-down-right">
         <div class= "number">
                <h2><strong>3</strong></h2>
             </div>
             <div class="text">
                 <p><strong class= "steps">SIT BACK AND RELAX</strong></br><span><strong>Regular review meetings</strong> will occur</br>
                 to make sure we are on the right path</span></p>
             </div>

         </div>
     </div>
 </section>


 <div class ="quote">
    <h4>FREE QUOTE</h4>
    <p> Request today and recieve a <strong>15% discount!</strong></p>


     <form class= "fo">
         <input type="text" placeholder="Name"></br>
         <input type="text" placeholder="Email"></br>
         <input type="text" placeholder="Phone Number"></br>
         <input type="text" placeholder="City/Town"></br>

        

           <select name="Service" id="Service">
           <option value="Service">Service</option>
             <option value="Web Desgin & Develoopement">Web Design & Developement</option>
             <option value="Server Installation & Set up">Server Installation & Set up</option>
             <option value="Digital Marketing">Digital Marketing</option>
           </select></br>

         <textarea placeholder="Comments & specifications" id="comments"> </textarea>
         <input type="submit" Value="BOOK NOW" id="submit">

     </form>
</div>
</section>

<?php
    include("includes/footer.php");
?>



