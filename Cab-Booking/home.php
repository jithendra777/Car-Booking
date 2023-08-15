<!DOCTYPE html>
<html>
<head>
  <title>MyCab - Book Your Ride</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'seproject');
$username = $_SESSION['username'];
$query = "SELECT `user` FROM login WHERE login_id = '$username'";
$result = mysqli_query($conn, $query);
?>


  <header>
    <div class="logo">
      <h1><?php if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "
              <h2 style=' color='White';'>Hello, " . $row['user'] . "!</h2>
          ";
  }
} else {
  echo "";
} ?></h1>
    </div>
    <nav>
      <ul>
        <li><a href="p9.php">Profile</a></li>
        <li><a href="wallet.php">Wallet</a></li>
        <li><a href="connecth.php">History</a></li>
      </ul>
    </nav>
  </header>
  <section class="hero">
    <div class="hero-content">
      <h2>Welcome to MyCab</h2>
      <p>Book your ride with ease and convenience.</p>
      <a href="CITIES.php" class="cta-button">Book a Ride</a>
    </div>
  </section>

  <section class="services">
    <h2>Our Services</h2>
    <div class="service-card">
      <img src="ch.jpg" alt="Taxi Service">
      <h3>Cab hiring Service</h3>
      <p>Book your favourite car on daily rentals.</p>
    </div>
    <div class="service-card">
      <img src="cp.jpg" alt="Carpooling">
      <h3>Carpooling</h3>
      <p>Share rides with others and reduce your travel costs.</p>
    </div>
  </section>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> MyCab. All rights reserved.</p>
  </footer>
</body>
</html>
