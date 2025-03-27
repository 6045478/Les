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
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        .vacature-lijst {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            height: 150px;
        }
        button {
            padding: 10px;
            font-size: 16px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <?php include 'header.php'; ?>
</header>

<main>
    <section id="vacatures">
        <h1>Werken bij Vlam & Vlees</h1>
        <p>Wij zijn altijd op zoek naar enthousiaste mensen om ons team te versterken. Bekijk onze openstaande vacatures en solliciteer direct!</p>
        
        <section class="vacature-lijst">
            <article class="vacature-item">
                <h2>Enthousiaste mensen gezocht</h2>
                <p>Creëer een warm welkom voor gasten, laat ze zich meteen thuis voelen. We zoeken individuen die niet alleen gastvrij zijn maar ook vrolijk en enthousiast. Ons team verwelkomt voortdurend nieuwe leden. Ben jij degene die ons team kan versterken en de positieve sfeer kan bevorderen?</p>
                
                <h3>Neem contact op</h3>
                <form action="vacaturen.php" method="post">
                    <label for="voornaam">Voornaam *</label>
                    <input type="text" id="voornaam" name="voornaam" required>
                    
                    <label for="achternaam">Achternaam *</label>
                    <input type="text" id="achternaam" name="achternaam" required>
                    
                    <label for="email">E-mailadres *</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="telefoon">Telefoonnummer *</label>
                    <input type="tel" id="telefoon" name="telefoon" required>
                    
                    <label for="ervaring">Welke ervaringen heb je? *</label>
                    <textarea id="ervaring" name="ervaring" required></textarea>
                    
                    <button type="submit">Versturen</button>
                </form>
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
