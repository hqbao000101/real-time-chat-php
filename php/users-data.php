<?php
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
