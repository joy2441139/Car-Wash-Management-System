<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>

	<div class="topnav">
		<a class="active" href="./home.php">Home</a>
		<a href="#">Contact</a>
		<a href="#">About</a>
	</div>
	<div class="welcome">
	<h1>Car Care Made Easy</h1>
	</div>

	<div class="header">
		<h2>Admin - New Mechanic</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Mechanic name</label>
			<input type="text" name="m_name" value="<?php echo $m_name; ?>">
		</div>
		<div class="input-group">
			<label>Mechanic Email</label>
			<input type="email" name="m_email" value="<?php echo $m_email; ?>">
		</div>
		<div class="input-group">
			<label>Mechanic Status</label>
			<select name="m_type" id="user_type" >
				<option value=""></option>
				<option value="Available">Available</option>
				<option value="Unavailable">Unavailable</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="m_btn">Add Mechanic</button>
		</div>
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