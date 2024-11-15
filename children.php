<!DOCTYPE html>
<html lang="eng">
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
        <li><button class="nav-button">Book </button></li>
        </ul>
    </nav>
    <div class="container">
        <section class="section">
            <h2>CHILDREN'S WEBSPACE</h2>
            <div class="Children">
                <div class="Henry & Liz">
            <h3>HENRY & LIZ</h3>
            <p>They are the eldest,relocated to Germany as a whole family.</p>
            <img src="images/ericko.jpg" alt="description photo">
            </div>
            <div class="Linnet">
            <h3>LINNET </h3>
            <p>She is the second born, also a professional primary school teacher</p>
            <img src="images/linnet.jpg" alt="My photo">
            </div>
            <div class="Ann ">
            <h3>ANN </h3>
            <p>The third born,she is a proffesional lab technician</p>
            <img src="images/ann.jpg" alt="my photo">
            </div>
            <div class="Emmaculate">
            <h3>EMMACULATE </h3>
            <p>The fourth born,She is a secondary school teacher </p>
            <img src="" alt="">
            </div>
            <div class="Selline">
            <h3>SELLINE</h3>
            <p>She is the fifth child, also a secondary school teacher</p>
            <img src="" alt="">
            </div>
            <div class="Moses">
            <h3>MOSES</h3>
            <p> The sixth born,studied computer science </p>
            <img src="images/moises.JPG" alt="Moises Photo">
            </div>
            <div class="David">
            <h3>DAVID</h3>
            <p>Second last in the family, studied IT</p>
            <img src="images/davido.jpg" alt="David's photo">
            </div>
            <div class="Calisto">
            <h3>CALISTO</h3>
            <p>The last born, still in primary school</p>
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