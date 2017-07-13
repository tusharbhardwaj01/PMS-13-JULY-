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


if(isset($_POST["title"]) &&isset($_POST["author"]) &&isset($_POST["isbn"]) &&isset($_POST["year"]) &&isset($_POST["rs"]) &&isset($_POST["dollar"]) &&isset($_POST["pages"])&&isset($_POST["pub_type"]) &&isset($_POST["qty"])){
        $title=$_POST['title'];
        $author=$_POST['author'];
        $isbn=$_POST['isbn'];
        $year=$_POST['year'];
        $rs=$_POST['rs'];
        $dollar=$_POST['dollar'];
        $pages=$_POST['pages'];
        $pub_type=$_POST['pub_type'];
        $qty=$_POST['qty'];
        
        
        $qry_1="SELECT * from tbl_publication where pub_isbn='$isbn'";
        $s=$conn->query($qry_1);
        if(mysqli_num_rows($s)==1)
        {
            
            echo '<script>alert("This book is already registered"); window.location.href="add_pub.php" </script>';
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
        
      
        
       
          $qry = "INSERT INTO tbl_publication (pub_title, pub_author, pub_isbn, pub_year, pub_price_inr, pub_price_usd, pub_nop, pub_type, pub_qty) values('$title','$author','$isbn','$year','$rs','$dollar','$pages','$pub_type','$qty')";
          $ds=$conn->query($qry);               
        
      
               if ($ds === TRUE) 
               {
                
                echo "<html>
    <head
        <meta charset='UTF-8'>
        <title>successful_add</title>
    
    
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
	<h1 >$title have been added successfully</h1><br>
        <p>
             <a href='add_pub.php'>CLICK HERE TO ADD ANOTHER PUBLICATION</a>
             <br>
             <br>
             <a href='adminhomepage.php'>GO TO HOME</a>
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


        ?>
    </body>
</html>
