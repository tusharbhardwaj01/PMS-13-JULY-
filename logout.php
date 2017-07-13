<?php

//if(isset($_POST["zzz"])){
      setcookie("PHPSESSID","",time()-3600,"/");
      setcookie("login","",time()-3600,"/");
      header("Location: dashboard.php");
//}
//else{
//    header("Location: adminhomepage.php");
//}
?>