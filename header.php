<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vlam en Vlees restaurant">
    <meta name="keywords" content="HTML, meta tags, voorbeeld, webontwikkeling">
    <meta name="author" content="Marijn Husslage, Rami">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            transition: background-color 0.3s, color 0.3s;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white; /* Standaard lichte achtergrond */
            color: black; /* Standaard zwarte tekst */
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background: #333; /* Donkere achtergrond voor header */
            color: white; /* Witte tekst in de header */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%; /* Ensure header does not extend beyond viewport */
            box-sizing: border-box; /* Include padding in width calculation */
        }

        .logo {
            height: 50px;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            text-decoration: none;
            color: white; /* Witte tekst in de header */
            font-weight: bold;
            padding: 8px 12px;
        }

        /* Hamburger menu stijlen */
        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            list-style: none;
            padding: 0;
        }

        /* Mobile styling */
        @media (max-width: 768px) {
            nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background: #333; /* Donkere achtergrond voor het menu */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
            }

            nav a {
                display: block;
                padding: 12px;
                text-align: center;
                border-bottom: 1px solid #ddd;
            }

            .menu-toggle {
                display: block;
            }

            .nav-active {
                display: flex;
            }
        }

        /* Donkere modus stijlen */
        .dark-mode {
            background-color: #121212; /* Donkere achtergrond voor de pagina */
            color: white; /* Witte tekst in donkere modus */
        }

        .dark-mode header {
            background: #333; /* Donkere achtergrond voor de header in donkere modus */
        }

        .dark-mode .toggle-btn {
            background: #444;
            color: white;
        }

        .toggle-btn {
            background: white;
            border: none;
            border-radius: 25px;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 1em;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s, color 0.3s;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <img class="logo" src="img/logovlees.png" alt="vlam en vlees logo">
    <button class="menu-toggle" id="menuToggle">☰</button>
    <nav id="navMenu">
        <a href="index.php">Home</a>
        <a href="lunch.php">Lunch & Dinner</a>
        <a href="locatie.php">Locatie</a>
        <a href="reserveren.php">Reserveren</a>
        <a href="vacaturen.php">Vacaturen</a>
    </nav>
    <button id="darkModeToggle" class="toggle-btn">
        <i id="modeIcon" class="fas fa-moon"></i>
        <span id="modeText">Dark Mode</span>
    </button>
</header>

<script>
    // Dark mode toggle
    const toggleButton = document.getElementById("darkModeToggle");
    const modeIcon = document.getElementById("modeIcon");
    const modeText = document.getElementById("modeText");
    const body = document.body;

    toggleButton.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
        if (body.classList.contains("dark-mode")) {
            modeIcon.classList.replace("fa-moon", "fa-sun");
            modeText.textContent = "Light Mode";
        } else {
            modeIcon.classList.replace("fa-sun", "fa-moon");
            modeText.textContent = "Dark Mode";
        }
    });

    // Hamburger menu toggle
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    menuToggle.addEventListener("click", () => {
        navMenu.classList.toggle("nav-active");
    });
</script>

</body>
</html>
