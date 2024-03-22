<html>
<head>
    <title>HomePage</title>
    <link href='https://fonts.googleapis.com/css?family=Bruno Ace SC' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/de5a643238.js" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<header>
    
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="images/headphone-64.png">
            <a href="#" class='logotext'>Earphone Zone</a>
        </div>

        <div class="navbar-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Category</a>
                    <div class="dropdown-content">
                        <a href="#">Earphones</a>
                        <a href="#">Neckbands</a>
                        <a href="#">TWS</a>
                    </div>
                <li><a href="#">Info</a></li>
                <li><a href="LoginForm.php">Login<i class="fa-solid fa-right-to-bracket"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<style>
    header {
    margin: 0;
    padding: 0;
}
body{
    background-color: black;
    color: #FACD3D; 
}

/* Logotext styles */
.logotext {
    text-decoration: none;
    font-size: 2rem;
    font-weight: bolder;
    color: #2CCCC3; 
    font-family: 'Bruno Ace SC', 'sans-serif';
}

/* Navbar styles */
.navbar {
    background-color: black;
    color: #FACD3D; 
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
}

/* Navbar logo styles */
.navbar-logo {
    display: flex;
    align-items: center;
}

.navbar-logo img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

/* Navbar links styles */
.navbar-links ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.navbar-links li {
    font-size: 20px;
    margin-right: 20px;
    display: inline-block;
    position: relative;
}

.navbar-links a {
    text-decoration: none;
    color: #FACD3D; 
    padding: 5px 10px;
}

.navbar-links a:hover {
    color: #2CCCC3; 
}

/* Dropdown styles */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #181818;
    box-shadow: 0px 2px 8px 1px black;
}

.dropdown-content a {
    display: block;
    color: #FACD3D; 
    padding: 5px 15px;
    text-decoration: none;
    transition: all 0.2s;
}

.dropdown-content a:hover {
    transform: translateX(5px);
    color: #2CCCC3; 
}

.dropdown:hover .dropdown-content {
    display: block;
    z-index: 999;
}

/* css for .desc class */
.heading1{
    color: #FACD3D;
}
</style>
</header>

<body>
    <div class="slider"></div>
        <center><video class="vid" autoplay loop muted src="videos\vid.mp4"></video></center>
        <div class="vidBox">
            <div class="box">
                <div class="desc">
                    <p class="heading">The True Beauty of music is that it connects people</p>
                    <p><b>And we believe a Headphone or Earphone is more than just an instrument for sound. It is the key to
                            a mind-blowing moment of emotion, bringing you closer to your favourite artist, and
                            yourself.</b></p>
                </div>
            </div>
        </div>
        <p class="heading1">Start your music journey here</p>
        <center><video class="ads" muted autoplay loop src="videos\ads.mp4"></video></center>
        <div class="number"></div>
        <p class="heading2">Music Lovers with Us</p>
</body>
<footer>
    <?php 
    @include("footer.php");
    ?>
</footer>

</html>