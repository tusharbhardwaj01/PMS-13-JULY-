<?php
        
function validate()
{
  if(isset($_COOKIE["PHPSESSID"])&&isset($_COOKIE["login"]))
  {
    $userid=$_COOKIE["login"];
    $sessid=$_COOKIE["PHPSESSID"];
    
    $conn=new mysqli("localhost", "root", "","reg");
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        
    
    $qry="select * from activesessions where sessionid='$sessid' and userid='$userid'";
    $rs=$conn->query($qry);
    if(mysqli_num_rows($rs)==1)
    {
      return 1;
    }
    else
    {
      setcookie("PHPSESSID","",time()-3600,"/");
      setcookie("login","",time()-3600,"/");
      return 0;
    }
  }
    else
    {
      return 0;
    }
}

        ?>
