<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="topnav">
		<a class="active" href="#home">Home</a>
		<a href="#">Contact</a>
		<a href="#">About</a>
	</div>
	<div class="welcome">
	<h1>Car Care Made Easy</h1>
	</div>

	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
	<?php echo display_error(); ?>


	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.welcome {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 20px;
}

</style>

</body>
</html>