<?php
session_start();
$_SESSION["tab"] = "New Receive";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!</h2>';
else{
	include_once('header.php');
	echo '<form name="addPerson" action = "newReceive.php"  method = "POST">
	<h2>NEW RECEIVE</h2>
	<br>

	<p>  
	<label>Personal ID:</label>  
	<br>
	<input type = "Number" name  = "pid" class="input" required/>  
	</p>  

	<p>  
	<label>Units of blood Received:</label>  
	<br>
	<input type = "Number" maxlength="1" name  = "units" class="input" required/>  
	</p>  

	<p>  
	<label>Admitted Hospital:</label>  
	<br>
	<input type = "text" name  = "hospital" class="input" required/>  
	</p>  

	<p>
	<button class="btn">SUBMIT</button>
	</p>
	</form>';
	include_once('footer.php');
}
?>
