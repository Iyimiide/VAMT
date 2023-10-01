<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      /* Style for the logo container */
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

        /* Reset some default styling */
        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            animation: colorChange 10s infinite alternate;
        }

        @keyframes colorChange {
            0% { background-color: #f4e7d2; } /* Warm beige */
            50% { background-color: #c85a54; } /* Wine red */
            100% { background-color: #f4e7d2; } /* Back to warm beige */
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
/* Responsive styles */
@media screen and (max-width: 768px) {
    /* Slideshow container styles */
   .slideshow-container {
        max-width: 100%;
    }
        position: relative;
            max-width: 1000px;
            margin: auto;
        }

        .slide {
            display: none;
            text-align: center;
        }

        img {
            max-width: 50%;
            height: auto;
            display: block;
            margin: auto;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
        }

        .next {
            right: 10px;
        }

        .prev {
            left: 10px;
        }


        .redirect-link {
            text-align: center;
            margin-top: 20px;
        }

        .redirect-link a {
            background-color: #66ccff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .areas-of-work {
            padding: 40px;
            text-align: center;
            color: #333;
        }

        .work-area {
            position: relative;
        }

        .work-area h3 {
            cursor: pointer;
        }

        .work-area p {
            display: none;
            padding: 10px;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 1;
        }

        .work-area:hover p {
            display: block;
        }

        .foundation-events {
            padding: 40px;
            text-align: center;
            color: #333;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .event {
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .event h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .event p {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .event-description {
            font-size: 14px;
            color: #777;
        }
        /* Styles for the Associations We Partner With section */
.associations {
    background-color: white;
    padding: 40px 0;
    text-align: center;
}

.associations h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.association-logo {
    display: inline-block;
    margin: 0 20px; /* Adjust spacing between logos */
}

.association-logo img {
    max-width: 100px; /* Adjust the maximum width of the logos */
    height: auto;
}

        .foundation-stats {
            background-color: white;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            font-weight: bold;
        }

        .foundation-stats div {
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
        }

        /* Responsive styles */
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
                        <li><a href="gallery.html">Gallery</a></li>
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
      <p>&copy; 2023 VAMT. All rights reserved.</p>
    </footer>
  </body>
</html>
