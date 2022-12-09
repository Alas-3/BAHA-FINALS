<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		 <nav class="navbar">
      <div class="navbar__container">
        <a href="../index.html" id=""><img src="../img/baha.png" alt="" id="navbar__logo"></a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="../index.html" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="../donation.html" class="navbar__links" id="about-page">Donate</a>
          </li>
          <li class="navbar__item">
            <a href="AboutUs.html" class="navbar__links" id="services-page">About Us</a>
          </li>
          <li class="navbar__item">
            <a href="login.php" class="navbar__links" id="services-page">Login</a>
          </li>
          <li class="navbar__btn">
            <a href="../registration.html" class="button" id="signup"><span>Sign Up</span></a>
          </li>
        </ul>
      </div>
    </nav>


	<div class="main__container">
		<div class="login">
			<h1>Login</h1>
      <?php if (isset($_GET['error'])) { ?>

              <p class="error"><?php echo $_GET['error']; ?></p>

          <?php } ?>
			<form action="authenticate.php" method="post">
        
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="psw" placeholder="Password" id="psw" required>
				<input type="submit" value="Login">
			</form>
		</div>
		</div>
	</div>
	</body>
</html>