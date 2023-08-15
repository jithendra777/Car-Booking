<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="p8.css">
  </head>
  <body>
    <header>
      <div class="header-inner">
        <h1>Profile</h1>
      </div>
    </header>
    <main>
      
      <div class="main-inner">
        
        <div class="profile-container">
          <div class="profile-left">
            <div class="upload">
              
              <form action="connectp.php" method="post" enctype="multipart/form-data">
                 <?php 
                   session_start();
                   $user=$_SESSION["username"];
                   $conn = mysqli_connect('localhost', 'root', '');
                   mysqli_select_db($conn, 'seproject');
                   $sql = "SELECT * FROM `dl` where login_id='$user'";
                   $datadb= mysqli_query($conn, $sql);
                   $ph='';
                   while ($row = mysqli_fetch_assoc($datadb)) {
                    echo '<img height="250px" width="250px" src="data:image;base64,' . $row['dl'] . '"/>';
                    $ph=$row['Phone Number'];
                   }
                  ?>
              <br><br><br>
              <input type="file" name="image" accept="image/*" required>
            </div>
          </div>
          <div class="profile-right">
              <div class="form-group">
                <label for="phone">Phone</label>
                <br>
                  <input type="text" name="phone_no" value= "<?php echo $ph;?>" pattern="[6-9]\d{9}" required>

                <span class="error-message" id="phone-error"></span>
              </div>
              <div class="form-group">
                <label for="driving-license">Driving License</label>
                <div class="upload">
                <br>
                  <input type="file" id="name" name="name1" id="image" accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*" required>
                  <br><br>
                </div>
                <span class="error-message" id="driving-license-error"></span>
              </div>

              <div class="form-group">
                <label for="aadhar-card">Aadhar Card</label>
                <div class="upload">
                <br>
                  <input type="file" id="name" name="name2" accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*" required>
                  <br><br>
                </div>
                <span class="error-message" id="aadhar-card-error"></span>
              </div>
              <div class="form-group">
                <pre><input type="submit" value="Save Changes" class="btn-save">                                                                                  <button onclick="window.location.href = 'home.php';" class="btn-save">Go Back</button></pre>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
