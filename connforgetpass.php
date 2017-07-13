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
        $email=$_POST{"email"};
        $doj=$_POST{"doj"};
        
        $conn=new mysqli("localhost","root","","reg");
        $qry="select user_name,emp_doj from tbl_emp_det,tbl_user where emp_id=user_id and user_name='$email' && emp_doj='$doj'";
        $ds=$conn->query($qry);
        
       
        
        if(mysqli_num_rows($ds)>0)
        {
             $qry1="SELECT user_pass,user_name FROM tbl_user where user_name='$email'";
             $d=$conn->query($qry1);
             $d1=$d->fetch_assoc();
          
            echo "<html>
    <head>
        <meta charset='UTF-8'>
        <title></title>
    
    
        <style>
                    #cntr
                    {
                        width: 600px;
                        height: 380px;
                        /*border: solid black 1px;*/
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 50px;
                        box-shadow: 0px 0px 50px;
                    }
                     body
                    {
                      background-image: url('images/bkg-blu.jpg');
                    }
                    h1
                    {
                    color:brown;
                    font-family:arial;
                    }
                     p
                    {
                    color:black;
                    font-family:arial;
                    align:justify;
                    }
                    a
                    {
                    font-size:20px
                    }
        </style>
        </head>
        <body>
        <div id='cntr'>
            <center>
                <br>
	<h1 >YOUR ENTERED INFORMATION MATCHED</h1><br>
        <p>YOUR LOGIN ID: '$email'<br><br>
             YOUR PASSWORD: '".$d1["user_pass"]."'<br><br><br><hr><br>
                 LOGIN FIRST ,TO RESET PASSWORD<br><br>
             <a href='login.php'>CLICK HERE TO LOGIN</a>
        </p>
        
        <?php
     
        ?>
    </body>
</html>";
        }
        else
            {
            echo "<script>alert('ENTERED DETAILS DO NOT MATCH THE REGISTERED INFORMATION');</script>";
            }
        ?>
    </body>
</html>
