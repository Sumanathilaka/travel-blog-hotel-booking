<!DOCTYPE html>

<html>
   <head>

      <style>
      
      body {
      	background-image: url("qq.jpg");
      	      background-size :cover;  }

   .unit1 {
         height: 50px;
     text-align: center;
background-color: white;
       }

   h1{
      	color: brown
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
      <a href="sign.php" >  <img src="sign.png" height="50px" width="50px" style="float: right;"></a>

</div>  
<?php

$conn = mysqli_connect('localhost', 'root', 'ddash1234', 'hotel');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username,password FROM login";
$result= mysqli_query($conn, $sql);

$username=mysqli_real_escape_string($conn, $_POST['username']);
$pass=mysqli_real_escape_string($conn, $_POST['password']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[username]==$username){
                        if($row[password]==$pass){
                        $x=1;
                          
                   Header("location:dataentry.php");
                                        
}}}

if($x==0)
 
     Header("location:asd.php");
      
}
mysqli_close($conn);
?> 









   </body>
</html>
