<!DOCTYPE html>

<html>
   <head>

      <style>
      
      body {
      	background-image: url("wert.jpg");
      	      background-size :cover;  }

   .unit1 {
         height: 80px;
     text-align: center;
background-color: white;
       }

   h1{
      	color: brown;
      }
  
   .unit4{	

   	 height:200px;
      	width: 420px;
        float: right;
        text-align: center;
         margin: 2px;
          padding: 2px;
         }
         
        
 .unit3{  

 
        width: 1600px;
        float: right;
     
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
      <a href="signin.php" >  <img src="sign.png" height="80px" width="80px" style="float: right;"></a>
       <a href="login.php" >  <img src="login.png" height="80px" width="80px" style="float: right;"></a>
       
</div>  
<br><br><br><br><br>

<div class="unit3">

<form action="dataentry2.php" method="post">


<h1>Hotel Data Entry</h1>
<br>
<h3>
  
Hotel Name : 
<input type="text" name="name">
Address :
<input type="text" name="address"><br> <br>
Brand (stars) :
<input type="text" name="stars">
Mobile No :
<input type="text" name="telephone"><br><br>
Email :
<input type="email" name="email"><br><br>

Cost :</h3>

<h4>Single Seated  :<input type="text" value="$" name="single">
 
Double Seated : <input type="text"  value="$"  name="double">
<br>
Family Room: <input type="text"  value="$" name="family">

Honeymoon : <input type="text"  value="$" name="honeymoon">
<br><br></h4>
<h3>
web-site :
<input type="text" name="site">

 Specifications :
 <input type="text" name="specifications">
<br><br>
<input type="submit" value="submit" style="background-color: yellow;font-size: 16pt">
<br><br>
<a href="asd.php"><img src="home.png" width="80px" height="80px"></a>
</h3>
</form>
</div>


<div class="unit4">
<a href="http://www.facebook.com/"><img src="Facebook.png" height="50px" width="50px"/></a>
<a href="https://www.gmail.com/"><img src="g-plus.png" height="50px" width="50px"/></a>
<a href="http://www.instagram.com/"><img src="instagram.png" height="50px" width="50px"/></a>
<a href="https://www.twitter.com/"><img src="twitter.png" height="50px" width="50px"/></a>
<a href="http://www.youtube.com/"><img src="youtube.png" height="50px" width="50px"/></a>


</div>

  </body>
</html>
