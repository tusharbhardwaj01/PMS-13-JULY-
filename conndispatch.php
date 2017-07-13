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
            
            
            $item=$_POST['dis_item'];
            $qty=$_POST['dis_quantity'];
            $to=$_POST['dis_to'];
            $date=$_POST['dis_date'];
            $adrs=$_POST['dis_address'];
            $medium=$_POST['Dispatch_medium'];
            $serialno=$_POST['dis_medium'];
            
            $qry = "INSERT INTO tbl_dispatchdetails (Item_name, Item_quantity, Dispatch_to, Dispatch_date, Dispatch_address, Dispatch_medium , Serial_no) values('$item','$qty','$to','$date','$adrs','$medium','$serialno')";
            $ds=$conn->query($qry);
            if ($ds === TRUE) 
               {
                 echo '<script>alert("ITEM ADDED SUCCESSSFULLY"); window.location.href="dispatch.php" </script>';
               }
            
        ?>
    </body>
</html>
