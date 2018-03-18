<!DOCTYPE html>

<html>
   <head>

      <style>
      
      body {
      	background-image: url("wert.jpg");
      	      background-size :cover;  }

   .unit1 {
         height: 50px;
     text-align: center;
background-color: white;
       }

   h1{
      	color: brown;
      }
  
   .unit4{	

   	    height:200px;
      	width: 420px;
        float: left;
        text-align: center;
           margin: 2px;
            padding: 2px;
         }
         
        
 .unit3{  

 
        width: 420px;
        float: right;
     
        text-align: center;
           margin: 2px;
            padding: 2px;
         }
         


      </style>
      
   </head>

   <body >
       
       <div class="unit1"> 

       <img src="make.png" height="50px" width="200px" style="float: left">
      <img src="logo.png" height="50px" width="600px" style="float: center">

      <a href="http://google.com/" >  <img src="search.png" height="50px" width="50px" style="float: right;"></a>
      <a href="signin.php" >  <img src="sign.png" height="50px" width="50px" style="float: right;"></a>
       <a href="login.php" >  <img src="login.png" height="50px" width="50px" style="float: right;"></a>
       
</div>
<br><br><br>
<center>
<?php

$conn = new mysqli("localhost", "root", "ddash1234", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$name=mysqli_real_escape_string($conn, $_POST['name']);
$address=mysqli_real_escape_string($conn, $_POST['address']);
$telephone=mysqli_real_escape_string($conn, $_POST['telephone']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$brand=mysqli_real_escape_string($conn, $_POST['stars']);
$single=mysqli_real_escape_string($conn, $_POST['single']);
$double=mysqli_real_escape_string($conn, $_POST['double']);
$honeymoon=mysqli_real_escape_string($conn, $_POST['honeymoon']);
$family=mysqli_real_escape_string($conn, $_POST['family']);
$website=mysqli_real_escape_string($conn, $_POST['site']);
$specifications=mysqli_real_escape_string($conn, $_POST['specifications']);


$sql = " INSERT INTO dataentry(name,address,telephone,email,brand,single,double1,honeymoon,family,website,specifications) VALUES 
('$name','$address','$telephone','$email','$brand','$single','$double','$honeymoon','$family','$website','$specifications')";


if (mysqli_query($conn, $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "<h2>Duplicate file exit </h2>";
}

mysqli_close($conn);

?>



<br><br>
<a href="asd.php"><img src="home.png" width="40px" height="40px"></a>


</center>




   </body>
</html>
