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
</head>
<body>

<header>
    <?php include 'header.php'; ?>
</header>

<main>
    <section id="reserveren">
        <h1>Reserveer een tafel</h1>
        <p>Vul het onderstaande formulier in om een tafel te reserveren bij Vlam en Vlees.</p>
        <form action="reserveren.php" method="post">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefoon">Telefoonnummer:</label>
            <input type="tel" id="telefoon" name="telefoon" required>

            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" required>

            <label for="tijd">Tijd:</label>
            <input type="time" id="tijd" name="tijd" required>

            <label for="personen">Aantal personen:</label>
            <input type="number" id="personen" name="personen" min="1" max="20" required>

            <label for="opmerkingen">Opmerkingen:</label>
            <textarea id="opmerkingen" name="opmerkingen" rows="4"></textarea>

            <button type="submit">Reserveer nu</button>
        </form>
    </section>
</main>

<footer>
<?php include('footer.php'); ?>
    </footer>

<script src="script.js"></script>
</body>
</html>
