<?php
     include 'validate.php';
      if(!validate()){
        header("Location: login.php");
      }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="icon" type="image/png" href="images/mainlogo.jpg">
        <link  rel="stylesheet" href="css/w3.css">
        <title>Add Publication</title>
         <style>
               #cntr
               {
                width: 550px;
                height: 510px;
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
                   #type{
		color:black;
		}
        </style>
    </head>
    <body>
        
        <div class="w3-container w3-cyan">
                <div class="w3-row">
                    <div class="w3-col m2 l2 w3-left w3-padding-small">
                         <a href="dashboard.php"> <img src="images/mainlogo.jpg" alt="DESIDOC"></a>
                    </div>
                    <div class="w3-col m5 l5 w3-padding-16 w3-left-align">
                        <h1><img src="images/headertext.png" alt="DESIDOC"></h1>
                    </div>
                    <div class="w3-col m5 l5 w3-padding-small w3-margin-top w3-right-align w3-bar-item w3-button w3-large w3-hover-cyan w3-text-white w3-wide">
                         <!--<h1><img src="images/user_img.jpg" alt="userimg"></h1>-->
                        <h1 class="w3-hover-cyan w3-text-white">ADMIN PORTAL</h1>
                    </div>
                </div>
     </div>
        
        <div class="w3-bar w3-container w3-black ">
            <a href="adminhomepage.php" class="w3-bar-item w3-button w3-medium w3-hover-black w3-left w3-right-align w3-text-cyan w3-wide" style="width:18%">ADMIN PANEL</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:8%">LOGOUT</a>
            
            
        </div>
        
        <div id="cntr">
            <center>
                <br>
	           <h1 >ADD PUBLICATION</h1>
                   <hr>
                     <form name="add_pub" action="connadd_pub.php" onsubmit="return validateForm()" method="post">
            
                            <table>
                                <tr>
                                    <td>Publication Title<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter the title" name="title" autocomplete="off"  autofocus></td>
                                </tr>
                                <tr>
                                    <td>Author<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter author name" name="author" autocomplete="off" ></td>
                                </tr>
                                <tr>
                                    <td>ISBN No.<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter ISBN No." name="isbn" autocomplete="off"></td>
                                </tr>
                                 <tr>
                                      <td>Publication Year<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter Publication Year" name="year" autocomplete="off"></td>
                                 </tr>
                                 <tr>
                                      <td>Price(in Rs.)<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter price in INR" name="rs" autocomplete="off"></td>
                                 </tr>
                                 <tr>
                                      <td>Price(in $)<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter price in USD" name="dollar" autocomplete="off"></td>
                                 </tr>
                                 <tr>
                                      <td>No. of pages<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter number of pages" name="pages" autocomplete="off"></td>
                                 </tr>
                                <tr>
                                    <td>Publication Type<span style="color:red;"> *</span></td>
                                    <td id="type">
                                        <input type="radio" name="pub_type" value="Complimentary" />Complimentary
                                        <input type="radio" name="pub_type" value="Priced" />Priced
                                    </td>
                                </tr>
                                 <tr>
                                      <td>Quantity<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter quantity" name="qty" autocomplete="off"></td>
                                 </tr>
                            </table>
                        
                            <br>
                            <button style="text-decoration: none;color:white;">Submit</button>
                            <input type="reset" value="Clear" style="text-decoration: none;color:white; background-color:green;" />
                            
                         </form>
            </center>
            
            
            <p><span style="color: red; padding-left: 30px;">*</span> denotes Mandatory fields</p>
        </div>
        
        <script>
             function validateForm() 
                {
                    var t = document.forms["add_pub"]["title"].value;
                    if (t === null || t === "") 
                    {
                        alert("Publication title must be filled out");
                        document.forms["add_pub"]["title"].focus();
                        return false;
                    }
                    
                    var a = document.forms["add_pub"]["author"].value;
                    if (a === null || a === "") 
                    {
                        alert("Author must be filled out");
                        document.forms["add_pub"]["author"].focus();
                        return false;
                    }
                    
                    
                    var i = document.forms["add_pub"]["isbn"].value;
                    if (i === null || i === "") 
                    {
                        alert("ISBN no. must be entered");
                        document.forms["add_pub"]["isbn"].focus();
                        return false;
                    }
                    
                    
                    var y = document.forms["add_pub"]["year"].value;
                    if (y === null || y === "") 
                    {
                        alert("Publication year must be entered");
                        document.forms["add_pub"]["year"].focus();
                        return false;
                    }
                    
                    var rs = document.forms["add_pub"]["rs"].value;
                    if (rs === null || rs === "") 
                    {
                        alert("Amount in INR must be entered");
                        document.forms["add_pub"]["rs"].focus();
                        return false;
                    }
                    
                    var d = document.forms["add_pub"]["dollar"].value;
                    if (d === null || d === "") 
                    {
                        alert("Amount in USD must be entered");
                        document.forms["add_pub"]["dollar"].focus();
                        return false;
                    }
                    
                    var p = document.forms["add_pub"]["pages"].value;
                    if (p === null || p === "") 
                    {
                        alert("No. of pages must be entered.");
                        document.forms["add_pub"]["pages"].focus();
                        return false;
                    }
                    
                }
        </script>
        <?php
        // put your code here
        ?>
        
        <footer class="w3-container w3-center w3-cyan w3-margin-top">
            <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
        </footer>
        
    </body>
</html>
