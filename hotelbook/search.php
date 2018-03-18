<!DOCTYPE html>
<html>
<head>
<style >
 
    body{

     
        color: black;
        background-image: url("white.jpg");
        background-size :cover; 
        text-align : center;
    }

.unit{
   width : 650px;
   }
h1{
  color: brown;
}

</style>
</head>

<body>
<center>

<h1>RESULTs</h1>
<div class="unit">

<?php

$conn = mysqli_connect('localhost', 'root', 'ddash1234', 'hotel');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,address,telephone,email,brand,single,double1,honeymoon,family,website,specifications FROM dataentry";
$result= mysqli_query($conn, $sql);


$search=mysqli_real_escape_string($conn, $_POST['name1']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[address]==$search||$row[name]==$search){
                         $x=1;
                        
                
                         echo  "<h4> Name :  " . $row["name"]."<br> ". " Address:  " . $row["address"]. " <br> ". " Email : " . $row["email"]. "<br> "."Telephone no : " . $row["telephone"]. "<br>". "Stars : " . $row["brand"]. "<br>" . "Website : ".$row["website"]."<br>"."Specifications :" .$row["specifications"] 
                . "<br><br> </h4> "."<b>Single Room Cost :" .$row["single"]."<br>"."Double Room Cost :".$row["double1"]."<br>"."Family Room Cost :".$row["family"]."<br>"."Honeymoon Room Cost :".$row["honeymoon"]."</b><br>"  .               
                  "<hr>" ; 
    }} }
   

if($x==0)
   echo " <h2>No Hotel Found </h2> ";
    
                  
mysqli_close($conn);
?> 
<br><br><br>
<a href="https://www.makemytrip.com/hotels"><img src="book.png" width="120px" height="80px" ><br>
<a href="asd.php"><img src="home.png" width="80px" height="80px" ></a><br><br><br>
</div>
</center>
</body>
</html>
