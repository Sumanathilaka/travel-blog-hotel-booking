<!DOCTYPE html>

<html>
   <head>
 
      <script>
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);	
          }

          var images = [], x = -1;
          images[0] = "white.jpg";
          images[1] = "3.jpg";
          images[2] = "5.jpg";
          images[3] = "1.jpg";
          images[4] =  "4.jpg";
      </script>

      <style>
      
      body {
      	background-image: url("back.jpg");
      	      background-size :cover;  }

   .unit1 {
         height: 50px;
        text-align: center;  }

   h1{
      	color: brown
      }
  
   .unit3 {
      	
           text-align: center;
           width: 1200px;
           float :left;
         }

   .unit4{	
   	    height:420px;
      	width: 320px;
        float: right;
        text-align: center;
            margin: 2px;
            padding: 2px;
         }
         footer{

          float: right;
         }
         
        
      </style>
      
   </head>

   <body onload = "startTimer()">
       
       <div class="unit1"> 
    <a href="http://localhost/project/index.html" >  <img src="backto.png" height="40px" width="100px" style="float: left;"></a>
      <img src="logo.png" height="50px" width="550px" style="float: center">

      <a href="http://google.com/" >  <img src="search.png" height="80px" width="80px" style="float: right;"></a>
        <a href="login.php" >  <img src="login.png" height="80px" width="80px" style="float: right;"></a>
       <a href="signin.php" >  <img src="sign.png" height="80px" width="80px" style="float: right;"></a>

</div>
 <br>
      <center>  
       <img id="img" src="4.jpg" width="1300px" height="330px"/>
       <br>
       <button type="button" onclick="displayPreviousImage()">Previous</button>
       
      <button type="button" onclick="displayNextImage()">Next</button>
      </center>
<br>

<br>

<form action="search.php"  method="post">
<fieldset>
<br><br>
<center><h4>
<strong>City,Hotel,Area : 
<input type="text" name="name1">
Check-In :
<input type="date" name="checkindate">
Check-Out :
<input type="date" name="checkoutdate">
<br><br>
Rooms: 
<input type="text" name="room">
Guests: </strong>
<input type="text" name="guests"><br><br>

<input type="submit" value="search" style="font-size:14pt;color:white;background-color:red"> 

<br><br>
</fieldset>
</h4>
</center>
</form>

<br>


<div class="unit4">

<img src="kolkata.jpg" width="300px" height="150px">
<h2>Kolkata </h1>
<h6> Kolkata (formerly Calcutta) is the capital of India's West Bengal state. Founded as an East India Company trading post, it was India's capital under the British Raj from 1773 to 1911. Today it is known for its grand colonial architecture, art galleries and cultural festivals. It is also home to Mother House, headquarters of the Missionaries of Charity, founded by Mother Teresa, whose tomb is on site.Best place to visit.</h6>
<hr>
<h6>$35         ---               22% SALE</h6>
 </div>


<div class="unit4">

<img src="bangalore.jpg" width="300px" height="150px">
<h2>Bangalore </h2>
<h6> Bengaluru (also called Bangalore) is the capital of India's southern Karnataka state. The center of India's high-tech industry, the city is also known for its parks and nightlife. By Cubbon Park, Vidhana Soudha is a Neo-Dravidian legislative building. Former royal residences include 19th-century Bangalore Palace, modeled after England’s Windsor Castle, and Tipu Sultan’s Summer Palace, an 18th-century teak structure.</h6>
<hr>
<h6>$40        ---                10% SALE</h5>
 </div>



<div class="unit4">

<img src="mumbai.jpg" width="300px" height="150px">
<h2>Mumbai </h2>
<h6>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. The city's also famous as the heart of the Bollywood film industry.</h6>
<hr>
<h5>$55           ---            15% SALE</h5>
 </div>



<div class="unit4">

<img src="manali.jpg" width="300px" height="150px">
<h2>Manali</h2>
<h6>Manali is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River, it’s a gateway for skiing in the Solang Valley and trekking in Parvati Valley. It's also a jumping-off point for paragliding, rafting and mountaineering in the Pir Panjal mountains, home to 4,000m-high Rohtang Pass.best place to visit.</h6>
<hr>
<h5>$45           ---            15% SALE</h5>
 </div>


<div class="unit4">

<img src="singapore.jpg" width="300px" height="150px">
<h2>Singapore </h2>
<h6>Singapore, an island city-state off southern Malaysia, is a global financial center with a tropical climate and multicultural population. Its colonial core centers on the Padang, a cricket field since the 1830s and now flanked by grand buildings such as City Hall, with its 18 Corinthian columns. In Singapore's circa-1820 Chinatown stands the red-and-gold Buddha Tooth Relic Temple, said to house one of Buddha's teeth.</h6>
<hr>
<h5>$155      ---                 2% SALE</h5>
 </div>


<div class="unit4">

<img src="srilanka.jpg" width="300px" height="150px">
<h2>Srilanka </h2>
<h6>Sri Lanka (formerly Ceylon,jambudeepa) is an island nation south of India in the Indian Ocean. Its diverse landscapes range from rainforest and arid plains to highlands and sandy beaches. It’s famed for its ancient Buddhist ruins, including the 5th-century citadel Sigiriya, with its palace and frescoes. The city of Anuradhapura,Polonnaruwa Sri Lanka's ancient capital, has many ruins dating back more than 2,000 years.

</h5>
<hr>
<h5>$105  ---                     5% SALE</h5>
 </div>


<div class="unit4">

<img src="maldives.jpg" width="300px" height="150px">
<h2>Maldives</h2>
<h6>The Maldives is a tropical nation in the Indian Ocean composed of 26 ring-shaped atolls, which are made up of more than 1,000 coral islands. It’s known for its beaches, blue lagoons and extensive reefs. The capital, Malé, has a busy fish market, restaurants and shops on the main road, Majeedhee Magu, and 17th-century Hukuru Miskiy (also known as Friday Mosque) made of carved white coral.Best place to visit.</h6>
<hr>
<h5>$90            ---           15% SALE</h5>
 </div>



<div class="unit4">

<img src="aus.jpg" width="300px" height="150px">
<h2>Australia</h2>
<h6>Australia is a country and continent surrounded by the Indian and Pacific oceans. Its major cities – Sydney, Brisbane, Melbourne, Perth, Adelaide – are coastal. Its capital, Canberra, is inland. The country is known for its Sydney Opera House,      the Great Barrier Reef, a vast interior desert wilderness called the Outback, with a wonderful nature  and unique animal species like kangaroos and duck-billed platypuses.The best place to visit.</h6>
<hr>
<h5>$220            ---           15% SALE</h5>
 </div>




<br><br><br><br><br>
<footer>
<center>

<a href="http://www.facebook.com/"><img src="Facebook.png" height="60px" width="60px"/></a>
<a href="https://www.gmail.com/"><img src="g-plus.png" height="60px" width="60px"/></a>
<a href="http://www.instagram.com/"><img src="instagram.png" height="60px" width="60px"/></a>
<a href="https://www.twitter.com/"><img src="twitter.png" height="60px" width="60px"/></a>
<a href="http://www.youtube.com/"><img src="youtube.png" height="60px" width="60px"/></a>

</center>
</footer>

   </body>
</html>
