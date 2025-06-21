<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donate</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="logo">Donate <b style="color: #06C167;">Food</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <!-- Updated links to point to sections using IDs -->
                <li><a href="#about-section">About</a></li>
                <li><a href="#contact-section">Contact</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="Login_.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- JavaScript for hamburger menu toggle -->
    <script>
        const hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            const navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>

    <!-- Banner section -->
    <section class="banner">
    </section>

    <!-- Main Content section -->
    <div class="content">
        <p style="font-size: 23px;">
            “Cutting food waste is a delicious way of saving money, helping to feed the world and protect the planet.” 
        </p>
    </div>

    <!-- Photo Gallery section -->
    <div class="photo">
        <p class="heading">Our Works</p>
        <p style="font-size: 28px; text-align: center;">"Look what we can do together."</p>
        <div class="wrapper">
          <div class="box"><img src="img/p1.jpeg" alt=""></div>
          <div class="box"><img src="img/p4.jpeg" alt=""></div>
          <div class="box"><img src="img/p3.jpeg" alt=""></div>
        </div>
    </div>

    <!-- Footer with 'About' and 'Contact' sections -->
    <footer class="footer">
        <!-- 'About' Section (add an ID to link) -->
        <div id="about-section" class="footer-left col-md-4 col-sm-6">
          <p class="about">
            <span>About us</span> The basic concept of this project, Food Waste Management, is to collect the excess/leftover food from donors such as hotels, restaurants, marriage halls, etc., and distribute it to needy people.
          </p>
        </div>
        
        <!-- 'Contact' Section (add an ID to link) -->
        <div id="contact-section" class="footer-center col-md-4 col-sm-6">
          <div>
            <p><span>Contact</span> </p>
          </div>
          <div>
            <p>(+91) 00000 00000</p>
          </div>
          <div>
            <p><a href="#">batchno.4@gmail.com</a></p>
          </div>
          <div class="sociallist">
            <ul class="social">
                <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
                <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
                <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
                <li><a href="#"><i class="fa fa-whatsapp" style="font-size:50px;color: black;"></i></a></li>
            </ul>
          </div>
        </div>

        <!-- Footer Right Section -->
        <div class="footer-right col-md-4 col-sm-6">
          <h2> Donate<span> Food</span></h2>
          <p class="menu">
            <a href="#">Home</a> |
            <a href="#about-section">About</a> |
            <a href="adminprofile.php">Profile</a> |
            <a href="#contact-section">Contact</a>
          </p>
          <p class="name">Food Donate &copy; 2024</p>
        </div>
    </footer>
</body>
</html>
