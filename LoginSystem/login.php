<?php

if(isset($_POST['uname']) && isset($_POST['pass'])) {
  $username = $_POST['uname'];
  $password = $_POST['pass'];
}
else
  header("Location: index.php");

echo $username . $password;
