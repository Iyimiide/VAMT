<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
.logo-container {
            display: flex;
            align-items: center; /* Center the logo vertically */
            padding: 10px 20px; /* Add padding around the logo */
        }
        /* Style for the logo image */
        .logo {
            width: 100px; /* Adjust the width as needed */
            height: auto; /* Automatically adjust the height while maintaining aspect ratio */
            margin-right: 20px; /* Add spacing between logo and navigation items */
        }
header {
    background-color: white; /* Change the background color to white */
    color: darkgoldenrod; /* Change the font color to dark gold */
    padding: 10px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header a {
    color: darkgoldenrod; /* Change link color to dark gold */
    text-decoration: none;
    transition: color 0.3s;
}

header a:hover {
    color: #66ccff;
}

header ul {
    list-style: none;
    display: flex;
    align-items: center;
}

header li {
    margin: 0 15px;
    position: relative; /* Add this line for dropdown positioning */
}

/* Dropdown menu styles */
ul.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #333;
    border-top: 2px solid #66ccff;
    z-index: 1;
    min-width: 150px;
}

nav li:hover > ul.dropdown-menu {
    display: block;
}

ul.dropdown-menu li {
    margin: 0;
}

ul.dropdown-menu a {
    color: white;
    padding: 10px;
    display: block;
    text-decoration: none;
    transition: background-color 0.3s;
}

ul.dropdown-menu a:hover {
    background-color: #66ccff;
}


        
        /* Additional styles for a fancy look */
        .redirect-link a {
            background-color: #66ccff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .redirect-link a:hover {
            background-color: #ff3366;
        }
         /* Footer styles */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-content p {
            margin: 0;
        }

        .footer-content ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .footer-content a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-content a:hover {
            color: #66ccff;
        }
    </style>
    <title>VAMT Charity</title>
</head>
<body>
    <header>
           <div class="logo-container">
        <img src="Assets/logo1.png" alt="VAMT Charity Logo" class="logo">
    </div>
    <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="our-works.html">Our Projects</a></li>
                <li>
                    <a href="who-we-are.html">About Us &#9662;</a>
                    <ul class="dropdown-menu">
                        <li><a href="#about">About VAMT Charity</a></li>
                        <li><a href="#team">Meet Our Team</a></li>
                        <li><a href="#mission">Our Mission</a></li>
                        <li><a href="#money">Where the Money Goes</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                    </li>        
                <li><a href="donations.html">Donate</a></li>
                <li><a href="login.php">Admin</a></li>
                <li><a href="contact.html">Contact Us</a></li>
        </nav>
    </header>
    <main>
      <h1>WELCOME</h1>
      <h2>This is your Admin account</h2>
      <p> Your Admin priviledges are:.... </p>
    </main>
   <footer>
    <section class="footer-content">
        <p>&copy; 2023 VAMT Charity. All rights reserved.</p>
        <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms-of-use.html">Terms of Use</a></li>
            <!-- Add the logout button here -->
            <li><a href="logout.php">Logout</a></li> <!-- Adjust the URL to match your logout page -->
        </ul>
    </section>
</footer>
  </body>
</html>
