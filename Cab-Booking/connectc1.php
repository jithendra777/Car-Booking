<?php 
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$Cno=$_POST['cardNumber'];
$_SESSION['cardNumber']=$_POST['cardNumber'];
$expiry=$_POST['expiryDate'];
$_SESSION['expiryDate']=$_POST['expiryDate'];
$cvv=$_POST['cvv'];
$_SESSION['cvv']=$_POST['cvv'];
$query= "SELECT * from card where `C_No` = '$Cno' and `Expiry`='$expiry' and `CVV` = '$cvv'";
$result=mysqli_query($conn,$query);
$no1=mysqli_num_rows($result);
if ($no1 == 1)
{
    $C_n=$_POST["cardholderName"];
    $user=$_SESSION["username"];
    $amount=$_SESSION["RA"];
    $query= "INSERT INTO carddetails (`C_No`,`Name`,`Amount_Added`) VALUES ('$Cno','$C_n','$amount')";
    $result=mysqli_query($conn,$query);
    header('Location: aaddw1.php');
}
else
{$message = "invalid Creditials";
header("Location: card2.php?message=" . urlencode($message));}
?>