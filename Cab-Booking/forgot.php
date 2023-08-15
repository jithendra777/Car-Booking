<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" type="text/css" href="forgotpasswordcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  />
</head>
<body>
<?php 
    $message = "";
	if(isset($_GET['message'])) {
        $message = urldecode($_GET['message']);
    }
	?>
<div class="r" style="color: red;" align="center"><?php echo $message; ?></div>
<div class="forgot-password-container">
<h1>Forgot Password?</h1>
<p>Please enter your email address and we'll send you instructions on how to reset your password.</p>
<form method="post" action="OTP.php">
<label  >Email:</label>
<input type="email" id="email" name="email" required>
<input type="submit" value="Send">
</form>
<p>Remembered your password? <a href="login.php">Log In</a></p>
</div>
</body>
</html>