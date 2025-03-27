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

<?php 
  include 'header.php';
?>

<main>
  <section class="menu" id="menu">
    <header>
      <h1>Ons Menu</h1>
      <p>Ontdek onze specialiteiten, bereid met passie en de beste ingrediënten.</p>
    </header>

    <section class="menu-categorie">
      <h2>Voorgerechten</h2>
      <ul class="menu-grid">
        <li class="menu-item">
          <img src="img/carpaccio.jpg" alt="Carpaccio">
          <h3>Carpaccio</h3>
          <p>Dun gesneden rundvlees met Parmezaanse kaas, rucola en truffelmayonaise.</p>
          <p class="prijs">€10,50</p>
        </li>
        <li class="menu-item">
          <img src="img/garnalen.jpg" alt="Gegrilde Gamba's">
          <h3>Gegrilde Gamba's</h3>
          <p>Geserveerd met knoflookboter en een frisse citroen-dressing.</p>
          <p class="prijs">€12,00</p>
        </li>
      </ul>
    </section>

    <section class="menu-categorie">
      <h2>Hoofdgerechten</h2>
      <ul class="menu-grid">
        <li class="menu-item">
          <img src="img/ribeye.jpg" alt="Ribeye steak">
          <h3>Ribeye Steak</h3>
          <p>Sappige ribeye van de grill, geserveerd met seizoensgroenten en frietjes.</p>
          <p class="prijs">€22,50</p>
        </li>
        <li class="menu-item">
          <img src="img/mixedgrill.jpg" alt="Mixed Grill">
          <h3>Mixed Grill</h3>
          <p>Combinatie van ossenhaas, lamskotelet en kipfilet met chimichurri saus.</p>
          <p class="prijs">€24,00</p>
        </li>
      </ul>
    </section>

    <section class="menu-categorie">
      <h2>Desserts</h2>
      <ul class="menu-grid">
        <li class="menu-item">
          <img src="img/dameblanche.jpg" alt="Dame Blanche">
          <h3>Dame Blanche</h3>
          <p>Vanille-ijs met warme chocoladesaus en slagroom.</p>
          <p class="prijs">€6,50</p>
        </li>
        <li class="menu-item">
          <img src="img/cheesecake.jpg" alt="New York Cheesecake">
          <h3>New York Cheesecake</h3>
          <p>Romige cheesecake met een frisse aardbeiensaus.</p>
          <p class="prijs">€7,00</p>
        </li>
      </ul>
    </section>

    <section class="menu-categorie">
      <h2>Drinken</h2>
      <ul class="menu-grid">
        <li class="menu-item">
          <img src="img/frisdrank.jpg" alt="Frisdrank">
          <h3>Frisdrank</h3>
          <p>Coca-Cola, Fanta, Sprite of 7up.</p>
          <p class="prijs">€2,50</p>
        </li>
        <li class="menu-item">
          <img src="img/bier.jpg" alt="Speciaalbier">
          <h3>Speciaalbier</h3>
          <p>Heineken, Grolsch of een lokaal speciaalbier.</p>
          <p class="prijs">€3,50</p>
        </li>
      </ul>
    </section>
  </section>
</main>

<footer>
<?php include('footer.php'); ?>
</footer>

<script src="script.js"></script>
</body>
</html>
