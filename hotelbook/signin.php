<!DOCTYPE html>

<html>
   <head>

      <style>
      
      body {
      	background-image: url("sign1.jpg");
      	      background-size :cover;  }

   .unit1 {
         height: 80px;
     text-align: center;
    background-color: lightblue;     

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

 
        width: 700px;
        float: left;
     
        text-align: center;
           margin: 2px;
            padding: 2px;
         }
         


      </style>
      
   </head>

   <body >
       
       <div class="unit1"> 

      
      <img src="logo.png" height="80px" width="700px" style="float: center">

      <a href="http://google.com/" >  <img src="search.png" height="80px" width="80px" style="float: right;"></a>
      <a href="login.php" >  <img src="login.png" height="80px" width="80px" style="float: right;"></a>

</div>  

<br>
<div class="unit3">
<form action="signin2.php" method="post">
  
<h1>Basic Information</h1>
<h5>
Full Name <br>
<input type="text" name="name" required="true">
 <br> <br>
Email<br>
<input type="email" name="email" required="true">
<br><br>
adderess<br>
<input type="text" name="address" required="true">
<br><br>
Telephone No<br>
<input type="text" name="telephone">
<br><br>

<h1>Sign-In</h1>
<fieldset>
  <h5>
  
username<br>

<input type="text" name="username" required="true">
<br><br>
password<br>
<input type="password" name="password">
<br><br>
Re enter passsword <br>
<input type="password" name="password2">

</h5>
</fieldset>

<input type="submit" value="Sign-in" style="background-color: yellow;font-size: 12pt"> 
<br><br>
<a href="asd.php"><img src="home.png" width="80px" height="80px"></a>
</h3>
</form>

</div>


   </body>
</html>
