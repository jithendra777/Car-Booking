<?php 
session_start();
$username=$_POST["username1"];
$password=$_POST["password1"];
$_SESSION["username"] = $_POST["username1"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$query="select * from login where login_id='$username' and user_pwd='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    session_start();
    $q2="select * from login where login_id='$username' and user_pwd='$password'";
    $r2=mysqli_query($conn,$q2);
    $_SESSION["username"]=$username;
    foreach($result as $row) {
        $_SESSION["username"]=$row['login_id'];
    }
    header("Location: home.php");
    exit();
}
else{
    $message = "invalid username or password";
    header("Location: login.php?message=" . urlencode($message));
    exit();
}
?>
