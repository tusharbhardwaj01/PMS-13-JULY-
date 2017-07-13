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
        <title>DISPATCH SCHEDULE</title>
		<style>
                    #cntr
            {
                width: 650px;
                height: 550px;
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
		button{
                width:120px;
                height:45px;
                padding:7px;    
		color:white;
		background-color:green;
		}
		
		h1{
		color:brown;
		font-family:arial;
		}
                
		td{
		color:blue;
		}
                
                .container{
                    padding: 5px;
                   
                }
		
		</style>
		                     
    </head>
    <body >
        
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
	<h1 >DISPATCH DETAILS</h1>
        <hr>
        <form name="dispatch" action="conndispatch.php" onsubmit="return validateForm()" method="POST">
            
			<table>
                                <tr>
                                    <td>Item Name<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter Item Name" name="dis_item"></td>
                                </tr>
                                
                                <tr>
                                    <td>Item Quantity<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter quantity of Items" name="dis_quantity"></td>
                                </tr>
                                
                                <tr>
                                    <td>Dispatch to<span style="color:red;"> *</span></td><td><input type="text" placeholder="Dispatch to" name="dis_to"></td>
                                </tr>
                                
                                <tr>
                                    <td>Date of Dispatch<span style="color:red;"> *</span></td><td><input type="date" name="dis_date"></td>
                                </tr>
                                
                                <tr>
                                    <td>Destination Address<span style="color:red;"> *</span></td><td><textarea rows="4" cols="45" placeholder="Enter destination address" name="dis_address" autocomplete="off"></textarea></td>
                                </tr>
                                
                                <div class="container">
                                    <tr>
                                    <label for="Dispatch_medium" style="color:blue;">Dispatch_medium<span style="color:red;"> *</span></label>&nbsp;&nbsp;
                                        <select name="Dispatch_medium" style="margin-right:218px;padding-right:5px" onchange='checkvalue(this.value)'> 
                                            <option name="Dispatch_medium" value="">Please select a medium</option>  
                                            <option name="Dispatch_medium" value="speedpost">Speed Post</option>
                                            <option name="Dispatch_medium" value="regdparcel">Regd Parcel</option>
                                            <option name="Dispatch_medium" value="urp">URP</option>
                                            <option name="Dispatch_medium" value="airmail">Airmail</option>
                                            <option name="Dispatch_medium" value="others">others</option>
                                        </select> 

                                    <tr><input type="text" placeholder="Enter serial no/other" name="dis_medium" id="dis_medium" style='display:none'></tr>
                                    </tr>
                                </div>
                                
                                            
                
                        </table>
			<br>
                        <button type="submit" style="text-decoration: none;color:white;">Submit</button>
                        <button type="reset" style="text-decoration: none;color:white;margin-bottom:10px">Reset</Button> <br><hr>
                        <!--<button onclick="window.location.href='dispatch.php'" style="text-decoration: none;color:white; background-color:green;">Add Item</Button>-->
                        <p><span style="color: red; padding-left: 10px;">*</span> denotes Mandatory fields</p>
			
			
            
            
        </form>
        </center>
        </div>
        <script>
                function checkvalue(val)
                {
                    if(val==="others" || val==="regdparcel" || val==="speedpost" || val==="airmail")
                       document.getElementById('dis_medium').style.display='block';
                    else
                       document.getElementById('dis_medium').style.display='none'; 
                }
                
                
                function validateForm() 
                {
                      var dm = document.forms["dispatch"]["Dispatch_medium"].value;
                    if (dm === null || dm === "" || dm=== "Please select medium") 
                    {
                        alert("Dispatch_medium must be selected");
                        document.forms["dispatch"]["Dispatch_medium"].focus();
                        return false;   
                    }
                      
                    
                    var i = document.forms["dispatch"]["dis_item"].value;
                    if (i === null || i === "") 
                    {
                        alert("Item Name must be filled out");
                        document.forms["dispatch"]["dis_item"].focus();
                        return false;   
                    }
                    
                    
                    var q = document.forms["dispatch"]["dis_quantity"].value;
                    if (q === null || q === "") 
                    {
                        alert("Item Quantity must be filled out");
                        document.forms["dispatch"]["dis_quantity"].focus();
                        return false;   
                    }
                    
                    
                    var t = document.forms["dispatch"]["dis_to"].value;
                    if (t === null || t === "") 
                    {
                        alert("Dispatch to must be filled out");
                        document.forms["dispatch"]["dis_to"].focus();
                        return false;
                    }
                    
                  
                    var d = document.forms["dispatch"]["dis_date"].value;
                    if (d === null || d === "") 
                    {
                        alert("Date of dispatch must be filled out");
                        document.forms["dispatch"]["dis_date"].focus();
                        return false;
                    }
                    
                    var a = document.forms["dispatch"]["dis_address"].value;
                    if (a === null || a === "") 
                    {
                        alert("Destination Address must be filled out");
                        document.forms["dispatch"]["dis_address"].focus();
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
