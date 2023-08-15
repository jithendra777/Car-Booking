<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$username=$_SESSION["username"];
	if(isset($_GET['message'])) {
    $_POST["amount"]=$_SESSION["amount"];
    }
    else{
      $_SESSION["amount"]=$_POST["amount"];
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Card Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 10px;
      padding: 20px;
    }

    h1 {
      color: #333333;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333333;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #000;
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
<?php 
    $message = "";
	if(isset($_GET['message'])) {
        $message = urldecode($_GET['message']);
    }
	?>
    <div class=r align='center' style="color:red;"><?php echo $message; ?></div>
  <h1>Card Details</h1>
  <form action="connectc.php" method="POST">
    <label for="cardholder-name">Cardholder Name:</label>
    <input type="text" id="cardholder-name" name="cardholderName" required><br>

    <label for="card-number">Card Number:</label>
    <input type="text" id="card-number" name="cardNumber" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" required><br>

    <label for="expiry-date">Expiry Date:</label>
    <input type="text" id="expiry-date" name="expiryDate" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" placeholder="MM/YY" required><br>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" pattern="[0-9]{3,4}" name="cvv" required><br>

    <input type="submit" value="Submit">
    
  </form>
</body>
</html>
