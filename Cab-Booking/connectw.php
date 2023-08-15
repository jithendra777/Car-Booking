<?php 
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
            $c=$_POST['hi'];
            echo $_POST['hi'];
            $_SESSION["AA"]=$_POST["amount"];
            if('hi'== $c)
            {
                header("Location: card2.php");
            }
            else if ($amount < $_SESSION['Total_Amount']){
                $message='Insufficient Funds';
                header("Location: Insuff.php?message=$message");
            }
            else
            {
                header("Location: thankyouw.php");
            }
?>