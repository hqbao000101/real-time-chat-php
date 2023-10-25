<?php
while ($row = mysqli_fetch_assoc($sql)) {
  $curStatus = $row['status'] === "Active now" ? "" : "offline";

  $sql3 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']} OR outgoing_msg_id = {$row['unique_id']}) ORDER BY msg_id DESC LIMIT 1";
  $query3 = mysqli_query($conn, $sql3);
  if (mysqli_num_rows($query3) > 0) {
    $row3 = mysqli_fetch_assoc($query3);
    if ($row3['outgoing_msg_id'] == $outgoing_id) {
      $result = "You: " . $row3['msg'];
    } else {
      $result = $row3['msg'];
    }
  } else {
    $result = "No message available";
  }

  (strlen($result) > 30) ? $msg = substr($result, 0, 30) . "..." : $msg = $result;

  $output .= '<a href="./chat.php?user_id=' . $row['unique_id'] . '">
                <div class="content">
                  <img src="../php/images/' . $row['img'] . '" alt="User Logo">
                  <div class="details">
                    <span>' . $row['fname'] . ' ' . $row['lname'] . '</span>
                    <p>' . $msg . '</p>
                  </div>
                </div>
                <div class="status-dot ' . $curStatus . '"><i class="fas fa-circle"></i></div>
              </a>';
}
