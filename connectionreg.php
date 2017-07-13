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
        
// Create connection
$conn=new mysqli("localhost", "root", "","reg");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully";*/


if(isset($_POST["fname"]) &&isset($_POST["lname"]) &&isset($_POST["desg"]) &&isset($_POST["gender"]) &&isset($_POST["dob"]) &&isset($_POST["mobile"]) &&isset($_POST["doj"])&&isset($_POST["pass"]) &&isset($_POST["cpass"])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
         $desg=$_POST['desg'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $doj=$_POST['doj'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        
        $qry_1="SELECT * from tbl_user where user_name='$email'";
        $rs=$conn->query($qry_1);
        if(mysqli_num_rows($rs)==1)
        {
            
            echo '<script>alert("This email is already registered"); window.location.href="registration.php" </script>';
            exit(0);
         
        }
        
        
        
       /* $sql = mysql_query("SELECT email FROM tbl_registration Where email=$email");
        $row=mysql_fetch_row($sql);
        if(!isset($row[email]))
        {
            return true;
        }
        else
        {
            echo "<script>alert('This email address is already used....choose another one');</script>";
        }*/
        
        $qry = "INSERT INTO tbl_emp_det (emp_fname, emp_lname,emp_desg, emp_gender, emp_dob, emp_mobile, emp_doj) values('$fname','$lname','$desg','$gender','$dob','$mobile','$doj')";
        $ds=$conn->query($qry);  
        if($ds==1)
            {
                       
        $sql= "insert into tbl_user (user_name,user_pass,fk_emp_id) values('$email','$pass',(select emp_id from tbl_emp_det where emp_fname ='$fname' and emp_doj='$doj')); ";
        $ds1=$conn->query($sql);
        }
               if ($ds === TRUE && $ds1 === true) 
               {
                
                echo "<html>
    <head
        <meta charset='UTF-8'>
        <title>successful_registration</title>
    
    
        <style>
                    #cntr
                    {
                        width: 600px;
                        height: 400px;
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
	<h1 >$fname, You have been registered successfully</h1><br>
        <p>YOUR LOGIN ID: '$email'<br><br>
             YOUR PASSWORD: '$pass'<br><br><br><hr><br>
             <a href='login.php'>CLICK HERE TO LOGIN </a><br><br>
             <a href='dashboard.php'>GO TO DASHBOARD</a>
        </p>
        
        <?php
     
        ?>
    </body>
</html>
";
               } 
               else 
                   {
                    echo "Error: " . $qry . "<br>" . $conn->error;
                   }

             $conn->close();
}
else
{
    header("location: registration.php");
}

        ?>
    </body>
</html>
