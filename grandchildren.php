<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #dcb765;
    }
    header {
            background-color: #b5d2b5;
            color: white;
            padding: 1rem;
            text-align: left;
        }

        nav {
            background-color: #444;
            color: white;
            text-align: center;
            position: relative;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: right;
            flex-wrap: wrap;
        }

        nav li {
            display: inline;
            margin: 0 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-button {
            background-color: #f56a79;
            color: white;
            border: none;
            padding: 17px 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .menu-icon {
            display: none;
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
        }

        @media screen and (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
                background-color: #444;}

            nav ul.show {
                display: flex;
            }

            nav li {
                display: block;
                margin: 10px 0;
            }

            .menu-icon {
                display: block;
            }
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
    </head>
    <body>
<header>
<h1>THE RAJORE FAMILY</h1>
</header>
<nav>
<div class="menu-icon" onlick="tonglemenu()">&#9776</div>
    <ul id="nav-list">
        <li><a href="index.html" onclick="setActive(this)">HOME</a></li>
        <li><a href="parents.php" onclick="setActive(this)">PARENTS</a></li>
        <li><a href="children.php" onclick="setActive(this)">CHILDREN</a></li>
        <li><a href="grandchildren.php" onclick="setActive(this)">GRANDCHILDREN</a></li>
        <li><a href="https://wa.me/+254110626022?text=Hello%2C%20I%20would%20like%20to%20book%20a%20tour%20with%20the%20Rajore%20family." class="nav-button">Book</a></li>
        </ul>
        </nav>
        <div class="container">
            <div class="section">
                <h2>GRANDCHILDREN'S WEBSPACE</h2>
                <div class="Children">
                    <div class="Henry's Sons">
                        <h3>LEON & LIAM</h3>
                        <p>They look like twins but its not</p>
                        <img src="images/leon.PNG" alt="Description image">
                    </div>
                    <div class="Children">
                        <div class="Linnet's Doughters">
                            <h3>HADRIAN & FAVOUR</h3>
                            <img src="images/jollin.jpg" alt="description image">
                        </div>
                        <class="Children">
                            <div class="Ann's Son">
                         <h3>AIDEN</h3> 
                         <img src="images/aiden.jpg" alt="description image">   
                            </div>
                            <div class="Children">
                                <div class="Emmaculate's Children">
                                    <h3>TALIA & TAIRAN</h3>
                                    <img src="images/talia.jpg" alt="description image">
                                </div>
    </div>
    <div class="Children">
        <div class="Selline's Children">
<h3>STANLEY & AURELLIA</h3>
<img src="" alt="">
    </div>
            </div>
    </section>
    </div>
        <!-- Footer Section -->
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
    </div>
    <p>&copy; 2024 THE RAJORE FAMILY. All rights reserved.</p>
</footer>
<script src="script.js"></script>
    
 </body>
 </html>