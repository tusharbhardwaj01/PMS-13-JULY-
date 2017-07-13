<?php
     include 'validate.php';
      if(!validate()){
        header("Location: login.php");
      }
?>

<html>
    <head>
        <meta charset="UTF-8">
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" type="image/png" href="images/mainlogo.jpg">
        <link rel="stylesheet" href="css/menu.css">
         <link rel="stylesheet" href="css/admin.css">
         <link  rel="stylesheet" href="css/w3.css">
         <script src="js/jquery.js" type="text/javascript"></script>
          <script src="js/script.js"></script>
          
          
        <title>User Home Page</title>
       
   <style>

.mySlides {
display:none;
margin-top: 0px;}

</style>
    </head>
    <body>
    <div class="w3-container w3-cyan">
                <div class="w3-row">
                    <div class="w3-col m2 l2 w3-left w3-padding-small">
                         <a href="dashboard.php"> <img src="images/mainlogo.jpg" alt="DESIDOC"></a>
                    </div>
                    <div class="w3-col m6 l6 w3-padding-16 w3-left-align">
                        <h1><img src="images/headertext.png" alt="DESIDOC"></h1>
                    </div>
                    <div class="w3-col m4 l4 w3-padding-16 w3-margin-top w3-right-align w3-bar-item w3-button w3-large w3-hover-cyan w3-text-white w3-wide">
                         <!--<h1><img src="images/user_img.jpg" alt="userimg"></h1>-->
                        <h1>USER PORTAL</h1>
                    </div>
                </div>
     </div>
        
        <div class="w3-bar w3-container w3-black ">
            <a href="#" class="w3-bar-item w3-button w3-medium w3-hover-black w3-left w3-right-align w3-text-cyan w3-wide" style="width:18%">USER PANEL</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:8%">LOGOUT</a>
            <a href="resetpass.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:16%">CHANGE PASSWORD</a>
            
            
        </div>
<!--        <form method="post" action="logout.php">
            <input type="hidden" name="zzz" value="qwerty"/>
            <input type="submit"/>
        </form>-->

            
<div id="page">
<div id="left">
<div id="cssmenu">
<ul>
   
   <li class='active has-sub'><a href='#'><span>Employee</span></a>
      <ul>
        
               
          <li class='last'><a href='user_empview.php'><span>View Employees</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Publication</span></a>
            <ul>
               
              
               <li><a href='view_pub.php'><span>View Publications</span></a></li>
               <li class='last'><a href='#'><span>View Purchase Details</span></a></li>
              
         
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Dispatch</span></a>
            <ul>
                
                <li><a href='dispatchdetails.php'><span>Dispatch Status</span></a></li>
                
            </ul>
         </li>
         <li><a href='aboutus.php'><span>About Us</span></a></li>
   <li><a href='contactus.php'><span>Contact Us</span></a></li>
</ul>     
</div>
</div>
    
        <div id="slider">
            <img class="mySlides" src="images/J1.jpg" style="height:331px;width:1020px;">
            <img class="mySlides" src="images/J2.jpg" style="height:331px;width:1020px;" >
            <img class="mySlides" src="images/J3.jpg" style="height:331px;width:1020px;">
        </div> 
    
</div> 


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




	 <footer class="w3-container w3-bottom w3-center w3-cyan w3-margin-top w3-padding-16">
             <p>© NSD,DESIDOC</p><br><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
        </footer>

    </body>
</html>
