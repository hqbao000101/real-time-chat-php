<?php
session_start();

include_once "./config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
  if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
    if (password_verify($password, $row['password'])) {
      $_SESSION['unique_id'] = $row['unique_id'];
      echo "succeed";
    } else {
      echo "Password is incorrect";
    }
  } else {
    echo "Email is incorrect";
  }
} else {
  echo "All input fields are required";
}
