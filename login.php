
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #b5d2b5;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            bacground-color: #444;
        }
        nav ul li {
            margin: 0 15px;
        }

        nav ul li a, .nav-button {
            color: #fff;
            text-decoration: none;
        }

        .nav-button {
            background-color: #f4a460;
            border: none;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .nav-button:hover {
            background-color: #e9967a;
        }

        .description-section {
            padding: 20px;
        }
        .description-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .description-text {
            text-align: center;
        }

        .description-text h2 {
            font-size: 32px; /* Increased font size for heading */
            margin-bottom: 20px;
        }

        .description-text p {
            font-size: 20px; /* Increased font size for paragraphs */
            line-height: 1.6;
            margin-bottom: 20px;
            color: #333;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .footer-column {
            flex: 1;
            padding: 0 20px;
        }

        .footer-column h3 {
            margin-top: 0;
        }

        .footer-column p, .footer-column a {
            color: #fff;
            text-decoration: none;
        }

        .footer-column a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1> THE RAJORE CLAN</h1>
    </header>
    <nav>
    <div class="menu-icon" onlick="tonglemenu()">&#9776</div>
    < id="nav-list">
        <li><a href="index.html" onclick="setActive(this)">HOME</a></li>
        <li><a href="parents.php" onclick="setActive(this)">PARENTS</a></li>
        <li><a href="children.php" onclick="setActive(this)">CHILDREN</a></li>
        <li><a href="grandchildren.php" onclick="setActive(this)">GRANDCHILDREN</a></li>
        <li><a href="https://wa.me/+254110626022?text=Hello%2C%20I%20would%20like%20to%20book%20a%20tour%20in%20Othe%20Rajore%20Clan." class="nav-button">LOG IN</a></li>
        </ul>
</nav>
<!-- Description section -->
<section class="description-section">
    <div class="description-container"></div>
    <div class="description-text">
        <h2>About The Rajore Family</h2>
        <p>
            This is a humble family and it's located in Kenya, Siaya County in the Sub-county of Ugenya.

        </p>
        <p>
            This family is located in West-Ugenya ward near Nyalenya Primary School.
        </p>
    </div>
    <div class="description-image">
        <img src="images/family.jpg" alt="description image">
        </div>
    </div>
</section>
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
        
            <p><a href="https://www.instagram.com/rajoreclan?igsh=MWw5bmcyMDNhb25nNw=="><i class="fa fa-instagram"></i> Instagram</a></p>
                <p><a href="https://www.facebook.com/rajore clan?id=61560084388705&mibextid=ZbWKwL"><i class="fa fa-facebook"></i> Facebook</a></p>
                <p><a href="https://www.tiktok.com/the rajoreclan4_t=8maL2capDOQ&_r=1"><i class="fa fa-tiktok"></i> Tiktok</a></p>
                <p><a href="https://x.com/rajoreclan?t=6SXJEL6OiOT-Qq7qtV_K9w&s=09"><i class="fa fa-twitter"></i> Twitter</a></p>
                <p><a href="https://www.youtube.com/rajoreclan?t=6SXJEL6OiOT-Qq7qtV_K9w&s=09"><i class="fa fa-youtube"></i>Youtube</a></p>
                
            </div>
            <div class="footer-column">
                <h3>About Us</h3>
                <p>Physical Address: 232 Nyalenya-Funyula</p>

            </div>
    </div>
    <p>&copy; 2024 THE RAJORE CLAN. All rights reserved.</p>
</footer>
<script src="script.js"></script>
    
</body>
</html>

