<?php include('form_process.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Website Templates</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   
<link rel="stylesheet" href="package.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg" >
<!-- The video 
<video autoplay muted loop id="myVideo">
  <source src="bgvideo.mp4" type="video/mp4">
</video>-->
    <ul id="progressbar" class="ucontainer" >
    <li  class="active">Account Setup</li>
    <li >Packages</li>
    <li >Templates</li>
    <li >Summary</li>
    
  </ul>
    <div class="stages container2">
        
  <ul>
    <li class="step"><i class="material-icons" style="color:white;">check</i></li>   
      <li class="pipe"></li>
        
    <li class="step active"><i class="material-icons" style="color:white;">check</i></li>
    <li class="pipe"></li>
    <li class="step"><i class="material-icons" style="color:white;">check</i></li>
     <li class="pipe"></li>
    <li class="step"><i class="material-icons" style="color:white;">check</i></li>
     
    
  </ul>
</div>
    <div class="success"><?= $success ?></div>
<div class="container tab" >  
  <form class="contact">
    <h3 style="text-align:center;">Quick Contact</h3>
    <h4 style="text-align:center;">Contact us today!</h4>
    <fieldset>
      <input id="name" placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
        <span id="nameError" style="color:red; font-size:12px;float: left;"></span>
    </fieldset>
    <fieldset>
      <input id="email" placeholder="Your Email Address" type="text" name="email" tabindex="2" required>
         <span id="emailError" style="color:red; font-size:12px;float: left;"></span>
    </fieldset>
    <fieldset>
      <input id="phone"  placeholder="Your Phone Number" type="text" name="phone" tabindex="3" required>
     <span id="phoneError" style="color:red; font-size:12px;float: left;"></span>
    </fieldset>       
  </form>
</div>
 
<div class="w3-row-padding w3-center w3-margin-top container1 tab" id="Silver Package">
    <h2 >Choose one package</h2>
<div class="w3-third" id="Silver Package" >
  <div class="w3-card w3-container popup" id="Silver Package" style="min-height:460px;" onclick='swapImage( this );'>
     <!-- <span class="popuptext" id="silverPopup" >You chosen Silver plan.</span>-->
  <h3 style="font-family: montserrat, arial, verdana;" id="Silver Package">SILVER</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"><img class="ic" id="Silver Package" src="images/silver.jpg" width="30%"></i>
<ul id="Silver Package" style="list-style-type: circle;">  
<p><li id="Silver Package" >Lorem ipsum dolor sit amet</li></p>
<p><li id="Silver Package" >Consectetur adipiscing elit</li></p>
<p><li id="Silver Package" >Lorem ipsum dolor sit amet</li></p>
 <p><li id="Silver Package" >Consectetur adipiscing elit</li></p>
</ul>
  </div>
</div>

<div class="w3-third" id="Gold Package">
  <div class="w3-card w3-container popup" style="min-height:460px;font-family: montserrat, arial, verdana;" id="Gold Package" onclick='swapImage( this );'  >
      <!--<span class="popuptext" id="goldPopup" >You Chosen Gold plan.</span>-->
  <h3 id="Gold Package" style="font-family: montserrat, arial, verdana;">GOLD</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"><img class="ic" id="Gold Package" src="images/gold.jpg" width="30%"></i>
<ul id="Gold Package" style="list-style-type: circle;">  
<p><li id="Gold Package">Lorem ipsum dolor sit amet</li></p>
<p><li id="Gold Package">Consectetur adipiscing elit</li></p>
<p><li id="Gold Package">Lorem ipsum dolor sit amet</li></p>
 <p><li id="Gold Package">Consectetur adipiscing elit</li></p>
</ul>
  </div>
</div>

<div class="w3-third" id="Platinum Package" >
  <div class="w3-card w3-container popup" style="min-height:460px;font-family: montserrat, arial, verdana;" id="Platinum Package" onclick='swapImage( this );'>
    <!--  <span class="popuptext" id="platinumPopup">You Chosen Platinum plan.</span>-->
  <h3 style="font-family: montserrat, arial, verdana;" id="Platinum Package" >PLATINUM</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"><img class="ic" id="Platinum Package" src="images/platinum-level.png" width="30%"></i>
<ul id="Platinum Package" style="list-style-type: circle;">  
<p><li id="Platinum Package">Lorem ipsum dolor sit amet</li></p>
<p><li id="Platinum Package">Consectetur adipiscing elit</li></p>
<p><li id="Platinum Package">Lorem ipsum dolor sit amet</li></p>
 <p><li id="Platinum Package">Consectetur adipiscing elit</li></p>
</ul>
  </div>
</div>
</div>
    <div class="tab">
<div class="container" >
<form>
 <label for="category">Category</label>
    <select id="category" name="category">
     <option value="select">Select your category</option>
      <option value="entertainment" multiple>Entertainment/Media</option>
      <option value="creative">Creative</option>
      <option value="business">Business</option>
      <option value="wedding">Wedding</option>
<option value="education">Education</option>
<option value="nonprofit">Nonprofit</option>
<option value="estate">Real Estate</option>
<option value="mobile">Mobile</option>
<option value="corporate">Corporate</option>
<option value="retail">Retail</option>
    </select>
</form>
</div>
    
    <h2 class="packages" id="h" style="font-family: 'Open Sans', sans-serif;display:none;color: white;">Choose The Template</h2>

<div class="row packages" style="display:none;">
  <div class="column">       
   <img src="images/infinite.png" style="width:100%;"  onclick="highlet(this);">
     <i class="fa fa-eye ar" onclick="openModal();currentSlide(1)" onmouseover="s1();" onmouseout="normalImg(this);" style="font-size:20px;"><img id ="1" src="images/infinite.png" class="preview" style="left:0;"></i>
    
  </div>
  <div class="column">
       
    <img src="images/intact.png" style="width:100%;" onclick="highlet(this);">
            <i class="fa fa-eye" onclick="openModal();currentSlide(2)"  onmouseover="s2();" onmouseout="normalImg(this);" style="font-size:20px;"><img id ="2" src="images/intact.png" class="preview"></i>
           
  </div>
  <div class="column">
       
    <img src="images/jevelin.png" style="width:100%;" onclick="highlet(this);">
           <i class="fa fa-eye" onclick="openModal();currentSlide(3)" onmouseover="s3();" onmouseout="normalImg(this);" style="font-size:20px;"><img id ="3" src="images/jevelin.png" class="preview" ></i>
           
  </div>
  <div class="column">
       
    <img src="images/kallyas.png" style="width:100%;" onclick="highlet(this);">
        <i class="fa fa-eye" onclick="openModal();currentSlide(4)" onmouseover="s4();" onmouseout="normalImg(this);" style="font-size:20px;"><img id ="4" src="images/kallyas.png" class="preview"></i>
           
  </div>
        </div>
    <div class="row packages" style="display:none;">

    <div class="column">
         
    <img src="images/massive.png" style="width:100%;" onclick="highlet(this);">
          <i class="fa fa-eye" onclick="openModal();currentSlide(5)" onmouseover="s5();" onmouseout="normalImg(this);" style="font-size:20px;"><img id ="5" src="images/massive.png" class="preview" style="left: 0;"></i>
           
  </div>
    <div class="column">
         
    <img src="images/mist.png" style="width:100%;" onclick="highlet(this);">
           <i class="fa fa-eye" onclick="openModal();currentSlide(6)" onmouseover="s6();" onmouseout="normalImg(this);" style="font-size:20px;"><img id ="6" src="images/mist.png" class="preview"></i>
           
  </div>
</div>
    
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="images/infinite.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="images/intact.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="images/jevelin.png" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="images/kallyas.png" style="width:100%">
    </div>
      <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="images/massive.png" style="width:100%">
    </div>
      <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="images/mist.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="images/infinite.png" style="width:100%" onclick="currentSlide(1)" alt="Creative">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/intact.png" style="width:100%" onclick="currentSlide(2)"  alt="Mobile">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/jevelin.png" style="width:100%" onclick="currentSlide(3)"  alt="Corporate">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/kallyas.png" style="width:100%" onclick="currentSlide(4)"  alt="Entertainment">
    </div>
       <div class="column">
      <img class="demo cursor" src="images/massive.png" style="width:100%" onclick="currentSlide(5)"  alt="Business">
    </div>
       <div class="column">
      <img class="demo cursor" src="images/mist.png" style="width:100%" onclick="currentSlide(6)"  alt="Retail">
    </div>
      
  </div>
</div>
        </div>
 <div class="container tab" style="padding: 0px;">  
  <form class="contact" id="formsubmission" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Summary</h3>
    <fieldset>
      <input id="name1" placeholder="Your name" type="text" name="name" >
    </fieldset>
    <fieldset>
      <input id="email1" placeholder="Your Email Address" type="text" name="email" >
     
    </fieldset>
    <fieldset>
      <input id="phone1" placeholder="Your Phone Number" type="text" name="phone">
             
    </fieldset>
      <fieldset>
      <input id="package" placeholder="Your selected package" type="text" name="package" readonly>
             
    </fieldset>
       
      <fieldset>
          <label for="template">Choosen Template</label>
          <img id="ct" src="images/infinite.png" width="100%;" height="100%" >
    </fieldset>
 
  </form>
</div>
     <div style="overflow:auto;" class="bcontainer" >
   <!-- <div style="float:right;">-->
         <div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" name="submit" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
    <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("formsubmission").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
    var patt = new RegExp(/^[a-zA-Z\s\.]+$/);
   var pat=new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
     var ph = new RegExp(/^\d{10}$/);
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
     
    // If a field is empty...
    if (! patt.test(y[0].value) || ! pat.test(y[1].value.trim()) || ! ph.test(y[2].value.trim())){
      // add an "invalid" class to the field:
    
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
  

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    function s1() {    
      document.getElementById("1").style.display="block";            
    }
  function s2() { 
       document.getElementById("2").style.display="block";
  }
    function s3() { 
         document.getElementById("3").style.display="block";
         
    }
    function s4() { 
   document.getElementById("4").style.display="block";
    }
       function s5() {
           document.getElementById("5").style.display="block";
       }
       function s6() {
           document.getElementById("6").style.display="block";
      }
    
  function normalImg(x) {
       document.getElementById("1").style.display="none";  
        document.getElementById("2").style.display="none"; 
      document.getElementById("3").style.display="none";   
      document.getElementById("4").style.display="none";
      document.getElementById("5").style.display="none";
      document.getElementById("6").style.display="none";  
      }
    
</script>
<script type="text/javascript">

var prevSquare;
function swapImage( thisSquare )
{
if( prevSquare && prevSquare != thisSquare )
{

// Alter prevSquare image (if prevSquare is an <img> element)
prevSquare.style.border="none";
prevSquare.style.borderRadius="none";
//prevSquare.style.color="black";
//prevSquare.style.background="white";

}

// Alter thisSquare to your active image
thisSquare.style.border="4px groove gold";
   thisSquare.style.borderRadius="16px";
    thisSquare.style.fontFamily="montserrat, arial, verdana";
    //thisSquare.style.backgroundImage="url(images/main-page.jpg)";
   // thisSquare.style.color="white";
     
// Assign value to previos square
prevSquare = thisSquare;
}

</script> 
    <script >

var preSquare;
function highlet( thisSqure )
{
if( preSquare && preSquare != thisSqure )
{

// Alter prevSquare image (if prevSquare is an <img> element)
preSquare.style.border="5px double #ccc";
    preSquare.style.borderRadius="none";
preSquare.style.padding="0px";
    //preSquare.style.paddingBottom="0px";

}

// Alter thisSquare to your active image
thisSqure.style.border="4px solid gold";
    thisSqure.style.borderRadius="16px"
   thisSqure.style.padding="10px";
     //thisSqure.style.paddingRight="12px";
     //thisSqure.style.paddingBottom="12px";
    
     
// Assign value to previos square
preSquare = thisSqure;
}

</script> 
    <script>
 document.onclick = function(event) {
    event = event || window.event; // IE specials
    var target = event.target || event.srcElement; // IE specials

    if(target.nodeName === "LI" || target.nodeName === "H3" || target.className==="ic" || target.className==="w3-card w3-container popup" || target.className==="w3-third" || ! target.className==="row packages" || ! target.className==="bcontainer" || ! target.className==="container"  || ! target.className==="column") {
        document.getElementById("package").value=target.id;
       
    }
     else if(target.nodeName==="IMG" || ! target.className=="ic" || ! target.nodeName==="DIV" || ! target.className==="w3-card w3-container popup" || ! target.className==="w3-third" ){
         document.getElementById("ct").src=target.src;
     }
};
    </script>

   
  <!-- <script src="js/jquery-3.3.1(uncomDev).js"></script>-->
    <script src="js/jquery-3.3.1.min(comLive).js"></script>
    
    <script>
     $('#category').on('change', function() {
         $('.packages').show();
});
  
    </script>
    <script>
     $('button').click(function(){
        $('#name1').val($('input[type="text"]').val());
         $('#email1').val($('#email').val());
         $('#phone1').val($('#phone').val());
    });
        
    </script>
    <script>
      $(document).ready(function(){
    $("button").click(function(){
    var firstname=$("#name").val();
    var name_regex = /^[a-zA-Z\s\.]+$/;
        
   if( ! firstname.match(name_regex)  )
      return " Name is required";
        
        return " ";       
    });
    $("button").click(function(event){
        $("#nameError").html(event.result);
    
    });  
}); 
       $(document).ready(function(){
    $("button").click(function(){
        var email=$.trim($("#email").val());
        var email_regex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if( ! email.match(email_regex)  )
      return " Email is required";
        
        return " ";     
    });
    $("button").click(function(event){
         $("#emailError").html(event.result);
    
    });  
});
$(document).ready(function(){
    $("button").click(function(){
        var phone=$.trim($("#phone").val());
        var num_regex=/^\d{10}$/;
   if( ! phone.match(num_regex)  )
      return "Mobile number is required";
        
        return " ";     
    });
    $("button").click(function(event){
         $("#phoneError").html(event.result);
    
    });  
});
      
    </script>
    
</body>
</html>
