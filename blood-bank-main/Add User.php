<?php
session_start();
$_SESSION["tab"] = "Add User";

if($_SESSION["login"] != 1)
  echo '<h2 txtcolor="red">Authentication Error!</h2>';
else{
  include_once('header.php');
  echo '
  <form name="addUser" action = "addUser.php"  method = "POST">
  <h2>ADD USER</h2>
  <br>

  <p>  
  <label>Admin Password: </label>  
  <br>
  <input type = "password" name  = "super_pwd" class="input" required/>  
  </p>  
  <p>  
  <label>Username: </label>  
  <br>
  <input type = "text" name  = "usr_name" class="input" required/>  
  </p>  
  <p>  
  <label>Password: </label>  
  <br>
  <input type = "password" name  = "usr_pwd" class="input" required/>  
  </p>  
  <p>  
  <label>Confirm Password: </label>  
  <br>
  <input type = "password" name  = "usr_cnfrm_pwd" class="input" required/>  
  </p>  

  <p>
  <button class="btn">CREATE USER</button>
  </p>
  </form>';
  include_once('footer.php');
}
?>
