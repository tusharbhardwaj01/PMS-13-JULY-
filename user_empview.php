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
        <link rel="stylesheet" href="css/w3.css">
        <title>VIEW</title>
        
    </head>
    <body style=" background-image: url('images/bkg-blu.jpg');">
        
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
                        <h1>USER PORTAL</h1>
                    </div>
                </div>
     </div>
        
        <div class="w3-bar w3-container w3-black ">
            <a href="userhomepage.php" class="w3-bar-item w3-button w3-medium w3-hover-black w3-left w3-right-align w3-text-cyan w3-wide" style="width:18%">USER PANEL</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:8%">LOGOUT</a>
            <a href="resetpass.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:16%">CHANGE PASSWORD</a>
        </div>
        
        <?php
         $conn=new mysqli("localhost","root","","reg");
        if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }
            
        echo "<center>
            <div class='w3-panel w3-light-grey' style='width:82%'>
            <h1>DETAILS OF EMPLOYEES</h1>
            </div>
            <div class='w3-container w3-margin-right w3-margin-top w3-margin-bottom ' style='width:85%'>
                <table class='w3-table-all w3-align-left w3-card-4 '>
                <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Designation</th>
                <th>Gender</th>
                <th>D.O.B.</th>
                <th>Mobile</th>
                <th>D.O.J.</th>
                 </tr></center>";
        
        $sql="SELECT * from tbl_emp_det,tbl_user where emp_id=fk_emp_id";
        $ds=$conn->query($sql);
        $d=mysqli_num_rows($ds);
        for($i=0;$i<=$d;$i++)
        {
            $result=$ds->fetch_assoc();
        
        
        {
        echo "<tr><td>".$result["emp_id"].
                "</td><td>".$result["emp_fname"].
                "</td><td>".$result["emp_lname"].
                "</td><td>".$result["emp_desg"].
                "</td><td>".$result["emp_gender"].
                "</td><td>".$result["emp_dob"].
                "</td><td>".$result["emp_mobile"].
                "</td><td>".$result["emp_doj"].
                 "</td></tr>";
        }
        }
        echo "</table></div>";
        mysqli_close($conn);
        ?>
        
        <footer class="w3-container w3-center w3-cyan w3-margin-top ">
            <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
        </footer>
        
    </body>
</html>
