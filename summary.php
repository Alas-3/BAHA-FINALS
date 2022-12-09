<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_users');

// get the post records
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$psw = $_POST['psw'];

// database insert SQL code
$sql = "INSERT INTO tbl_users (ID, fullname, username, contact, email, psw) VALUES ('0', '$fullname', '$username', '$contact', '$email', '$psw')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Contact Records Inserted";
}

?>



<html>
    <link rel="stylesheet" href="summary.css">
    <head><title>Summary Page</title>
    </head>
    <body>
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
          <li class="navbar__btn">
            <a href="index.html" class="button" id="signup"><span>Home</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="hero">
    <b class="hero__heading"><span>Summary Page</span><br></b>

    <br>

    <div class="hero__container">
        <div class="hero__description">

<?php

    $fullname = $_POST["fullname"];
    echo '<span class= "hero__description1">Fullname: </span>' . $fullname;
    echo "<br>";

    $username = $_POST["username"];
    echo '<span class= "hero__description1">Username: </span>' . $username;
    echo "<br>";

    $contact = $_POST["contact"];
    echo '<span class= "hero__description1">Contact Number: </span>' . $contact;
    echo "<br>";

    $email = $_POST["email"];
    echo '<span class= "hero__description1">Email: </span>' . $email;
    echo "<br>";

    $psw = $_POST["psw"];
    echo '<span class= "hero__description1">Password: </span>' . $psw;
    echo "<br>";

?>

</div>
</div>
</div>
</body>
</html>