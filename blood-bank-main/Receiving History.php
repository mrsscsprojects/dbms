<?php
session_start();
$_SESSION["tab"] = "Receiving History";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!</h2>';
else{
	include_once('header.php');
	echo '				<form name="ReceivingHistory" action = "receivingHistory.php"  method = "POST">
	<h2>HISTORY</h2>
	<br>
	<p>
	Specify time interval to view the Receiving History 
	</p>

	
	<p>
	<label>After: </label>  
	<br>
	<input type = "date" name  = "sdate" class="input" required/>  
	</p>  

	<p>
	<label>Before: </label>  
	<br>
	<input type = "date" name  = "edate" class="input" required/>  
	</p>  

	<p>
	<button class="btn">SEARCH</button>
	</p>

	</form>';
	include_once('footer.php');
}
?>
