<html>  
<head>  
    <title>Login Form</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
</head>
<style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 .error
{
  color: red;
  font-weight: 700;
} 
</style>
<body>  
    <div class="container">  
    <div class="table-responsive">  
    <h3 align="center">Login Form</h3><br/>
    <div class="box">
     <form method="post" >  
       <div class="form-group">
       <label for="email">Enter Your Login Email</label>
       <input type="text" name="email" id="email" placeholder="Enter Email" required class="form-control"/>
      </div>
      <div class="form-group">
       <input type="submit" id="login" name="login" value="Submit" class="btn btn-success" />
       </div>
       
       <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
     </form>
     </div>
   </div>  
  </div>
 </body>  
</html>
Step 3: User Verify and Send OTP

In this step, we will verify user via email address if everything is correct than send OTP on that email address and redirected to otpverify.php page.

<?php
session_start();
include_once('connection.php');
if(isset($_REQUEST['login']))
{
  $email = $_REQUEST['email'];
  $select_query = mysqli_query($connection,"select * from tbl_student where email='$email'");
  $res = mysqli_num_rows($select_query);
  if($res>0)
  {
    $data = mysqli_fetch_array($select_query);
    $name = $data['name'];
    $_SESSION['name'] = $name;
    $otp = rand(10000, 99999);   //Generate OTP
    include_once("SMTP/class.phpmailer.php");
    include_once("SMTP/class.smtp.php");
    $message = '<div>
     <p><b>Hello!</b></p>
     <p>You are recieving this email because we recieved a OTP request for your account.</p>
     <br>
     <p>Your OTP is: <b>'.$otp.'</b></p>
     <br>
     <p>If you did not request OTP, no further action is required.</p>
    </div>';
$email = $email; 
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPAuth = true;                 
$mail->SMTPSecure = "tls";      
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; 
$mail->Username = "cabhiring7@gmail.com"; // Enter your username
$mail->Password = "jithu4126"; // Enter Password
$mail->FromName = "Amrita Cabs";
$mail->AddAddress($email);
$mail->Subject = "OTP";
$mail->isHTML( TRUE );
$mail->Body =$message;
if($mail->send())
{
  $insert_query = mysqli_query($connection,"insert into tbl_otp_check set otp='$otp', is_expired='0'");
  header('location:otpverify.php');
}
else
{
  $msg = "Email not delivered";
}
}
  else
  {
    $msg = "Invalid Email";
  }
}

?>