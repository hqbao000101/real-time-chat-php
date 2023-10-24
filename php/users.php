<?php
session_start();
include_once "./config.php";

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']}");
$output = "";

if (mysqli_num_rows($sql) == 0) {
  $output = "No users are available to chat now";
} elseif (mysqli_num_rows($sql) > 0) {
  while ($row = mysqli_fetch_assoc($sql)) {
    $curStatus = $row['status'] === "Active now" ? "" : "offline";
    $output .= '<a href="#">
                  <div class="content">
                    <img src="../php/images/' . $row['img'] . '" alt="User Logo">
                    <div class="details">
                      <span>' . $row['fname'] . ' ' . $row['lname'] . '</span>
                      <p>This is text message</p>
                    </div>
                  </div>
                  <div class="status-dot ' . $curStatus . '"><i class="fas fa-circle"></i></div>
                </a>';
  }
  echo $output;
}
