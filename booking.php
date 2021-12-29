<?php 
	include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topnav">
		<a  href="./index.php">Home</a>
		<a class="active" href="./booking.php">Bookings</a>
		<a href="#">Contact</a>
		<a href="#">About</a>
	</div>
	<div class="header">
		<h2>Book Your Personal Mechanic</h2>
	</div>
    <div class="mechanic_list">
    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
    </tr>
    <?php 
    $conn = mysqli_connect('localhost', 'root', '', 'multi_login');
    if($conn-> connect_error) {
        die("Connection failed:" . $conn-> connect_error);
    }
    $sql = "SELECT m_name, m_email, m_type FROM mechanic";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row["m_name"]. "</td><td>". $row["m_email"]. "</td><td>". $row["m_type"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }
    $conn-> close();
    ?>
    </table>  
    </div>

    <!--php for get mechanic table -->




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
/*table{
    border-collapse: collapse;
    width: 100%;
    color: black;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}*/
table, td, th {
  border: 1px solid black;
}
table {
  border-collapse: collapse;
  width: 100%;
}
td {
  text-align: center;
}
</style>
</body>
</html>