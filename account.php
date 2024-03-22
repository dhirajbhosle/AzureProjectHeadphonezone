<?php
session_start();
$user_id = $_SESSION['userid'];
if (!isset($user_id)) {
    header('location: LoginForm.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Account</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: #E1E2E2; /* Light Silver */
        }

        .navbar {
            background-color: #181818; /* Black */
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2;
            display: flex;
            justify-content: center; /* Center the elements horizontally */
        }

        .navbar a {
            float: left;
            color: #E1E2E2; /* Light Silver */
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #2CCCC3; /* Light Turquoise */
            color: #000000; /* Black */
        }

        .main {
            position: fixed;
            top: 100px;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            color: #E60576; /* Magenta */
            z-index: 1;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="welcome.php" target="_self">HOME</a>
        <a href="myorders.php" target="_self">MY ORDERS</a>
        <a href="profile.php" target="_self">MY PROFILE</a>
        <a href="password.php" target="_self">CHANGE PASSWORD</a>
        <a href="logout.php">LOGOUT</a>
    </div>

    <div class="main">
        <h2>Hello <?php echo $_SESSION['userfname']; ?></h2>
    </div>
</body>

</html>
