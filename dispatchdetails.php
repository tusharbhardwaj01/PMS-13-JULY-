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
        <title>DISPATCH STATUS</title>
        
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
                        <h1>ADMIN PORTAL</h1>
                    </div>
                </div>
     </div>
        
        <div class="w3-bar w3-container w3-black ">
            <a href="adminhomepage.php" class="w3-bar-item w3-button w3-medium w3-hover-black w3-left w3-right-align w3-text-cyan w3-wide" style="width:18%">ADMIN PANEL</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:8%">LOGOUT</a>
        </div>
        
        <?php
         $conn=new mysqli("localhost","root","","reg");
        if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }
            
        echo "<center>
            <div class='w3-panel w3-grey' style='width:78%'>
            <h1>DISPATCH DETAILS</h1>
            </div>
            <div class='w3-container w3-margin-right w3-margin-top w3-margin-bottom ' style='width:80%'>
                <table class='w3-table-all w3-centered w3-card-4'>
                <tr>
                <th>Id</th>
                <th>Item_name</th>
                <th>Item_quantity</th>
                <th>Dispatch_to</th>
                <th>Dispatch_date</th>
                <th>Dispatch_address</th>
                <th>Dispatch_medium</th>
                <th>Serial_no</th>
                </tr></center>";
        
        $sql="SELECT * from tbl_dispatchdetails";
        $ds=$conn->query($sql);
        $d=mysqli_num_rows($ds);
        for($i=0;$i<=$d;$i++)
        {
            $result=$ds->fetch_assoc();
        
        
        {
        echo "<tr><td>".$result["regid2"].
                "</td><td>".$result["Item_name"].
                "</td><td>".$result["Item_quantity"].
                "</td><td>".$result["Dispatch_to"].
                "</td><td>".$result["Dispatch_date"].
                "</td><td>".$result["Dispatch_address"].
                "</td><td>".$result["Dispatch_medium"].
                "</td><td>".$result["Serial_no"].
                "</td></tr>";
        }
        }
        echo "</table></div>";
        mysqli_close($conn);
        ?>
        
        <footer class="w3-container w3-center w3-cyan w3-margin-top">
            <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
        </footer>
        
    </body>
</html>
