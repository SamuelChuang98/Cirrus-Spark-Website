<?php
    $page_title = "Book Now";
    include("includes/header.php");
?>


<link rel="stylesheet" type="text/css" href="css/BookNow_Page.css">

<section id="top">
<div id="verticaltext">
    <h2>BOOK NOW</h2>
</div>
   <span> We would be more than <strong>HAPPY</strong></br>To work with <strong>YOU!</strong></span>
</section>

<section id="main">
<img src="img/logo.png" alt="Cirrus Spark logo">

 <section id="getintouch">
     <h2 id="touch"><strong> GET IN TOUCH</strong></br>WITH US <strong>TODAY</strong></h2>

     <p1>
         Our <strong>step-by-step</strong> estimate process</br>
         is built to deliver the service of</br>
         <strong>YOUR</strong> requirements
     </p1>

     <div class = "list">

         <div class ="instruction1">
             <div class= "number">
                <h2><strong>1</strong></h2>
             </div>
             <div class="text1">
                 <strong id ="fill">FILL IN THE FORM</strong></br><span>You will be contacted within the</br>
                 <strong>next 1-2 business days</strong></span>
             </div>
         </div>

         <div class="instruction2">
         <div class= "number">
                <h2><strong>2</strong></h2>
             </div>
             <div class="text1">
                 <strong id ="fill">SCHEDULE A MEETING</strong></br><span>Tell us all of your requirements</br>
                 and we come up <strong>with our solution</strong></span>
             </div>

         </div>

         <div class="instruction3">
         <div class= "number">
                <h2><strong>3</strong></h2>
             </div>
             <div class="text1">
                 <strong id ="fill">SIT BACK AND RELAX</strong></br><span><strong>Regular review meetings</strong> will occur</br>
                 to make sure we are on the right path</span>
             </div>

         </div>
     </div>
 </section>


 <div class ="quote">
    <h4>FREE QUOTE</h4>
    <span> Request today and recieve a <strong>15% discount!</strong></span>


     <form class= "fo">
         <input type="text" placeholder="Name"></br>
         <input type="text" placeholder="Email"></br>
         <input type="text" placeholder="Phone Number"></br>
         <input type="text" placeholder="City/Town"></br>

        

           <select name="Service" id="Service">
           <option value="Service">Service</option>
             <option value="Web Desgin & Develoopement">Web Desgin & Develoopement</option>
             <option value="Server Installation & Set up">Server Installation & Set up</option>
             <option value="Digital Marketing">Digital Marketing</option>
           </select></br>

         <input type="text" placeholder="Comments & Specifications" id="comments">
         <input type="submit" Value="BOOK NOW" id="submit">

     </form>
</div>

</section>

<?php
    include("includes/footer.php");
?>



