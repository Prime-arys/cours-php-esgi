<?php

function draw_tab($produits)
{

    echo "<table>";
    echo "<tr>";
    echo "<th>Produit</th>";
    echo "<th>Prix</th>";
    echo "<th>Quantité</th>";
    echo "<th>Sous-total</th>";
    echo "</tr>";

    foreach ($produits as $produit) {
        echo "<tr>";
        echo "<td>" . $produit['nom'] . "</td>";
        echo "<td>" . $produit['prix'] . "€</td>";
        echo "<td>" . $produit['quantite'] . "</td>";
        echo "<td>" . sousPrixTotal($produit) . "€</td>";
        echo "</tr>";
    }

    if (prixTotal($produits) > 50) {

        echo "<tr>";
        echo "<td colspan='3'>Total avec réduction de 10%</td>";
        echo "<td>" . prixTotal($produits) . " -> " . prixTotalAvecReduction($produits, 0.10) . "€</td>";
    } else {
        echo "<tr>";
        echo "<td colspan='3'>Total</td>";
        echo "<td>" . prixTotal($produits) . "€</td>";
        echo "</tr>";
    }



    echo "</table>";
}
