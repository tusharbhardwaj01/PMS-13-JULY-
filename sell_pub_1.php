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
         <link rel="icon" type="image/png" href="images/desidoc_logo.jpg">
        <link  rel="stylesheet" href="css/w3.css">
        
        <title>Customer Details</title>
		<style>
                    #cntr
            {
                width: 600px;
                height: 660px;
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
	<h1 >CUSTOMER DETAILS</h1>
        <hr>
        <form name="cust_details" action="conn_cust_details.php" onsubmit="return validateForm()" method="POST">
            
			<table>
                                <tr>
                                    <td>Customer Rank<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter Customer Rank" name="rank"></td>
                                </tr>
                                
                                <tr>
                                    <td>First Name<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter First Name" name="fname"></td>
                                </tr>
                                
                                <tr>
                                    <td>Last Name<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter Last Name" name="lname"></td>
                                </tr>
                                
                                <tr>
                                    <td>Address line 1<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter Address 1" name="add1"></td>
                                </tr>
                                
                                <tr>
                                    <td>Address Line 2</td><td><input type="text" placeholder="Enter Address 2" name="add2"></td>
                                </tr>
                                
                                <tr>
                                    <td>Address Line 3</td><td><input type="text" placeholder="Enter Address 3" name="add3"></td>
                                </tr>
 
                                <tr>
                                    <td>City<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter City" name="city"></td>
                                </tr>
                                
                                <tr>
                                    <td>State<span style="color:red;"> *</span></td><td><input type="text" placeholder="Enter State" name="state"></td>
                                </tr>
                                
                                 <tr>
                                    <td>PIN Code<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter PIN Code" name="pin"></td>
                                </tr>
                                
                                 <tr>
                                    <td>Contact No.<span style="color:red;"> *</span></td><td><input type="number" placeholder="Enter Contact No." name="contact"></td>
                                </tr>
                                
                                 <tr>
                                    <td>E-Mail<span style="color:red;"> *</span></td><td><input type="email" placeholder="Enter Email ID" name="email"></td>
                                </tr>
                                
                                
                                <div class="container">
                                    <tr>
                                    <label for="cust_type" style="color:blue; margin-left:100px">Customer Type<span style="color:red;"> *</span></label>&nbsp;
                                        <select name="cust_type" style="margin-right:0px;margin-left:0px;padding-right:0px" onchange='checkvalue(this.value)'> 
                                            <option name="cust_type" value="">Please select a type</option>  
                                            <option name="cust_type" value="IND/INS">IND/INS(discount 15%)</option>
                                            <option name="cust_type" value="PUB/DRDO Employee">PUB/DRDO Employee(discount 40%)</option>
                                            <option name="cust_type" value="Others">Others...</option>
                                        </select> 
                                    
                                    

                                    <tr><input type="text" placeholder="Enter other type" name="cust_other" id="cust_other" style='display:none'></tr>
                                </tr>
                                </div>
                                
                                            
                
                        </table>
			<br>
                        <button type="submit" style="text-decoration: none;color:white;">Next</button>
                        <button type="reset" style="text-decoration: none;color:white;margin-bottom:10px">Reset</Button> <br>
                        
                        <p><span style="color: red; padding-left: 10px;">*</span> denotes Mandatory fields</p>
			
			
            
            
        </form>
        </center>
        </div>
        <script>
                function checkvalue(val)
                {
                    if(val==="Others")
                       document.getElementById('cust_other').style.display='block';
                    else
                       document.getElementById('cust_other').style.display='none'; 
                }
                
                
                function validateForm() 
                {
                    var ct = document.forms["cust_details"]["cust_type"].value;
                    if (ct === null || ct === "" || m=== "Please select a type") 
                    {
                        alert("Customer type must be selected");
                        document.forms["cust_details"]["cust_type"].focus();
                        return false;   
                    }
                    
                    var r = document.forms["cust_details"]["rank"].value;
                    if (r === null || r === "") 
                    {
                        alert("Rank must be filled out");
                        document.forms["cust_details"]["rank"].focus();
                        return false;   
                    }
                    
                    
                    var fn = document.forms["cust_details"]["fname"].value;
                    if (fn === null || fn === "") 
                    {
                        alert("First Name must be filled out");
                        document.forms["cust_details"]["fname"].focus();
                        return false;   
                    }
                    
                    
                    var ln = document.forms["cust_details"]["lname"].value;
                    if (ln === null || ln === "") 
                    {
                        alert("Last Name must be filled out");
                        document.forms["cust_details"]["lname"].focus();
                        return false;
                    }
                    
                  
                    var add = document.forms["cust_details"]["add1"].value;
                    if (add === null || add === "") 
                    {
                        alert("Address line 1 must be filled out");
                        document.forms["cust_details"]["add1"].focus();
                        return false;
                    }
                    
                    var c = document.forms["cust_details"]["city"].value;
                    if (c === null || c === "") 
                    {
                        alert("City must be filled out");
                        document.forms["cust_details"]["city"].focus();
                        return false;
                    }
                    
                    var st = document.forms["cust_details"]["state"].value;
                    if (st === null || st === "") 
                    {
                        alert("State must be filled out");
                        document.forms["cust_details"]["state"].focus();
                        return false;
                    }
                    
                    var p = document.forms["cust_details"]["pin"].value;
                    if (/^\d{6}$/.test(p)) 
                    return true;
                    else
                    {
                        alert("Pincode must be filled out");
                        document.forms["cust_details"]["pin"].focus();
                        return false;
                    }
                    
                    var ct = document.forms["cust_details"]["contact"].value;
                    if (ct === null || ct === "") 
                    {
                        alert("State must be filled out");
                        document.forms["cust_details"]["contact"].focus();
                        return false;
                    }
                    
                    var m = document.forms["cust_details"]["mail"].value;
                    if (m === null || m === "") 
                    {
                        alert("State must be filled out");
                        document.forms["cust_details"]["mail"].focus();
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
