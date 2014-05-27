<?php

if(isset($_GET['user'])) {
  session_start();
  $user_name = $_GET['user'];
  if($_SESSION['logged_on_status'] == true) {
    echo "<center><h1>Welcome $user_name</h1></center>";
    echo "<br><center><form action='logout.php'><input type='submit' value='Logout'></form></center>";
    echo "<br><center><h3>You have successfully logged in</h3></center>";
  }
  else header("Location: logout.php");
}
else header("Location: index.php");
