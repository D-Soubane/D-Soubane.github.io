<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Soubane | Physicist</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Blinking 'NEW' styling */
        .new-blink {
            font-weight: bold;
            color: darkred;
            font-size: 0.8em;
            text-transform: uppercase;
            animation: blink 1s infinite;
            position: relative;
            top: -10px; /* Makes it appear as superscript */
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        /* Styling for the visitor info section */
        #visitor-info {
            display: inline-flex;
            align-items: center;
            font-size: 0.9em;
            background-color: #f3f3f3;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 10px;
            text-align: center;
        }

        #visitor-info p {
            margin: 0 8px;
            font-weight: bold;
        }

        /* Flags styling */
        #visitor-info .flags {
            display: flex;
            align-items: center;
        }

        #visitor-info .flags img {
            width: 25px;
            height: 18px;
            margin-left: 5px;
        }

        /* Header and navigation bar styles */
        nav ul {
            display: flex;
            list-style-type: none;
            padding: 0;
            background-color: #0077FF; /* Blue background for nav */
            margin: 0;
        }

        nav ul li {
            padding: 10px 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Banner styles */
        .banner {
            background-color: #0077FF; /* Blue background for banner */
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">About Us</a></li>
                <li><a href="Research.php">Research<span class="new-blink">NEW</span></a></li>
                <li><a href="Teaching.php">Teaching</a></li>
                <li><a href="People.php">People</a></li>
                <li><a href="Pickup.php">Pick-ups & Highlights</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner">
        <h1>Welcome to Prof. Soubane's Research Group</h1>
        <p>FPS-uca.ma</p>
        <p>Tel. :+212 5 24 66 93 57. Fax : +212 5 24 66 95 16</p>
        <p>E-mail: d.soubane(at)uca.ac.ma - driss.soubane(at)inrs.ca</p>
        <p>Expertise in Semiconductors Deposition and Density Functional Theory</p>
        <a href="#" class="btn">Learn More</a>
    </section>

    <!-- Visitor Info Section with Flags -->
    <div id="visitor-info">
        <p>Total Visitors: <?php include 'visitor_counter.php'; ?></p>
        <div class="flags">
            <img src="https://flagcdn.com/w320/ma.png" alt="Morocco">
            <img src="https://flagcdn.com/w320/fr.png" alt="France">
            <img src="https://flagcdn.com/w320/ca.png" alt="Canada">
            <img src="https://flagcdn.com/w320/us.png" alt="USA">
            <img src="https://flagcdn.com/w320/au.png" alt="Australia">
            <img src="https://flagcdn.com/w320/gb.png" alt="United Kingdom">
            <img src="https://flagcdn.com/w320/de.png" alt="Germany">
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Dr. Soubane. All rights reserved.</p>
    </footer>
</body>
</html>