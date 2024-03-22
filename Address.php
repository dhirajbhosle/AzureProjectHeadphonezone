<?php
session_start();
@include('connection.php');
$user_id = $_SESSION['userid'];
if(!isset($user_id)){
	header('location: LoginForm.php');
}
if(isset($_POST['submit'])){
    $addr = $_POST['address'];
    $lm = $_POST['landmark'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pc = $_POST['pin'];
    $_SESSION['address']=$addr;
    $_SESSION['landmark']=$lm;
    $_SESSION['city']=$city;
    $_SESSION['state']=$state;
    $_SESSION['pincode']=$pc;
    
    $ad= $addr .','.' near ' . $lm .', '. $city . ', '. $state . ', '. $pc;  
    $sql = mysqli_query($conn, "UPDATE users1 SET address='$ad' WHERE id=$user_id") or die('query failed');
}
?>
<html>
<body id="body">
    <button id="main" style="cursor:pointer" onclick="openNav()">hi</button>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="container">
            <h2 class="title">Address Form</h2>
            <form method="post" class="address-form">
                <label for="Address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="landmark">LandMark:</label>
                <input type="text" id="landmark" name="landmark" required>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>

                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>

                <label for="pin">PIN Code:</label>
                <input type="text" id="pin" name="pin" required>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
<script>
    const body = document.getElementById("body");

    function openNav() {
        document.getElementById("mySidenav").style.width = "500px";
        body.classList.add("blur-background");
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        body.classList.remove("blur-background");
    }
</script>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
        padding: 20px;
        color: white;
    }

    .title {
        margin-bottom: 20px;
    }

    .address-form {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    label {
        display: block;
        width: 100%;
        text-align: left;
        margin-bottom: 5px;
    }

    input[type="text"] {
        color: black;
        border: 2px solid #fff;
        border-radius: 5px;
        padding: 8px;
        margin-bottom: 10px;
        width: 100%;
    }

    button {
        background-color: blue;
        color: #000;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #333;
    }

    /* Animation Effects */
    .container {
        animation: fadeIn 1s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* siderbar css starts */

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        
    }


    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    /* siderbar css ends here */
    .blur-background {
        backdrop-filter: blur(5px) brightness(0.5);
    }
</style>