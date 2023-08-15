<?php 
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
  $place1=$_SESSION['place1'];
  $place2=$_SESSION['place2'];
  $date=$_SESSION['date'];
  $time=$_SESSION['date1'];
  $price=$_SESSION['Total_Amount'];
  $model=$_SESSION['Model'];
  $email=$_SESSION['username'];
  $city=$_SESSION['city'];
  $status="Booked";
  $query="INSERT INTO details (`Pick Up Location`, `Drop Off Location`, `Date`, `DropDate`,`login_id`,`amount`,`Car Selected`,`city`,`status`) VALUES ('$place1', '$place2', '$date', '$time','$email','$price','$model','$city','$status')";
  $result=mysqli_query($conn,$query);

  
?>
<!doctype html>
<html>
<head><br><br><br><br><br><br><br><br><br><br>
    <style>p{font-family: 'Courier New', monospace;
    font-size:60px;
    }
    .button {
      display: inline-block;
      background-color: #000;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 16px;
      border-radius: 4px;
      font-family: 'Courier New', monospace;
    }

    </style>
</head>
<body>
    <p align="center">THANK YOU YOUR CAR IS BOOKED!!!!</p>
    <div align='right'><a href="home.php" class="button">Go to Home Page</a></div>
</body>
</html>