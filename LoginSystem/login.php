<?php
require "config.php";

if(isset($_POST['uname']) && isset($_POST['pass'])) {
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  login($username, $password);
}
else
  header("Location: index.php");


function login($u, $p) {
  mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Unable to connect to database");
  mysql_select_db(DB_NAME) or die("Unable to select database");
  $q = mysql_query("SELECT * FROM login_users WHERE name='$u'");
  $num_rows = mysql_num_rows($q);
  $qr = mysql_fetch_array($q);
  $seed = $qr['rd'];
  $encoded_pass = md5($seed . $p);
  $q = mysql_query("SELECT * FROM login_users WHERE name='$u' AND pass='$encoded_pass'");
  $num_rows = mysql_num_rows($q);
  if($num_rows === 1) {
    $qr = mysql_fetch_array($q);
    $name = $qr['name'];
    session_start();
    $_SESSION['logged_on_status'] = true;
    $_SESSION['key'] = $encoded_pass;
    header("Location: home.php?user=" . $name);
  }
  else header("Location: index.php");
}

login($username, $password);
