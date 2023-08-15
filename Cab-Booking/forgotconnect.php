<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'seproject');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $sql = "SELECT * FROM login WHERE login_id = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $code = generateRandomCode();
        $to = $email;
        $subject = "Verification code for forgot password";
        $message = "Your Verification code is: " . $code;
        $headers = "From: sportsguyt@gmail.com";
        mail($to, $subject, $message, $headers);
        echo "A Verification Code has been sent to your $email";
    } else {
        echo "No user found with that email address";
    }
}
function generateRandomCode() {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $new_password = "";
    for ($i = 0; $i < 8; $i++) {
        $new_password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $new_password;
}
mysqli_close($conn);
?>
