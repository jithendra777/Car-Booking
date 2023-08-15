<!DOCTYPE html>
<html>
<head>
<title>Floating Cities</title>
<link rel="stylesheet" type="text/css" href="CITIES1.css">
</head>
<body>
<?php 
    $message = "";
	if(isset($_GET['message'])) {
        $message = urldecode($_GET['message']);
    }
    echo $message;
	?>
<div class="floating-cities">
<div class="city">
<a href='/SE_p/BOOKING.php?city=Mumbai&email=<?php 
    $message = "";
	if(isset($_GET['message'])) {
        $message = urldecode($_GET['message']);
    }
    echo $message;
	?>'>
<img src="https://static.dw.com/image/60340729_605.jpeg" alt="Mumbai">
</a>
<h3>Mumbai</h3>
</div>
<div class="city">
<a href='/SE_p/BOOKING.php?city=Ahmedabad'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Sheth_Hutheesinh_Temple.jpg/1200px-Sheth_Hutheesinh_Temple.jpg" alt="Ahmedabad">
</a>
        <h3>Ahmedabad</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Lucknow'>
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/b5/28/7c/chhota-imambara.jpg?w=700&h=-1&s=1" alt="Lucknow">
</a>
        <h3>Lucknow</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Bangalore'>
        <img src="https://www.clubmahindra.com/blog/media/section_images/unique-thi-9b61e9cde66c5b4.jpg" alt="Bangalore">
</a> 
        <h3>Bangalore</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Delhi'>
        <img src="https://cdn.zeebiz.com/sites/default/files/styles/zeebiz_850x478/public/2023/02/13/226854-delhi-1.jpg?itok=LXQjI6w3" alt="Delhi">
</a> 
        <h3>Delhi</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Chennai'>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd87A3keEAFaNjM3cstgfOK3kQUQ5-Fsr-_A&usqp=CAU" alt="Chennai">
</a> 
        <h3>Chennai</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Hyderabad'>
        <img src="https://static.toiimg.com/photo/78184808.cms" alt="Hyderabad">
</a>
        <h3>Hyderabad</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Kolkata'>
        <img src="https://images.news18.com/ibnlive/uploads/2022/01/kolkata-1.jpg?impolicy=website&width=418&height=278" alt="Kolkata">
</a> 
        <h3>Kolkata</h3>
      </div>

      <div class="city">
      <a href='/SE_p/BOOKING.php?city=Indore'>
        <img src="https://cdn.britannica.com/65/142565-050-91E55B84/Daly-College-Indore-Madhya-Pradesh-India.jpg" alt="Indore">
</a> 
        <h3>Indore</h3>
      </div>
</div>
</body>
</html>