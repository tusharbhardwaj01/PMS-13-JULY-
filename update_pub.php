<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
     include 'validate.php';
      if(!validate()){
        header("Location: login.php");
      }
?>

<?php
    $conn=new mysqli("localhost", "root", "","reg");
    if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["users"]);
for($i=0;$i<$usersCount;$i++) {
$dq = $conn->query("UPDATE tbl_publication set pub_title='" . $_POST["pub_title"][$i] . "', pub_author='" . $_POST["pub_author"][$i] . "' pub_isbn='" . $_POST["pub_isbn"][$i] . "', pub_year='" . $_POST["pub_year"][$i] . "' , pub_price_inr='" . $_POST["pub_price_inr"][$i] . "' , pub_price_usd='" . $_POST["pub_price_usd"][$i] . "' , pub_nop='" . $_POST["pub_nop"][$i] . "' , pub_type='" . $_POST["pub_type"][$i] . "' , pub_qty='" . $_POST["pub_qty"][$i] . "' WHERE pub_id='" . $_POST["pub_id"][$i] . "'"); 
}
header("Location:select_pub.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link rel="icon" type="image/png" href="images/mainlogo.jpg">
        <link href="css/design.css" rel="stylesheet" >
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/admin.css">
        <link  rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
<script language="javascript" src="js/users.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
          <script src="js/script.js" type="text/javascript"></script>
        <title>Update Publication Page</title>
     
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
        
<div id="page">
<div id="left">
<div id="cssmenu">
<ul>
   
  <li class='active has-sub'><a href='#'>Employee</a>
      <ul>
               
          <li><a href='select_emp.php'><span>Update/Delete</span></a></li>
          
               <li class='last'><a href='empview.php'><span>View</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Publication</span></a>
            <ul>
                <li><a href='add_pub.php'><span>Add New</span></a></li>
                <li><a href='select_pub.php'><span>Update/Delete</span></a></li>
                <li><a href='view_pub.php'><span>View</span></a></li>
                <li><a href='sell_pub_1.php'><span>Sell Publication</span></a></li>
                <li class='last'><a href='#'><span>Sales Detail</span></a></li>
              
         
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Dispatch</span></a>
            <ul>
                <li><a href='dispatch.php'><span>Dispatch Schedule</span></a></li>
                <li><a href='dispatchdetails.php'><span>Dispatch Status</span></a></li>
                
            </ul>
         </li>
         <li><a href='aboutus.php'><span>About Us</span></a></li>
         <li><a href='contactus.php'><span>Contact Us</span></a></li>
</ul>    
</div>
</div>
	<div id="slider">
    <div class="styled-select">
       <center>
           
           
           <form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
    <td class="w3-center w3-text-white w3-large">Edit Publication</td>
</tr>
<?php
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = $conn->query("SELECT * FROM tbl_publication WHERE pub_id='" . $_POST["users"][$i] . "'");
$row[$i]= $result->fetch_assoc();
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="2" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>Title</label></td>
<td><input type="hidden" name="pub_id[]" class="txtField" value="<?php echo $row[$i]['pub_id']; ?>">
    <input type="text" name="pub_title[]" class="txtField" value="<?php echo $row[$i]['pub_title']; ?>"></td>
</tr>
<tr>
<td><label>Author</label></td>
<td><input type="text" name="pub_author[]" class="txtField" value="<?php echo $row[$i]['pub_author']; ?>"></td>
</tr>
<tr>
<td><label>ISBN No.</label></td>
<td><input type="text" name="pub_isbn[]" class="txtField" value="<?php echo $row[$i]['pub_isbn']; ?>"></td>
</tr>
<tr>
<td><label>Year</label></td>
<td><input type="text" name="pub_year[]" class="txtField" value="<?php echo $row[$i]['pub_year']; ?>"></td>
</tr>
<tr>
<td><label>Price(INR)</label></td>
<td><input type="text" name="pub_price_inr[]" class="txtField" value="<?php echo $row[$i]['pub_price_inr']; ?>"></td>
</tr>
<tr>
<td><label>Price(USD)</label></td>
<td><input type="text" name="pub_price_usd[]" class="txtField" value="<?php echo $row[$i]['pub_price_usd']; ?>"></td>
</tr>
<tr>
<td><label>NO. of pages</label></td>
<td><input type="text" name="pub_nop[]" class="txtField" value="<?php echo $row[$i]['pub_nop']; ?>"></td>
</tr>
<tr>
<td><label>Type of Publication</label></td>
<td><input type="text" name="pub_type[]" class="txtField" value="<?php echo $row[$i]['pub_type']; ?>"></td>
</tr>
<tr>
<td><label>Quantity</label></td>
<td><input type="text" name="pub_qty[]" class="txtField" value="<?php echo $row[$i]['pub_qty']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>

</table>
</div>
              

<input type="submit" name="submit" value="Submit" class="w3-bar-item w3-button w3-ripple w3-green w3-padding w3-margin-top" style="width:50%" />
</form>
</div>
           
           
       </center>
</div>
    </div>  
    </div>
    <br>
    <br>
    <br>
    <br>
   

	 <footer class="w3-container w3-center w3-cyan w3-margin-top w3-padding-16">
            <p>© NSD,DESIDOC</p><br><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
       </footer>
        
       
    </body>
</html>

