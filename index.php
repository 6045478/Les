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
        <img class="restaurant-image" src="img/prok.png" alt="Gerecht van Vlam en Vlees">
        <section class="hero" id="home">
            <h1>Lunch & Diner bij Vlam en Vlees</h1>
            <p>Geniet van onze uitgebreide lunch- en dinerkaart met de beste vleesgerechten en seizoensgebonden specialiteiten.</p>
            <a href="reserveren.php" class="reserveer-btn">Reserveer nu</a>
        </section>
        
        <section class="menu" id="menu">
            <h2>Onze Specialiteiten</h2>
            <section class="menu-grid">
                <article class="menu-item">
                <img src="img/lunch.jpg" alt="Lunch gerechten">
                    <h3>Lunch</h3>
                    <p>Geniet van onze lunch specialiteiten tussen 12:00 en 16:00 uur</p>
                    <a href="lunch.php" class="menu-btn">Bekijk lunchkaart</a>
                </article>
                <article class="menu-item">
                    <img src="img/diner.jpg" alt="Diner gerechten">
                    <h3>Diner</h3>
                    <p>Ontdek onze uitgebreide dinerkaart vanaf 17:00 uur</p>
                    <a href="diner.php" class="menu-btn">Bekijk dinerkaart</a>
                </article>
                <article class="menu-item">
                    <img src="img/dranken.jpg" alt="Dranken">
                    <h3>Dranken</h3>
                    <p>Uitgebreide wijnkaart en speciale cocktails</p>
                    <a href="dranken.php" class="menu-btn">Bekijk drankenkaart</a>
                </article>
            </section>
        </section>
    </main>
    
    <footer>
    <?php include('footer.php'); ?>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>