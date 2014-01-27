<?php

if(isset($_POST['uname']) && isset($_POST['pass'])) {
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  login($username, $password);
}
else
  header("Location: index.php");

echo $username . $password;

function login($u, $p) {
  mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Unable to connect to database");
  mysql_select_db(DB_NAME) or die("Unable to select database");
  
}
