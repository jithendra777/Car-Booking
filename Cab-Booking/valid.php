<?php 
session_start();
$_SESSION["username"]=$_POST["username"];
$username=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$query="select * from login where login_id='$username' and user_pwd='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    echo "you are successfully logged in";
    header("Location: login.php");
    exit();
}
else{
    echo "invalid username or password";
    exit();
}
?>
