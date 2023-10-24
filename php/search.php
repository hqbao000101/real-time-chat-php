<?php
session_start();
include_once "./config.php";

$searchKey = mysqli_real_escape_string($conn, $_POST['searchKey']);
$output = "";

$sql = mysqli_query($conn, "SELECT * FROM users WHERE (fname LIKE '%{$searchKey}%' OR lname LIKE '%{$searchKey}%') AND unique_id != {$_SESSION['unique_id']}");

if (mysqli_num_rows($sql) > 0) {
  include "./users-data.php";
} else {
  $output = "No users found related to your search key";
}
echo $output;
