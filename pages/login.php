<?php
  include_once "../layouts/header.php";
?>
<body>
  <div class="wrapper">
    <section class="form login">
      <!-- ! form header -->
      <header>Realtime Chat App</header>

      <!-- ! form body -->
      <form action="#">
        <div class="error-txt"></div>
        <!-- ! Email -->
        <div class="field input">
          <label>Email Address</label>
          <input type="text" placeholder="Enter your email" name="email" />
        </div>
        <!-- ! Password -->
        <div class="field input">
          <label>Password</label>
          <input type="password" placeholder="Enter your password" name="password" />
          <i class="fas fa-eye"></i>
          <i class="fas fa-eye-slash"></i>
        </div>
        <!-- ! Button submit -->
        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>

      <!-- ! form footer -->
      <div class="link">Not yet signed up? <a href="../index.php">Register now</a></div>

    </section>
  </div>

  <!-- ! JS -->
  <script src="../utils/pass-show-hide.js"></script>
  <script src="../utils/login.js"></script>
</body>

</html>