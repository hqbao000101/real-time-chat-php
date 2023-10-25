<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("Location: ./login.php");
}
?>
<?php
include_once "../layouts/header.php";
?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        include_once "../php/config.php";
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        }
        ?>
        <a href="./users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../php/images/<?= $row['img'] ?>" alt="User Logo" />
        <div class="details">
          <span><?= $row['fname'] . ' ' . $row['lname'] ?></span>
          <p><?= $row['status'] ?></p>
        </div>
      </header>
      <div class="chat-box">
        <!-- ! chat content will be fetched from chat.js and get-chat.php -->
      </div>
      <form action="#" class="typing-area" autocomplete="off">
        <input type="hidden" name="outgoing_id" value="<?= $_SESSION['unique_id'] ?>">
        <input type="hidden" name="incoming_id" value="<?= $user_id ?>">
        <input type="text" name="message" placeholder="Type a message here..." class="input-field" />
        <button><i class="fa-solid fa-paper-plane"></i></button>
      </form>
    </section>
  </div>

  <!-- ! JS -->
  <script src="../utils/chat.js"></script>
</body>

</html>