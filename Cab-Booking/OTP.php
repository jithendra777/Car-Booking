<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="OTPCSS.css" />
  <title>Verification Account UI</title>
</head>


<body>

  <div class="container">
    <h2>Verify Your Account</h2>
    <p>
      We emailed you the six digit code to personal@email.com <br/>
      Enter the code below to confirm your email address
    </p>
<form method ="post" action="">
    <div class="code-container">
      <input type="tel0" class="code" placeholder="0" min="0" max="9" maxlength="1" required>
      <input type="tel1" class="code" placeholder="0" min="0" max="9" maxlength="1" required>
      <input type="tel2" class="code" placeholder="0" min="0" max="9" maxlength="1" required>
      <input type="tel3" class="code" placeholder="0" min="0" max="9" maxlength="1" required>
      <input type="tel4" class="code" placeholder="0" min="0" max="9" maxlength="1" required>
      <input type="tel5" class="code" placeholder="0" min="0" max="9" maxlength="1" required>
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Verify</button>
    </div>
</form>
    <small class="info">
      If you didn't receive a code !! <a href="OTP.html" class="resend-link"><strong style="color: black;">RESEND</strong></a>
    </small>

  </div>
</body>
</html>
<script>
  const inputs = document.querySelectorAll('.code-container input');

  inputs.forEach((input, index) => {
    input.addEventListener('keyup', (event) => {
      const inputLength = input.value.length;
      if (inputLength === 1) {
        if (index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      }
      else if (event.code === 'Backspace' && index > 0) {
        inputs[index - 1].focus();
      }
    });
  });
</script>