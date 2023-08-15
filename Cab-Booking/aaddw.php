<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$username=$_SESSION["username"];
$amount=$_SESSION["amount"];
$query1="SELECT * FROM wallet where login_id ='$username'";
$result2=mysqli_query($conn,$query1);
$no1=mysqli_num_rows($result2);
if($no1==0)
{
  $p = "SELECT * from wallet";
  $result1=mysqli_query($conn,$p);
  $no=mysqli_num_rows($result1);
  $query="INSERT INTO wallet (`Amount`,`login_id`) VALUES ('$amount','$username')";
  $result=mysqli_query($conn,$query);
}
else if ($no1==1)
{
while($row = mysqli_fetch_assoc($result2))
{
  $amount = $row["Amount"] + $amount;
  $query="UPDATE wallet SET `Amount` = '$amount' Where `login_id` ='$username'";
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
    <h1>Amount added to wallet</h1>
    <button onclick="window.location.href = 'home.php';">Go Back</button>
  </div>
</body>
</html>
