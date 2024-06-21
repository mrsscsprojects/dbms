<?php
session_start();
$_SESSION["tab"] = "Availability";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!</h2>';
else{
	include_once('header.php');

	include_once('checkStock.php');

	include_once('footer.php');
}
?>
