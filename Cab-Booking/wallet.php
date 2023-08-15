<!DOCTYPE html>
<html>
<head>
    <title>Your Wallet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .balance {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            display: inline-block;
            padding: 8px 12px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="card.php" method='POST'>
    <div class="container">
        <h1>Your Wallet</h1><br>
        <div class="balance">
        <?php 
            session_start();
            $user=$_SESSION["username"];
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'seproject');
            $query="SELECT Amount from wallet where login_id ='$user'";
            $result = mysqli_query($conn, $query);
            $amount=0;
            while($row = mysqli_fetch_assoc($result))
            {
                $amount= $row["Amount"];
            }
            ?>
            <strong>Current Balance:</strong> <span id="balanceAmount">₹<?php echo $amount;?></span>
        </div>
        <div>
            <br>
            <label for="amount">Add Money:</label>
            <input type="number" name="amount" min=1 required>
            <input type="submit">
        </div>
    </div>
    </form>
</body>
</html>
