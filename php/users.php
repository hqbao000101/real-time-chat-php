<?php
session_start();
include_once "./config.php";

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']}");
$output = "";

if (mysqli_num_rows($sql) == 0) {
  $output = "No users are available to chat now";
} elseif (mysqli_num_rows($sql) > 0) {
  include "./users-data.php";
  echo $output;
}
