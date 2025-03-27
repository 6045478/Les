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
    <section id="locatie">
        <h1>Onze Locatie</h1>
        <p>Bezoek ons bij Vlam & Vlees en geniet van een unieke culinaire ervaring.</p>
        
        <article>
            <h2>Ons Adres</h2>
            <address>
                Hugo de Grootlaan 2<br>
                2729 NC, Zoetermeer<br>
                Telefoon: <a href="tel:0791234567">079 - 123 45 67</a><br>
                Email: <a href="mailto:info@vlamenvlees.nl">info@vlamenvlees.nl</a>
            </address>
        </article>
        
        <aside>
            <h2>Routebeschrijving</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.272834612598!2d4.486928316111118!3d52.06069157973471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5cf18bfa0e421%3A0x2577be6e0a23b819!2sHugo%20de%20Grootlaan%202%2C%202729%20NC%20Zoetermeer!5e0!3m2!1snl!2snl!4v1616580845973!5m2!1snl!2snl" 
                width="100%" height="400" style="border:0;" allowfullscreen loading="lazy">
            </iframe>
        </aside>
    </section>
</main>

<footer>
<?php include('footer.php'); ?>
    </footer>

<script src="script.js"></script>
</body>
</html>