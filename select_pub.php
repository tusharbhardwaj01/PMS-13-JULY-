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
<script language="javascript" src="js/users1.js" type="text/javascript"></script>
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
<table border="0" cellpadding="10" cellspacing="2" width="500" class="tblListForm">
<tr class="listheader">
<td></td>

<td>Title</td>
<td>Author</td>
<td>Year</td> 

</tr>
<?php
$conn=new mysqli("localhost", "root", "","reg");
$query="SELECT * FROM tbl_publication";
$result=$conn->query($query); 
$i=0;
while($row = $result->fetch_assoc()) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["pub_id"]; ?>" ><?php $row["pub_id"]; ?></td>
<td><?php echo $row["pub_title"]; ?></td>
<td><?php echo $row["pub_author"]; ?></td>
<td><?php echo $row["pub_year"]; ?></td>

</tr>
<?php
$i++;
}
?>

</table>
    
   <br>
   
     <div class="w3-bar">
       <input  type="button" name="update" value="Update" onClick="setUpdateAction();" class="w3-bar-item w3-button w3-ripple w3-green w3-padding w3-margin-top" style="width:50%" />
<input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" class="w3-bar-item w3-button w3-red w3-ripple w3-padding w3-margin-top" style="width:50%" />
     </div>
   


</form>
</div>
           
           
       </center>
</div>
    </div>  
    </div>

	 <footer class="w3-container w3-center w3-bottom w3-cyan w3-margin-top w3-padding-16">
            <p>© NSD,DESIDOC</p><br><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
       </footer>
        
       
    </body>
</html>

