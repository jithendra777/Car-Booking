<?php 
  session_start();
  $user=$_SESSION["username"];
  $conn = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($conn, 'seproject');
  $query = "SELECT * FROM details where login_id = '$user'";
  $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking History</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: #333333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    
    table th, table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    table th {
      background-color: black;
      color: white;
    }
    
    .status-approved {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase;
      background-color: #28a745;
      color: white;
    }
    
    .status-cancelled {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase;
      background-color: #dc3545;
      color: white;
    }
  </style>
</head>
<body>
  <h1>Booking History</h1>
  <table>
    <thead>
      <tr>
        <th>Car Booked</th>
        <th>Date Booked</th>
        <th>Amount Paid</th>
        <th>Pick Up Location</th>
        <th>Drop Off Location</th>
        <th>Pick Up Date</th>
        <th>Drop Off Date</th>
        <th>City</th>
      </tr>
    </thead>
    <body>
      <?php 
       if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Car Selected"] . "</td>";
            echo "<td>" . $row["Date"] . "</td>";
            echo "<td>" . $row["amount"] . "</td>";
            echo "<td>" . $row["Pick Up Location"] . "</td>";
            echo "<td>" . $row["Drop Off Location"] . "</td>";
            echo "<td>" . $row["Date"] . "</td>";
            echo "<td>" . $row["DropDate"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            if ($row["status"] == "Booked") {
                echo "<td><div class='status-approved'>" . $row["status"] . "</div></td>";
            } else if ($row["status"] == "Cancelled") {
                echo "<td><div class='status-cancelled'>" . $row["status"] . "</div></td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No Cancellation available.</td></tr>";
    }    
      ?>
    </tbody>
  </table>
</body>
</html>
