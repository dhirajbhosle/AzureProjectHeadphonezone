<?php
@include('connection.php');
session_start();
$name = $_SESSION['adminname'];
?>
<?php
if (isset($display_msg)) {
    foreach ($display_msg as $display_msg) {
        echo "
        <div id='messageBox'>
          <span class='closeButton' onclick='this.parentElement.remove()'>&times;</span>
          <p>$display_msg</p>
        </div>
";
    }
}
?>
<html>

<head>
    <title>Admin Panel</title>
    <link href='https://fonts.googleapis.com/css?family=Bruno Ace SC' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin_page.css">
    <link rel="stylesheet" href="css/adminProduct.css">

    <script src="jquery.js"></script>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <h2><span><img onclick="closeNav()" src="images/headphone-64.png" width="50px" alt="logo"></span>Earphone Zone</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="#" class="active"><span class="lab la-buromobelexperte"></span><span>Dashboard</span></a></li>
                <li><a href="#"><span class="las la-user-circle"></span><span>Accounts</span></a></li>
                <li><a href="#"><span class="las la-comment-dots"></span><span>Messages</span></a></li>
                <li><a href="admin_product.php"><span class="lab la-product-hunt"></span><span>Products</span></a></li>
                <li><a href="#orders_spacing"><span class="las la-shopping-bag"></span><span>Orders</span></a></li>
                <li><a href="logout.php"><span class="las la-sign-in-alt"></span><span>Logout</span></a></li>
            </ul>
        </div>
    </div>
    <script>
        let list = document.querySelectorAll(".sidebar-menu li a");
        list.forEach(item => {
            item.addEventListener('click', () => {
                document.querySelector('.active')?.classList.remove('active');
                item.classList.add('active');

            });
        });
    </script>
</body>
</html>