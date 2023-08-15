<?php 
    session_start();
    $username=$_POST["username"];
    $password=$_POST["password"];
    $user=$_POST["user"];
    $_SESSION["name"]=$_POST["user"];
    $conn=mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'seproject');
    $query="SELECT * FROM login WHERE login_id = '$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
    $message = "Email already exists";
    header("Location: signup.php?message=" . urlencode($message));
    }
    else{
    $query="insert into login values('$user','$username','$password',NULL)";
    $result = mysqli_query($conn, $query);
    header("Location: login.php");
    }
?>
