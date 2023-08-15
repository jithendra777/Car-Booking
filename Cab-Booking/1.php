<!DOCTYPE html>
<html>
  <head>
    <title>Cab Hiring Application</title>
  <?php 
  session_start();
  $_SESSION['place1']=$_POST['place1'];
  $_SESSION['place2']=$_POST['place2'];
  $_SESSION['date']=$_POST['date'];
  $_SESSION['date1']=$_POST['date1'];
  $email=$_SESSION['username'];
  ?>
    <style>
      /* Styles for the car images */
      .car-image {
        width: 250px;
        height: 150px;
        object-fit: cover;
        margin: 10px;
      }

      /* Styles for the car details */
      .car-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .formbc {
        background-color: #000000;
      }

      .car {
        border: 1px solid black;
        margin: 10px;
        padding: 10px;
        width: 300px;
        text-align: center;
      }

      /* Styles for the booking form */
      .booking-form {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      label {
        margin-top: 10px;
        display: block;
      }

      input[type="text"],
      input[type="datetime-local"],
      input[type="number"] {
        margin-top: 5px;
        width: 200px;
        padding: 5px;
      }

      button {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: rgb(241, 101, 83);
        color: white;
        border: none;
        cursor: pointer;
      }

      button:hover {
        background-color: rgb(85, 85, 230);
      }

      select {
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        width: 100%;
      }

      form {
        max-width: 900px;
        margin: 100px auto;
        background-color: #033e4d;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      header {
        background-color: #033e4d;
        color: #fff;
        padding: 20px;
        text-align: center;
      }

      label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
      color: #fff;
		}

    </style>
    
  </head>
  <body>
    
    <div class="car-details">
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/bY36x3Bq/1.jpg" alt="Car 1">
        <h2>Model: Skoda superb</h2>
        <p>Price: ₹2200/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Skoda superb&Price=2200&email=<?php echo $_SESSION['username'];?>">
        <button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/wvkwbVxc/2.webp" alt="Car 2">
        <h2>Model: Volkswagen virtus</h2>
        <p>Price: ₹2400/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Volkswagen virtus&Price=2400&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/3NJtMvdM/3.webp" alt="Car 3">
        <h2>Model: Volkswagen polo</h2>
        <p>Price: ₹2000/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Volkswagen polo&Price=2000&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/pdJ458h7/4.jpg" alt="Car 4">
        <h2>Model: Honda city</h2>
        <p>Price: ₹2200/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Honda city&Price=2200&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/gjSNG2Zx/5.jpg" alt="Car 4">
        <h2>Model: Honda Jazz</h2>
        <p>Price: ₹2100/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Honda Jazz&Price=2100&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/T3ZNy1Hm/6.jpg" alt="Car 4">
        <h2>Model: Honda Amaze</h2>
        <p>Price: ₹1800/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Honda Amaze&Price=1800&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/R0KswmjY/7.jpg" alt="Car 4">
        <h2>Model: Honda WRV</h2>
        <p>Price: ₹2100/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Honda WRV&Price=2100&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/tC4MwLx1/8.webp" alt="Car 4">
        <h2>Model: TATA Nexon</h2>
        <p>Price: ₹2000/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=TATA Nexon&Price=2000&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/1tSWHTS3/9.webp" alt="Car 4">
        <h2>Model: TATA Punch</h2>
        <p>Price: ₹1700/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=TATA Punch&Price=1700&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/ncXySCgj/10.jpg" alt="Car 4">
        <h2>Model: TATA Harrier</h2>
        <p>Price: ₹2500/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=TATA Harrier&Price=2500&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/CxFQT56s/11.jpg" alt="Car 4">
        <h2>Model: TATA Altroz</h2>
        <p>Price: ₹2200/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=TATA Altroz&Price=2200&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/mZwndbtf/12.jpg" alt="Car 4">
        <h2>Model:TATA Tiago</h2>
        <p>Price: ₹1800/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=TATA Tiago&Price=1800&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/NfCzcp6d/13.jpg" alt="Car 4">
        <h2>Model: TATA Safari</h2>
        <p>Price: ₹2700/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=TATA Safari&Price=2700&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/9Q4NFZ1C/14.jpg" alt="Car 4">
        <h2>Model: Hyundai i20</h2>
        <p>Price: ₹1600/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Hyundai i20&Price=1600&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      <div class="car">
        <img class="car-image" src="https://i.postimg.cc/3NnbWZPJ/15.jpg" alt="Car 4">
        <h2>Model: Hyundai Venue</h2>
        <p>Price: ₹1900/day</p>
        <p>Max Kms included : 630km</p>
        <a href ="checkout.php?Model=Hyundai Venue&Price=1900&email=<?php echo $_SESSION['username'];?>"><button>Select</button></a>
      </div>
      
    </div>
    
