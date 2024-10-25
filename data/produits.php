<?php

$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

$produits = [$produit1, $produit2, $produit3];

function sousPrixTotal($produit) {
    return $produit["prix"] * $produit["quantite"];
}


function prixTotal($produits) {
    $total = 0;
    foreach ($produits as $produit) {
        $total += sousPrixTotal($produit);
    }
    return $total;
}



function prixTotalAvecReduction($produits, $reduction) {
    return prixTotal($produits) * (1 - $reduction);
}


?>