<!Doctype html>
<html>
<head>

<style >
    body{

        text-align: center;
        color: black;
         background-image: url("qq.jpg");
    background-size : cover;
    }



</style>


</head>
<body>


<?php

$conn = new mysqli("localhost", "root", "ddash1234", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$name=mysqli_real_escape_string($conn, $_POST['name']);
$address=mysqli_real_escape_string($conn, $_POST['address']);
$telephone=mysqli_real_escape_string($conn, $_POST['telephone']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

$sql = " INSERT INTO login(name,address,telephone,email,username,password) VALUES ('$name','$address','$telephone','$email','$username','$password')";


if (mysqli_query($conn, $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<br><br>
<br>

<a href="asd.php"><img src="home.png" width="40px" height="40px"></a>



</body>
<html>
