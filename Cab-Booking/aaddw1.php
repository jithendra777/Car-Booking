<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$username=$_SESSION["username"];
$amount=$_SESSION["AA"];
$place1=$_SESSION['place1'];
$place2=$_SESSION['place2'];
$date=$_SESSION['date'];
$time=$_SESSION['date1'];
$price=$_SESSION['Total_Amount'];
$model=$_SESSION['Model'];
$email=$_SESSION['username'];
$city=$_SESSION['city'];
$status="Booked";
$query1="SELECT * FROM wallet where login_id ='$username'";
$result2=mysqli_query($conn,$query1);
$no1=mysqli_num_rows($result2);
if($no1==0)
{
  $query="INSERT INTO wallet (`Amount`,`login_id`) VALUES ('$amount','$username')";
  $result=mysqli_query($conn,$query);
  $amount = (int)$amount-(int)$_SESSION['Total_Amount'];
  $query="UPDATE wallet SET `Amount`= '$amount' where login_id ='$username'";
  $result = mysqli_query($conn, $query);
  $query="INSERT INTO details (`Pick Up Location`, `Drop Off Location`, `Date`, `DropDate`,`login_id`,`amount`,`Car Selected`,`city`,`status`) VALUES ('$place1', '$place2', '$date', '$time','$email','$price','$model','$city','$status')";
  $result=mysqli_query($conn,$query);
}
else if ($no1==1)
{
while($row = mysqli_fetch_assoc($result2))
{
  $amount = $row["Amount"] + $amount;
  $query="UPDATE wallet SET `Amount` = '$amount' Where `login_id` ='$username'";
  $result=mysqli_query($conn,$query);
  $amount = (int)$amount-(int)$_SESSION['Total_Amount'];
  $query="UPDATE wallet SET `Amount`= '$amount' where login_id ='$username'";
  $result = mysqli_query($conn, $query);
  $query="INSERT INTO details (`Pick Up Location`, `Drop Off Location`, `Date`, `DropDate`,`login_id`,`amount`,`Car Selected`,`city`,`status`) VALUES ('$place1', '$place2', '$date', '$time','$email','$price','$model','$city','$status')";
  $result=mysqli_query($conn,$query);
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      text-align: center;
    }

    h1 {
      color: #333333;
    }

    button {
      background-color: black;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

  </style>
</head>
<body>
  <div class="container">
    <h1>Amount paid and Your car is booked</h1>
    <button onclick="window.location.href = 'home.php';">Go Back</button>
  </div>
</body>
</html>
