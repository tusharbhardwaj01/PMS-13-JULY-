<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <?php
        $em=$_POST{"email"};
        $opass1=$_POST{"opass"};
        $pass1=$_POST{"pass"};
        
        $conn=new mysqli("localhost","root","","reg");
        $qry="UPDATE tbl_user SET user_pass='$pass1' where user_pass='$opass1' && user_name='$em'";
        $ds=$conn->query($qry);
        
        //header("Location: userhomepage.php");
        echo '<script>alert("NEW PASSWORD HAS BEEN SET"); window.location.href="userhomepage.php" </script>';
        
        ?>
    </body>
</html>
