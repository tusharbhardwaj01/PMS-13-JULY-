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
      $conn=new mysqli("localhost", "root", "","reg");

        if ($conn->connect_error) 
            {
            die("Connection failed: " . $conn->connect_error);
            } 
            
   if(isset($_POST["rank"]) &&isset($_POST["fname"]) &&isset($_POST["lname"]) &&isset($_POST["add1"]) &&isset($_POST["city"]) &&isset($_POST["state"])&&isset($_POST["pin"]) &&isset($_POST["contact"]) &&isset($_POST["email"])){         
            $rank=$_POST['rank'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $add1=$_POST['add1'];
            $add2=$_POST['add2'];
            $add3=$_POST['add3'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $pin=$_POST['pin'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $cust_type=$_POST['cust_type'];
            $cust_other=$_POST['cust_other'];
            
            $qry = "INSERT INTO tbl_customer (cust_rank, cust_fname, cust_lname, cust_add1, cust_add2, cust_add3 , cust_city , cust_state , cust_pin , cust_contact , cust_email , cust_type , cust_other) values('$rank','$fname','$lname','$add1','$add2','$add3','$city','$state','$pin','$contact','$email','$cust_type','$cust_other')";
            $ds=$conn->query($qry);
            if ($ds === TRUE) 
               {
                 echo '<script>alert("CUSTOMER ADDED SUCCESSSFULLY"); window.location.href="sell_pub_2.php" </script>';
               }
   }
   else
{
    header("location: sell_pub_1.php");
}
        ?>
    </body>
</html>
