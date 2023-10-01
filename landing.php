<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>VAMT</title>
          <style>
/* CSS for logo */
#logo {
    height: 90px;
    width: 180px;
    float: left;
}

/* CSS for body */
body {
        background-image: url("Assets/landing.jpg");
        background-size: cover;
        background-position: center;
        background-color: white;
}

/* CSS for header */
header {
  background-color: white;
  color: Black;
  padding: 20px;
}

/* CSS for logo */
.logo {
  font-size: 2em;
  font-weight: bold;
  text-transform: uppercase;
}

/* CSS for navigation menu */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 10px;
}

nav ul {
  list-style-type: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav li {
  margin-right: 20px;
}

nav a {
  color: Black;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
}

/* CSS for main content */
main {
  margin-top: 20px;
}

/* CSS for footer */
footer {
  background-color: grey;
  color: white;
  padding: 20px;
  text-align: center;
}
        </style>
     </head>
    <body>
      <header>
        <img src="Assets/logo1.png" alt="VAMT Charity Logo" class="logo">
        <nav>
              <ul>
                  <li> <a href="index.php">Home</a></li>
                  <li> <a href="logout2.php">Logout/a></li>
                  <li> <a href="index.php">Add listing</a></li>
                  <li> <a href="delete.php">Remove Post</a></li>
                  <li> <a href="deactivate.php">Delete User</a></li>
              </ul>
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
