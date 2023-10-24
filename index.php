<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/imgs/favicon.png" type="image/x-icon">
  <title>Realtime Chat Application</title>
  <link rel="stylesheet" href="./style.css" />
  <!-- ! fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <!-- ! form header -->
      <header>Realtime Chat App</header>

      <!-- ! form body -->
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt">This is an error message</div>
        <!-- ! Name -->
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" placeholder="First Name" name="fname" />
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" name="lname" />
          </div>
        </div>
        <!-- ! Email -->
        <div class="field input">
          <label>Email Address</label>
          <input type="text" placeholder="Enter your email" name="email" />
        </div>
        <!-- ! Password -->
        <div class="field input">
          <label>Password</label>
          <input type="password" placeholder="Enter new password" id="sign-up-pass" name="password" />
          <i class="fas fa-eye"></i>
          <i class="fas fa-eye-slash"></i>
        </div>
        <!-- ! Image -->
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" />
        </div>
        <!-- ! Button submit -->
        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>

      <!-- ! form footer -->
      <div class="link">Already signed up? <a href="./pages/login.php">Login now</a></div>

    </section>
  </div>

  <!-- ! JS -->
  <script src="./utils/pass-show-hide.js"></script>
  <script src="./utils/signup.js"></script>
</body>

</html>