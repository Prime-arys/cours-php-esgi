<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="static/style.css">
</head>

<body>

    <h1>Panier</h1>

    <?php

    session_start();

    include 'data/produits.php';

    foreach ($produits as $produit) {
        echo "Le sous-total pour le " . $produit['nom'] . " (" . $produit['quantite'] . ") est de " . sousPrixTotal($produit) . "€<br>";
    }

    echo "<br>";
    echo "Le prix total est de " . prixTotal($produits) . "€<br>";
    echo "Le prix total avec une réduction de 10% est de " . prixTotalAvecReduction($produits, 0.10) . "€<br>";
    echo "<br>";

    include 'components/tab.php';
    draw_tab($produits);

    ?>

</body>

</html>