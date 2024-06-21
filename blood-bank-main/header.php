<?php      
include('connection.php');

echo '
<!DOCTYPE html>
<html>
<head>
<title>
Blood Bank
</title>
<link rel="stylesheet" type="text/css" href="css\main.css">
</head>
<body>
<div class="header">
<div class ="title">
<img src="res/images/logo2.png" height = "45" width="35" align="top">
&nbsp;
BLOOD BANK

</div><br>
<a href="logout.php">
<button class="btn logout">
LOGOUT
</button></a>
</div>

<div class="container">
<center>
<ul class="tabsWraper">
<li class="tabs">';

if  ($_SESSION["tab"] == "Home")
	echo'<a href="Home.php" class = "active">Home</a>';
else
	echo'<a href="Home.php">Home</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Registration")
	echo'<a href="Add Person.php" class = "active">registration</a>';
else
	echo'<a href="Add Person.php">registration</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Search Donor")
	echo'<a href="Search Person.php" class = "active">Search Donor</a>';
else
	echo'<a href="Search Person.php">Search Donor</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New Donation")
	echo'<a href="New Donation.php" class = "active">New Donation</a>';
else
	echo'<a href="New Donation.php">New Donation</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New Receive")
	echo'<a href="New Receive.php" class = "active">New Receive</a>';
else
	echo'<a href="New Receive.php">New Receive</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Availability")
	echo'<a href="Check Stock.php" class = "active">Availability</a>';
else
	echo'<a href="Check Stock.php">Availability</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Donation History")
	echo'<a href="Donation History.php" class = "active">Donation History</a>';
else
	echo'<a href="Donation History.php">Donation History</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "Receiving History")
	echo'<a href="Receiving History.php" class = "active">Receiving History</a>';
else
	echo'<a href="Receiving History.php">Receiving History</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New User")
	echo'<a href="Add User.php" class = "active">New User</a>';
else
	echo'<a href="Add User.php">New User</a>';
echo '</li><li class="tabs">';
?>
</ul>
</center>

<div class="contents">