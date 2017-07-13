<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="icon" type="image/png" href="images/mainlogo.jpg">
        <link  rel="stylesheet" href="css/w3.css">
        <title>forgetpassword</title>
        <style>
               #cntr
               {
                width: 550px;
                height: 320px;
                /*border: solid black 1px;*/
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
                margin-bottom: 30px;
                box-shadow: 0px 0px 50px;
               }
                body
                {
                 background-image: url('images/bkg-blu.jpg');
                }
		 button
                 {
		  color:white;
		  background-color:green;
		 }
		  h1
                  {
                    color:brown;
                    font-family:arial;
		  }
		   td
                   {
		    color:blue;
		   }
        </style>
    </head>
    
    <body>
        
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
        
        
        <div id="cntr">
            <center>
                <br>
	           <h1 >FORGET PASSWORD ???</h1>
                   <hr>
                   <!--<strong>Enter your pre-registered details</strong><br>-->
                   <form name="fpform" action="connforgetpass.php" onsubmit="return validateForm()" method="post">
            
                            <table>
                                <tr>
                                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" placeholder="Enter your registered email" name="email" autocomplete="off"  autofocus></td>
                                </tr>
                                 <tr>
                                      <td>Date of Joining<span style="color:red;"> *</span></td><td><input type="date" name="doj" autocomplete="off"></td>
                                 </tr>
                            </table>
                        
                            <br>
                            <button style="text-decoration: none;color:white;">Submit</button>
                            <input type="reset" value="Clear" style="text-decoration: none;color:white; background-color:green;" />
                            
                         </form>
            </center>
            <hr>
            
            <p><span style="color: red; padding-left: 70px;">*</span> denotes Mandatory fields</p>
        </div>
         <script>
                function validateForm() 
                {
                   var doj = document.forms["fpform"]["doj"].value;
                    if (doj === null || doj === "") 
                    {
                        alert("Date of joining must be filled out");
                        document.forms["fpform"]["doj"].focus();
                        return false;
                    }
                    
                    var e = document.forms["fpform"]["email"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Email must be filled out");
                        document.forms["fpform"]["email"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                }
         </script>
                
        <?php
        // put your code here
        ?>
         
          <footer class="w3-container w3-center w3-cyan w3-margin-top w3-bottom">
            <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
          </footer>
         
    </body>
</html>
