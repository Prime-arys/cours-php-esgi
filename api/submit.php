<?php

// get the data from the form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // error 405: method not allowed
    http_response_code(405);
    exit();
}



// get the data from the form
$form_args = [
    'produit1' => FILTER_VALIDATE_INT,
    'produit2' => FILTER_VALIDATE_INT,
    'produit3' => FILTER_VALIDATE_INT,
];

$form_data = filter_input_array(INPUT_POST, $form_args);


// start the session
session_start();

// store the data in the session
$_SESSION['quantite1'] = $form_data['produit1'];
$_SESSION['quantite2'] = $form_data['produit2'];
$_SESSION['quantite3'] = $form_data['produit3'];





// redirect to the index page
header('Location: ../index.php');

?>



