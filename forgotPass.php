<?php
session_start();
include("connection.php");

if (isset($_POST['reset_request'])) {
  $email = $_POST['email'];
  $user_id = $_POST['user_id'];

  $result = mysqli_query($conn,"SELECT * FROM users1 WHERE email='$email' AND id='$user_id'");

  if (mysqli_num_rows($result) > 0) {
      $temp_password = bin2hex(random_bytes(12));
      mysqli_query($conn,"UPDATE users1 SET password='$temp_password' WHERE email='$email'");

      $message = "Your temporary password is: $temp_password";
  } else {
      $message = "Invalid email or user ID.";
  }
}

?>

<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Bruno Ace SC' rel='stylesheet'>
    <script src="jquery.js"></script>
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <span class="loginTitle">Forgot Password</span>
            <form action="" method="post">
                <!-- Error message display -->
                <?php if (isset($message)): ?>
                    <div class="error-message">
                        <?php echo $message; ?>
                        <button type="button" class="close-btn" onclick="hideMessage()">&times;</button>
                    </div>
                <?php endif; ?>

                <div class="inputForm">
                    <input type="text" placeholder="Enter your email" name="email" required>
                </div>
                <div class="inputForm">
                    <input type="text" placeholder="Enter your user id" name="user_id" required>
                </div>
                <div class="loginBtn">
                    <input type="submit" name="reset_request" value="Check">
                </div>
            </form>
            <div class="signup">
                <span>Not a member?
                    <a href="loginForm.php">Login</a>
                </span>
            </div>
        </div>
    </div>

    <script>
        function hideMessage() {
            var errorMessage = document.querySelector('.error-message');
            errorMessage.style.display = 'none';
        }
    </script>
</body>


</html>
<style>
body {
  justify-content: center;
  background-color: #181818; /* Charcoal */
  display: flex;
  height: 100vh;
  align-items: center;
}

.container {
  max-width: 430px;
  width: 100%;
  border-radius: 11px;
  background-color: #ffffff; /* White */
  box-shadow: 0 5px 10px #000000; /* Black */
  position: relative;
}

* {
  margin: 0;
  padding: 0;
}

.container .form {
  padding: 30px;
}

.container .form .loginTitle {
  position: relative;
  font-weight: bolder;
  font-size: 35px;
  font-family: 'Bruno Ace SC', 'sans-serif';
  color: black;
}

.form .loginTitle::before {
  border-radius: 20px;
  height: 3px;
  width: 30px;
  left: 0;
  bottom: 0;
  background-color: #2CCCC3; /* Light Turquoise */
  content: '';
  position: absolute;
}

.form .inputForm {
  margin-top: 30px;
  position: relative;
  height: 50px;
  width: 100%;
}

.inputForm input {
  outline: none;
  height: 100%;
  position: absolute;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ccc;
  border-top: 2px solid transparent;
  color: #000000; /* Black */
  background-color: #ffffff; /* White */
}

.form .loginBtn input {
  height: 30px;
  font-weight: bold;
  border: none;
  width: 100%;
  border-bottom: 2px solid #ccc;
  border-top: 2px solid transparent;
  outline: none;
  transition: all 0.4s ease;
  border-radius: 10px;
  background-color: #FACD3D; /* Yellow */
  color: #000000; /* Black */
}

.loginBtn {
  padding: 10px 0px 10px 0px;
}

.signup a {
  text-decoration: none;
  color: #5626C4; /* Purple */
}

.form .loginBtn input:hover {
  background-color: #5626C4; /* Purple */
  color: #ffffff; /* White */
}

.signup a:hover {
  text-decoration: underline;
  color: #E60576; /* Magenta */
}

.form .signup {
  text-align: center;
}

    </style>