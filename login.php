<?php
     include 'validate.php';
      if(validate()){
        header("Location: adminhomepage.php");
      }
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="icon" type="image/png" href="images/mainlogo.jpg">
        <link  rel="stylesheet" href="css/w3.css">
        <title>login</title>
        <style>
            form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
        </style>

        <link rel="icon" type="image/png" href="images/desidoc_logo.jpg">
        <link rel="stylesheet" type="text/css" href="css/css_login.css"/>
        
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
            <div id="title_login">
                <table width="100%" height="100%">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <strong><span style=" font-size: 20px">Marketing Integrated Management System</span></strong>
                                    </td>
                                </tr>
                                <tr><td></td></tr>
                                <tr>
                                    <br/>
                                    <td><strong><span style="padding-left:200px; margin-top: 50px;"><u>Login Portal</u></span></strong></td>
                                </tr>
                            </table> 
                        </td>
                        <td align="right">
                            <a href="index.php">
                                <img src="images/mainlogo.jpg" alt="Desicoc Logo" height="96px" width="96px" style="opacity:0.75"/>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="cntr_bdy">
                <div id="content">
                 <!--<h2>Login Form</h2>-->

                 <form name="login" action="connlogin.php" onsubmit="return validateForm()" method="POST">
 
                            <br>
                            <div class="container">
                                <label style="color: blue"><b>Username</b><span style="color: red; margin-left: 5px;">*</span></label>
                              <input type="text" placeholder="Enter Username" name="login_id" placeholder="Enter Login ID" autocomplete="off"  autofocus><br><br>

                              <label style="color: blue"><b>Password</b><span style="color: red; margin-left: 5px;">*</span></label>
                              <input type="password" placeholder="Enter Password" name="password" placeholder="Enter Password">

                               
                                           <div class="w3-bar">
                                               <button type="submit" name="submit" value="login" class="w3-bar-item w3-button w3-ripple w3-green w3-padding w3-margin-top" style="width:50%">Login</button>
                                               <button type="reset" name="reset" value="reset" class="w3-bar-item w3-button w3-red w3-ripple w3-padding w3-margin-top" style="width:50%">Reset</button>
                                           </div>
                                   
                                            <div class="container">
                                             <span class="psw"><a href="forgetpass.php">Forgot password?</a></span>
                                            </div>
                                   <br>
                                
                             <!--<input type="checkbox" checked="checked"> Remember me-->
                            </div>

                            
                  </form>   
                </div>
            </div>
        </div>
        
        <script>
                function validateForm() 
                {
                    var e = document.forms["login"]["login_id"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Login Id must be filled out");
                        document.forms["login"]["login_id"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                    var p = document.forms["login"]["password"].value;
                    if (p === null || p === "") 
                    {
                        alert("Password must be filled out");
                        document.forms["login"]["password"].focus();
                        return false;
                    }
                }
         </script>
        
        <!--<script language="javascript">
            function check(form)
            {
                if(form.login_id.value==="desidoc" && form.password.value==="desidoc")
                {
                    window.open('target.html');
                }
                else if(form.login_id.value==="user" && form.password.value==="user")
                {
                    window.open('target1.html');   
                }
                else
                {
                    alert("Wrong Password or Username");
                }
            }
         </script> -->
        <?php
        // put your code here
        ?>
         
         <footer class="w3-container w3-center w3-cyan w3-margin-top">
            <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
        </footer>
         
    </body>
</html>
