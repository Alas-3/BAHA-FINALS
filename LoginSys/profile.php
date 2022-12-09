<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db_users';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT psw, email, contact FROM tbl_users WHERE ID = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['ID']);
$stmt->execute();
$stmt->bind_result($psw, $email, $contact);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="../index.html" id="navbar__logo"><h1>BAHA</h1></a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?php echo $_SESSION['name']; ?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?php echo $psw ?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?php echo $email ?></td>
					</tr>
					<tr>
						<td>Contact Number:</td>
						<td><?php echo $contact ?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>