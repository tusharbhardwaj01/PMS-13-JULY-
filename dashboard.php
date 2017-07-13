<!doctype html>
<html>
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="images/mainlogo.jpg">
        <link  rel="stylesheet" href="css/w3.css">
        
        
   <title> Home Page</title>
   <style>
.im {width: 200px; height:200px;}     
.mySlides {display:none}
.w3-tag {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
   </style>


</head>
<body style=" background-image: url('images/bkg-blu.jpg');">
    
    
     <div class="w3-container w3-cyan">
                <div class="w3-row">
                    <div class="w3-col m2 l2 w3-left w3-padding-small">
                         <a href="dashboard.php"> <img src="images/mainlogo.jpg" alt="DESIDOC"></a>
                    </div>
                    <div class="w3-col m10 l10 w3-padding-16 w3-left-align">
                        <h1><img src="images/headertext.png" alt="DESIDOC"></h1>
                    </div>
                </div>
     </div>
    
    
         <div class="w3-bar w3-container w3-black ">
             <a href="dashboard.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">DASHBOARD</a>
             <a href="registration.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">REGISTER</a>
             <a href="login.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">LOGIN</a>
             <a href="aboutus.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">ABOUT US</a>
             <a href="contactus.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">CONTACT US</a>
            
        </div>
       

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:40px;margin-bottom:30px">

  <div class="w3-panel">
    <h1><b>MARKETING</b></h1>
    
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
        <img src="images/J1.jpg" style="width:100%">
    </div>
    <div class="w3-display-container mySlides">
        <img src="images/J2.jpg" style="width:100%">
    </div>
    <div class="w3-display-container mySlides">
        <img src="images/J3.jpg" style="width:100%">
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
<!--      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>-->
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  
            <!-- Team Container -->
          <div class="w3-container w3-padding-64 w3-center" id="team">
                <h1>OUR TEAM</h1>
                <p><b>Meet the team</b></p>
                
<!--                        <div class="w3-row-padding w3-margin-top">
                            <div class="w3-quarter">
                                <div class="w3-card-4 w3-hover-opacity">
                                    <img src="images/directorsir.jpg" style="width:100%">
                                    <div class="w3-container w3-light-grey">
                                        <h3>Shri Gopal Bhushan</h3>
                                        <p>Scientist 'G'</p>
                                        <p>Director,DESIDOC</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="w3-quarter">
                                <div class="w3-card-4 w3-hover-opacity">
                                    <img src="images/DrRajeevVij.jpg" style="width:100%">
                                    <div class="w3-container w3-light-grey">
                                        <h3>Shri Gopal Bhushan</h3>
                                        <p>Scientist 'G'</p>
                                        <p>Director,DESIDOC</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="w3-quarter">
                                <div class="w3-card-4 w3-hover-opacity">
                                    <img src="images/tapeshsir.jpg" style="width:100%">
                                    <div class="w3-container w3-light-grey">
                                        <h3>Shri Gopal Bhushan</h3>
                                        <p>Scientist 'G'</p>
                                        <p>Director,DESIDOC</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="w3-quarter">
                                <div class="w3-card-4 w3-hover-opacity">
                                    <img src="images/RAJPAL SINGH.jpg" style="width:100%">
                                    <div class="w3-container w3-light-grey">
                                        <h3>Shri Gopal Bhushan</h3>
                                        <p>Scientist 'G'</p>
                                        <p>Director,DESIDOC</p>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                    <div class="w3-row"><br>

                        <div class="w3-quarter">
                            <a href='directorprofile.php' style="text-decoration:none">
                            <img src="images/directorsir.jpg" alt="Director image" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                            <h3>Shri Gopal Bhushan</h3>
                            <p>SCIENTIST 'G'<br>Director,DESIDOC</p>
                            </a>
                        </div>

                        <div class="w3-quarter">
                            <img src="images/DrRajeevVij.jpg" alt="Coordinator" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                          <h3>Dr. Rajeev Vij</h3>
                          <p>SCIENTIST 'G'<br>Coordinator</p>
                        </div>

                        <div class="w3-quarter">
                            <img src="images/tapeshsir.jpg" alt="Head of marketing" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                          <h3>Shri Tapesh Sinha</h3>
                          <p>SCIENTIST 'E'<br>Head</p>
                         </div>

                        <div class="w3-quarter">
                            <img src="images/RAJPAL SINGH.jpg" alt="TOC" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                          <h3>Shri Rajpal Singh</h3>
                          <p>TECHNICAL OFFICER 'C'</p>
                        </div>

                    </div>

                     <div class="w3-row"><br>

                        <div class="w3-quarter">
                            <img src="images/naresh.jpg" alt="Director image" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                          <h3>Shri Naresh Kumar Lor</h3>
                          <p>SENIOR TECHNICAL ASSTT 'B'</p>
                        </div>

                        <div class="w3-quarter">
                            <img src="images/jeet pal.jpg" alt="Coordinator" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                          <h3>Shri Jeetpal Singh</h3>
                          <p>TECHNICIAN 'B'</p>
                        </div>
                         
                         <div class="w3-quarter">
                             <img src="images/NitinBansal.jpg" alt="Coordinator" style="width:60%" class="w3-card-4 w3-round-large w3-hover-opacity im">
                          <h3>Shri Nitin Bansal</h3>
                          <p>ADMIN ASSISTANT 'A'</p>
                        </div>

                    </div>
    
          </div>

  </div>


    
    
    
    <script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
    
    </script>
        
    
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500); // Change image every 2 seconds
}

</script>
   
<footer class="w3-container w3-center w3-cyan w3-margin-top">
    <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
</footer>


	   </body>
	   </html>