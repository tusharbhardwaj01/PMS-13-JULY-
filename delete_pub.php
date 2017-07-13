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
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = $conn->query("DELETE FROM tbl_publication WHERE pub_id='" . $_POST["users"][$i] . "'");
}
header("Location:select_pub.php");
?>
    </body>
</html>
