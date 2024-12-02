<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Siddharth Sharma</h1>
            <!-- Hamburger Menu Icon -->
            <div class="menu-icon" id="menu-icon">☰</div>
            <!-- Add id to the nav element -->
            <nav id="navbar">
                <ul class="nav-links" id="nav-links">
                    <li><a href="#index">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#project">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <script>
        // Select the menu icon and navbar
        const menuIcon = document.getElementById('menu-icon');
        const navbar = document.getElementById('navbar');

        // Add event listener to toggle menu visibility
        menuIcon.addEventListener('click', function() {
            navbar.classList.toggle('active'); // Add/remove the 'active' class to toggle the menu
            
        });
    </script>
</body>
</html>
