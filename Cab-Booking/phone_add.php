<?php 

session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$username=$_SESSION["username"];
$phone_no=$_POST["phone_no"];

$q = "INSERT INTO phone(username,phone_no) values('$username','$phone_no')";
$result = mysqli_query($conn,$q);

header("Location: p9.php");
exit();

    

?>