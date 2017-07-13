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
        session_start();
        
        if(isset($_POST["login_id"])&&isset($_POST["password"]))
        {
        
        $conn=new mysqli("localhost","root","","reg");
        
        $userid=$_POST["login_id"];
        $passw=$_POST["password"];
        
        $qry="select * from tbl_user where user_name='$userid' && user_pass='$passw'";
        $ds=$conn->query($qry);
        if(mysqli_num_rows($ds)>0)
        {
            $d=$ds->fetch_assoc();
            
            if($d["user_name"]==$userid&&$d["user_pass"]==$passw)
              {
                $sessid=session_id();
                
                $qry="delete from activesessions where userid='$userid' or sessionid='$sessid'";
                $conn->query($qry);
                
                $qry1="insert into activesessions (`sessionid`,`userid`) values('$sessid','$userid')";
                $conn->query($qry1);
                
                setcookie("login",$userid,time()+86400*30,"/");
                setcookie("PHPSESSID",session_id(),time()+86400*30,"/");
                 if($userid=="admin@admin.com")
                    {
                        $_SESSION["usertype"]="admin";
                        header("Location: adminhomepage.php");
                    }
                    else
                    {
                        $_SESSION["usertype"]="normal";
                        header("Location: userhomepage.php");
                    }
              }
              
              else {
                    session_destroy();
                    echo "failed";
                   }
                   
           
        }
            else
                {
                echo '<script>alert("ERROR : ENTERED DETAILS ARE WRONG"); window.location.href="login.php" </script>';
                }
        }
            else {
                    header("Location: login.php");
                 }
        ?>
    </body>
</html>
