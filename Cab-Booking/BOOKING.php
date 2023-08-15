<!DOCTYPE html>
<html>
  <head>
    <title>Booking Cab</title>
    <link rel="stylesheet" type="text/css" href="BOOKING1.css">
  </head>
  <body>
    <header>
      <h1>Enter the details</h1>
    </header>
    <main>
      <form method='POST' action="1.php">
         <input type ='hidden' value='<?php echo $_GET['email'];?>' name='email'>
        <label for="pickup-location">Pickup Location:</label>
        <select name="place1" style="width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 20px;" required>
      <?php 
        session_start();
        $city=$_GET["city"];
        $_SESSION['city']=$city;
        $conn=mysqli_connect('localhost','root','');
        mysqli_select_db($conn,'seproject');
        $query="select $city from cities";
        $result=mysqli_query($conn,$query);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<option >',$row[$city],'</option>';
        }
        ?>
        </select>
        <label for="dropoff-location">Dropoff Location:</label>
        <select name="place2" style="width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 20px;" required>
      <?php 
        $city=$_GET["city"];
        $conn=mysqli_connect('localhost','root','');
        mysqli_select_db($conn,'seproject');
        $query="select $city from cities";
        $result=mysqli_query($conn,$query);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<option>',$row[$city],'</option>';
        }
        ?>
        </select>
        <label for="date">Pickup Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="time">Dropoff Date:</label>
        <input type="date" id="date1" name="date1" required>
         <input type="submit" value="Book Now">
         <script>
          function validateBookingForm() {
          var pickupDate = new Date(document.getElementById("date").value);
          var dropoffDate = new Date(document.getElementById("date1").value);
          
          if (pickupDate > dropoffDate) {
            alert("Drop-off date must be after the pick-up date.");
            return false;
          }
  
          return true;
        }
  
        var currentDate = new Date().toISOString().split('T')[0];
        document.getElementById("date").min = currentDate;
        document.getElementById("date1").min = currentDate;

        document.getElementById("date").addEventListener("change", function() {
          var pickupDate = new Date(document.getElementById("date").value);
          document.getElementById("date1").min = pickupDate.toISOString().split('T')[0];
        });
         
        </script>
      </form>
    </main>
 </body>
</html>