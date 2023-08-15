<?php 
$OTP=$POST["tel0"];
$OTP .=$POST["tel1"];
$OTP .=$POST["tel2"];
$OTP .=$POST["tel3"];
$OTP .=$POST["tel4"];
$OTP .=$POST["tel5"];
echo $OTP;
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
$query="";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    header("Location: CITIES.php");
    exit();
}
else{

}
?>
