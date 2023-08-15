<!DOCTYPE html>
<html>
<head>
  <title>Pay with Wallet</title>
  <style>
        body {
      font-family: Arial, sans-serif;
    padding: 20px;
     background-image: url("https://www.phonepe.com/webstatic/static/ebcb964b1ddd1d87de7dfc10c6d43bb8/5707d/bs-pg-widget-image-2.png");
     background-repeat:no-repeat;
     background-position: right;
     background-size: 50% 110%; 
    }

    h1 {
      color: #333;
    }

    p {
      color: #666;
      margin-bottom: 20px;
    }

    .pay-button {
      padding: 10px 20px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      align-self: center;
    }

    .wallet-form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .insufficient-funds {
      color: red;
      margin-bottom: 10px;
    }

    .amount-input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }
    .container {
      width: 250px;
      height: 250px;
      padding: 20px;
      margin-top: 100px;
      margin-left: 100px;
      background-color: #F7DB6A;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <h1 align="center">Payment Page</h1>
  <div class="container" align="center">
  <form action='connectw.php' method="POST">
  <?php 
    $message = "";
	if(isset($_GET['message'])) {
        $message = $_GET['message'];
        session_start();
            $user=$_SESSION["username"];
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'seproject');
            $query="SELECT Amount from wallet where login_id ='$user'";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result))
            {
                $amount= $row["Amount"];
            }
          $amount=0;
        $x=(int)$_SESSION['Total_Amount'];
        $a=$x-(int)$amount;
        $_SESSION['RA']=$a;
        echo '<br>';
        echo 'Insufficient Funds '. '<br>'.'The amount need to be added into the wallet is '. $_SESSION['RA'];
        echo '<br>'; echo '<br>'; echo '<br>';
        echo '<input type="number" name="amount" value="' . $a . '" min="' . $a . '" required>';
        echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>';
        echo '<input type="hidden" value="hi" name="hi">';
        echo '<input type="submit" value= "Pay From Wallet" class="pay-button" >';
    }
    else
    {
      echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>';
      echo '<input type="hidden" name="amount">';
      echo '<input type="hidden" value="" name="hi">';
      echo '<input type="submit" value= "Pay From Wallet" class="pay-button" >';
    }
	?>
  </form>
  </div>
</body>
</html>
