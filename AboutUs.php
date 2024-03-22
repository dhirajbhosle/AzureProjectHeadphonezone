<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Earphones Co.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: poppins;
        }

        body {
            min-height: 100vh;
            background-color: black;
            color: #E1E2E2;
        }

        #about-section {
            width: 80%;
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
            padding: 100px 0;
        }

        .about-left img {
            width: 100%;
            max-width: 420px;
            height: auto;
            transform: translateY(50px);
        }

        .about-right {
            width: 54%;
        }

        .about-right ul li {
            display: flex;
            align-items: center;
        }

        .about-right h1 {
            color: cyan;
            font-size: 37px;
            margin-bottom: 5px;
        }

        .about-right p {
            color: #E1E2E2;
            /* Light Silver */
            line-height: 26px;
            font-size: 15px;
        }

        .about-right .address {
            margin: 25px 0;
        }

        .about-right .address ul li {
            margin-bottom: 5px;
        }

        .address .address-logo {
            margin-right: 15px;
            color: cyan;
        }

        .address .saprater {
            margin: 0 35px;
        }

        .about-right .expertise ul {
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .expertise h3 {
            margin-bottom: 10px;
        }

        .expertise .expertise-logo {
            font-size: 19px;
            margin-right: 10px;
            color: cyan;
        }
    </style>
</head>

<body>
    <section id="about-section">
        <!-- About left  -->
        <div class="about-left">
            <img src="images/contact_bg1.png" alt="About EarphoneZone" />
        </div>

        <!-- About right  -->
        <div class="about-right">
            <h4>Our Journey</h4>
            <h1>About EarphoneZone</h1>
            <p>EarphoneZone is committed to providing an unparalleled audio experience for all music enthusiasts.
                We seamlessly integrate cutting-edge technology with elegant design to offer earphones that deliver
                unmatched sound quality and comfort.</p>
            <div class="address">
                <ul>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <p>Address</p>
                        <span class="saprater">:</span>
                        <p>123 Sound Street, Cityville, EarphoneLand</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <p>Contact</p>
                        <span class="saprater">:</span>
                        <p>+1 123-456-7890</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="far fa-envelope"></i>
                        </span>
                        <p>Email</p>
                        <span class="saprater">:</span>
                        <p>info@earphonesco.com</p>
                    </li>
                </ul>
            </div>
            <div class="expertise">
                <h3>Our Expertise</h3>
                <ul>
                    <li>
                        <span class="expertise-logo">
                            <i class="fas fa-headphones"></i>
                        </span>
                        <p>Audio Quality</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fas fa-microphone"></i>
                        </span>
                        <p>Clear Communication</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fas fa-battery-full"></i>
                        </span>
                        <p>Long Battery Life</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fas fa-tachometer-alt"></i>
                        </span>
                        <p>Sleek Design</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <?php @include('footer.php');
        ?>
    </footer>
</body>

</html>