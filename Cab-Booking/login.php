
<!doctype html>
<html>
<head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-size: cover;
        font-family: arial;
        width =100%;
        height =100%;
        background-position: center;
        font-style: normal;
        background-color: #FBF8F7
    }

    .loginbox {
        background-color: #FBF8F7;
        margin-top: 7%;
        margin-left: 6%;
        height: 380px;
        width: 290px;
        font-size: 20px;
        padding: 30px 20px;
        border-radius: 30px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

   

   .loginbox h1 {
        font-style: normal;
        font-size: 25px;
        text-align: center;
       margin-top: -2%;
    }

    .top {
        font-style: normal;
        font-size: 20px;
        margin: 0;
        letter-spacing: 0.6px;
    }

    .loginbox p {
        
        margin: 0;
        padding: 0;
        font-weight: bold;
        margin-left:2%;
    }

    .loginbox input {
        text-align: center;
        margin-left: 4pt;
        width: 95%;
        margin-bottom: 20px;
        font-size: 10px;
    }

        .loginbox input[type="email"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid black;
            background: transparent;
            height: 30px;
            outline: none;
            font-size: 20px;
            font-style: normal;
        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: black;
            color: #fff;
            font-size: 20px;
            border-radius: 20px;
            cursor: pointer;
        }

    .loginbox a {
        text-decoration: none;
        font-size: 14px;
        line-height: 20px;
        color: rgb(0, 0, 0);
        font-weight: bold;
        text-align: center;
        margin-left: 55pt;
    }

    .avatar{
        width:4%;
        height: 40pt;
       margin-bottom:-1pt%;
        border-radius:50%;
        margin-left:2%;
       
    }
    .hi{
        margin-left: 480px;
        
    }
    header {
        background-color: black;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
    .r{
        margin-left: 590px;
        color: red;
    }

</style>
</head>
<body>
    <header>
      <h1>Car Hiring Application</h1>
    </header>
    <?php 
    $message = "";
	if(isset($_GET['message'])) {
        $message = urldecode($_GET['message']);
    }
	?>
    <div class=r><?php echo $message; ?></div>
    <div class="hi">
    <div class="loginbox">
        
        <h1>Sign In</h1>
        <form class="top"  method="post" action="connect.php">
            <p>
                Email id:
            </p>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="username1">
            <br><br>
            <p>
                Password:
            </p>
            <input type="password" name="password1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <br><br>
            <input type="submit" value="Login">
            <br>
            <a href="signup.php">Create account /signup</a>
            <br><br>
            <a href="forgot.php">forget password?</a>


        </form>
</div>
    </div>
</body>
</html>