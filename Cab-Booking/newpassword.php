<?php 
$username=$_POST["username1"];
$password=$_POST["password1"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$query="select * from login where login_id='$username' and user_pwd='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    header("Location: CITIES.php");
    exit();
}
else{
    $message = "invalid username or password";
    header("Location: login.php?message=" . urlencode($message));
    exit();
}
?>
