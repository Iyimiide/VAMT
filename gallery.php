<?php
// Include the configuration file
require 'config.php';

// Function to upload an image
function uploadImage($file)
{
    // Specify the target directory for uploading images
    $targetDir = "Assets/";

    // Generate a unique filename for the uploaded image
    $uniqueFilename = uniqid() . '_' . basename($file["name"]);
    $targetFilePath = $targetDir . $uniqueFilename;

    // Check if the file is a valid image
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $allowedExtensions)) {
        // Upload the image to the target directory
        if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
            return $targetFilePath;
        } else {
            return false; // Error uploading the image
        }
    } else {
        return false; // Invalid file type
    }
}

// Check if the form for uploading an image is submitted
if (isset($_POST["upload"])) {
    if ($_FILES["image"]["error"] === 0) {
        // Upload the image
        $imagePath = uploadImage($_FILES["image"]);

        if ($imagePath) {
            // Insert the uploaded image path into the gallery_images table
            $description = $_POST["description"];
            $sqlInsertImage = "INSERT INTO gallery_images (image_path, description) VALUES ('$imagePath', '$description')";

            if ($conn->query($sqlInsertImage) === TRUE) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error inserting image into the database: " . $conn->error;
            }
        } else {
            echo "Error uploading image. Please make sure it is a valid image file.";
        }
    } else {
        echo "Error uploading image. Please try again.";
    }
}

// Check if the form for deleting an image is submitted
if (isset($_POST["delete"])) {
    $imageId = $_POST["image_id"];
    $sqlDeleteImage = "DELETE FROM gallery_images WHERE id = $imageId";

    if ($conn->query($sqlDeleteImage) === TRUE) {
        echo "Image deleted successfully.";
    } else {
        echo "Error deleting image from the database: " . $conn->error;
    }
}

// Display images from gallery_images table
$sqlSelectGalleryImages = "SELECT * FROM gallery_images";
$result = $conn->query($sqlSelectGalleryImages);
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
            </style>
<title>Gallery dashboard</title>
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
<form action="" method="post" enctype="multipart/form-data">
    <label for="image">Upload Image:</label>
    <input type="file" name="image" id="image" required>
    <label for="description">Description:</label>
    <input type="text" name="description" id="description" required>
    <button type="submit" name="upload">Upload</button>
</form>

<!-- Display images and provide delete functionality -->
<div class="gallery">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='image-container'>";
            echo "<img src='" . $row['image_path'] . "' alt='" . $row['description'] . "'>";
            echo "<div class='image-overlay'>";
            echo "<h2>" . $row['description'] . "</h2>";
            echo "<form action='' method='post'>";
            echo "<input type='hidden' name='image_id' value='" . $row['id'] . "'>";
            echo "<button type='submit' name='delete'>Delete</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No images found in the gallery.";
    }
    ?>
</div>
