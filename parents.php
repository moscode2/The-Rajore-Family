<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial,sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dcb765;
        }
        header {
            background-color: #b5d2b5;
            color: white;
            padding: 1 rem;
            text-align: left;
        }
        nav ul {
            list-style: none;
            margin: 0px;
            display: flex;
            justify-content: flex-end;
        }
        nav ul li a {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .hero {
            background: url("images/main view.jpg") no-repeat center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }
        .hero h1 {
            font-size: 40px;
            margin: 0;
        }

        .container {
            padding: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        </style>
        </head>
        <body>
            <header>
                <h1>THE RAJORE FAMILY</h1>
            </header>
            </body>
            <nav>
            <div class="menu-icon" onlick="tonglemenu()">&#9776</div>
    <ul id="nav-list">
        <li><a href="index.html" onclick="setActive(this)">HOME</a></li>
        <li><a href="parents.php" onclick="setActive(this)">PARENTS</a></li>
        <li><a href="children.php" onclick="setActive(this)">CHILDREN</a></li>
        <li><a href="grandchildren.php" onclick="setActive(this)">GRANDCHILDREN</a></li>
        <li><button class="nav-button">Book </button></li>
        </ul>
            </nav>
    </div>
            <div class="parents">
                <h1>PARENT'S WEBSPACE</h1>
            </div>
            <div class="container">
                <!-- About section -->
                <section class="about section">
                    <div class="about">
                        <div class="about-item">
                            <img src="images/dragon.jpg" alt="family photo">
                            <h2>The Roots of the family</h2>
                            <p>The two parents over here are the reason this family is active and productive.</p>

                        </div>
                    </div>

                </section>

            </div>
            <!-- Footer section -->
            <footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Contact Us</h3>
            <p>Address:232 Funyula</p>
            <p>Contact Number: +2547897652398</p>
            <p>Email Us:info@example.com</p>
        </div>
    <div class="footer-column">
        <h3>Follow Us</h3>
        
        <p><a href="https://www.instagram.com/rajore family?igsh=MWw5bmcyMDNhb25nNw=="><i class="fa fa-Instagram"></i>Instagram</a></p>
                <p><a href="https://www.facebook.com/rajore family?id=61560084388705&mibextid=ZbWKwL"><i class="fa fa-Facebook"></i>Facebook</a></p>
                <p><a href="https://www.tiktok.com/rajore family4_t=8maL2capDOQ&_r=1"><i class="fa fa-Tiktok"></i>Tiktok</a></p>
                <p><a href="https://x.com/rajore family?t=6SXJEL6OiOT-Qq7qtV_K9w&s=09"><i class="fa fa-X"></i>X</a></p>
                <p><a href="https://www.youtube.com/rajore family?t=6SXJEL6OiOT-Qq7qtV_K9w&s=09"><i class="fa fa-Youtube"></i>You Tube</a></p>
                 
            </div>
            <div class="footer-column">
                <h3>About Us</h3>
                <p>Physical Address: 232 Nyalenya-Funyula</p>
                </div>

            <p>&copy; 2024 THE RAJORE CLAN.All rights reserved</p>
    </footer>
        <script src="script.js"></script>
    </body>
        </html>
