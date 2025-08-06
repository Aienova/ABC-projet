<?php


//Vérifier si le formulaire est envoyé
if (isset($_GET['connexion'])) {
    // Récupérer les valeurs
    $login = $_GET['login'];
    $password = $_GET['password'];

    // Afficher les infios de connexions
    echo "<h2>Connexion</h2>";
    echo "Login: " . $login . "<br>";
    echo "Mot de passe: " . $password . "<br>";
    
    exit;
}
?>

