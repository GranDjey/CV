<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Carte des boissons</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/carte.css">
    <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
</head>

<body class="carte">
  <?php include "navbar.php";?>
  <!-- Titre de la page -->
  <div class="enteteboisson">
  <img src="img/petitlogo.png" alt="logo du Kilberry"/>
  <h1 class="titreboissons">Nos Boissons</h1>
  </div>
  <!-- conteneur général des deux colonnes -->
  <div class="superconteneur">
    <!-- conteneur de la colonne de gauche -->
      <div class="conteneurboisson">
      <div id="divboissons2" class="pression">
      <div id="divboissons" class="pression">
        <h2 class="soustitreboisson">Nos Bières Pression</h2>
        <hr/>
        <h3>Bière blonde</h3>
        <h3>Bière brune</h3>
        <h3>Bière spéciale</h3>
        <h3>Bière d'abbaye</h3>
        <h3>Panaché</h3>
      </div>
    </div>
      <div id="divboissons2" class="bchaude">
      <div id="divboissons" class="bchaude">
        <h2 class="soustitreboisson">Nos Boissons Chaudes</h2>
        <hr/>
        <h3>Expresso</h3>
        <h3>Café grande tasse</h3>
        <h3>Décaféiné</h3>
        <h3>Café crème petit</h3>
        <h3>Café crème grand</h3>
        <h3>Chocolat</h3>
        <h3>Thé/Infusion</h3>
        <h3>Lait</h3>
        <h3>Vin chaud</h3>
        <h3>Café gourmand</h3>
      </div>
      </div>
      <div id="divboissons2" class="bouteillebiere">
      <div id="divboissons" class="bouteillebiere">
        <h2 class="soustitreboisson">Nos Bières en bouteille</h2>
        <hr/>
        <h3>Bière blonde</h3>
        <h3>Bière brune</h3>
        <h3>Bière spéciale</h3>
        <h3>Bière sans alcool</h3>
        <h3>Bière d'abbaye</h3>
      </div>
      </div>
      <div id="divboissons2" class="soft">
      <div id="divboissons" class="soft">
        <h2 class="soustitreboisson">Nos Softs et Jus de fruits</h2>
        <hr/>
        <h3>Cola</h3>
        <h3>Limonade</h3>
        <h3>Diabolo</h3>
        <h3>Orangina</h3>
        <h3>Schweppes</h3>
        <h3>Perrier</h3>
        <h3>Perrier avec sirop</h3>
        <h3>Thé glacé</h3>
        <h3>Jus de fruit (orange ...)</h3>
        <h3>Fruits pressés</h3>
      </div>
      </div>
    </div> <!-- Fin du conteneur de la colonne de gauche -->
    <div class="conteneurboisson">
      <div id="divboissons2" class="spiritueux">
      <div id="divboissons" class="spiritueux">
        <h2 class="soustitreboisson">Nos Spiritueux</h2>
        <hr/>
        <h3>Anisé</h3>
        <h3>Martini</h3>
        <h3>Porto</h3>
        <h3>Kir</h3>
        <h3>Suze</h3>
        <h3>Vodka</h3>
        <h3>Rhum</h3>
        <h3>Whisky</h3>
        <h3>Téquilla</h3>
        <h3>Gin</h3>
        <h3>Liqueur</h3>
        <h3>Cognac</h3>
        <h3>Armagnac</h3>
        <h3>Calvados</h3>
        <h3>Eau de vie</h3>
        <h3>Liqueur de menthe</h3>
      </div>
      </div>
      <div id="divboissons2" class="eaux">
      <div id="divboissons" class="eaux">
        <h2 class="soustitreboisson">Nos eaux</h2>
        <hr/>
        <h3>Eau plate</h3>
        <h3>Eau gazeuse</h3>
        <h3>Eau avec sirop</h3>
      </div>
      </div>
      <div id="divboissons2" class="vins">
      <div id="divboissons" class="vins">
        <h2 class="soustitreboisson">Nos Vins</h2>
        <hr/>
        <h3>Blanc</h3>
        <h3>Blanc AOC</h3>
        <h3>Rosé</h3>
        <h3>Rosé AOC</h3>
        <h3>Rouge</h3>
        <h3>Rouge AOC</h3>
        <h3>Champagne</h3>
        <h3>Vin effervescent</h3>
      </div>
      </div>
      <div id="divboissons2" class="nourriture">
      <div id="divboissons" class="nourriture">
        <h2 class="soustitreboisson">Notre petite restauration</h2>
        <hr/>
        <h3>Sandwich</h3>
        <h3>Hot Dog</h3>
        <h3>Croque-monsieur</h3>
        <h3>Croque-madamme</h3>
        <h3>Petit déjeuner</h3>
        <h3>Chips</h3>
        <h3>Saucissons</h3>
      </div>
      </div>
    </div> <!-- Fin du conteneur colonne droite -->
  </div> <!-- Fin du conteneur normal -->
  <?php include "foot_top.php"?>
</body>
</html>
