<?php
// Include the configuration file
require 'config.php';

// Insert sample data into gallery_images table
$sql_insert_gallery_data = "
INSERT INTO gallery_images (image_path, description)
VALUES
    ('Assets/gm&gp.jpeg', 'Description 1'),
    ('Assets/wg8.jpeg', 'Description 2'),
    ('Assets/wg6.jpeg', 'Description 3')
";

if ($conn->query($sql_insert_gallery_data) === TRUE) {
    echo "Data inserted into 'gallery_images' table successfully.<br>";
} else {
    echo "Error inserting data into 'gallery_images' table: " . $conn->error . "<br>";
}

// Display images from gallery_images table
$sql_select_gallery_images = "SELECT * FROM gallery_images";
$result = $conn->query($sql_select_gallery_images);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
        /* Center the slideshow */
        .slideshow-container {
            max-width: 100%;
            margin: auto;
            text-align: center;
        }

        /* Minimize the images in the gallery and display them as icons side by side */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 20px;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            width: 50px; /* Adjust the size as needed */
            height: 50px; /* Adjust the size as needed */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover {
            transform: scale(1.1); /* Enlarge the icon on hover */
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .image-container:hover .image-overlay {
            opacity: 1;
        }

        .image-overlay h2 {
            color: white;
            font-size: 24px;
            text-align: center;
            margin: 0;
            padding: 10px;
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
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                    </li>        
                <li><a href="donations.html">Donate</a></li>
                <li><a href="login.php">Admin</a></li>
                <li><a href="contact.html">Contact Us</a></li>
        </nav>
    </header>
    <?php
    if ($result->num_rows > 0) {
        echo "<div class='gallery'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='image-container'>";
            echo "<img src='" . $row['image_path'] . "' alt='" . $row['description'] . "'>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "No images found in the gallery.";
    }
    ?>
<main>
      <h1>WELCOME</h1>
      <h2>This is your Admin account</h2>
      <p> Your Admin priviledges are:.... </p>
    </main>
    <footer>
      <p>&copy; 2023 VAMT. All rights reserved.</p>
    </footer></body>
</html>
