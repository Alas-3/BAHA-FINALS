<?php
    date_default_timezone_set('Asia/Manila');
    include 'help_con.php';
    include 'help_inc.php';
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAHA</title>
    <link rel="stylesheet" href="help.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"/>
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="index.html" id=""><img src="img/baha.png" alt="" id="navbar__logo"></a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          
          <li class="navbar__item">
            <a href="donation.html" class="navbar__links" id="about-page">Donate</a>
          </li>
          <li class="navbar__item">
            <a href="AboutUs.html" class="navbar__links" id="services-page">About Us</a>
          </li>
          <li class="navbar__item">
            <a href="LoginSys/login.php" class="navbar__links" id="services-page">Login</a>
          </li>
          <li class="navbar__item">
            <a href="LoginSys/profile.php" class="navbar__links" id="services-page">Profile</a>
          </li>
          <li class="navbar__btn">
            <a href="registration.html" class="button" id="signup"><span>Sign Up</span></a>
          </li>
        </ul>
      </div>
    </nav>
   <?php
   echo"
   <div class='main'>
   <div class='hero'>
   <div class='hero__container'>
    <div class='hero__heading'><h1>Help to<br>Inform Others</h1></div>
    </div>
    </div>";

    if(isset($_SESSION['ID'])){
          echo"<div class='main__content'>
          <h1>Post relevant info here:</h1>
          </div><div class='container'>
            <div class='commentarea'><form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='".$_SESSION['ID']."'>
            <textarea name='comment' placeholder='Type Here'></textarea><br>
            <button type='submit' name='commentSubmit' class='comment'>
            POST</button></div></div>
        </form>";
        }
        else{
            echo"<div class='warning'>
                You need an account to comment.<br>
                <a href='registration.php'>Register</a>
                <a href='login_page.php'>Sign In</a>
            </div>";
        }
        getComments($conn);
    ?>
    </div>
    </div>


</body>
</html>
