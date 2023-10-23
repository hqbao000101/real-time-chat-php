<?php
  $db_host = "localhost";
  $db_username = "root";
  $db_pass = "";
  $db_name = "real-time-chat-php";

  try {
    $conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
  } catch (mysqli_sql_exception) {
    echo "Failed to connect <br>";
    echo "Error: " . mysqli_connect_error();
  }
