<?php
// Définition de la classe Utilisateur
class Utilisateur {
    private $user_name;
    private $user_pass;
    
    public function getNom() {
        return $this->user_name;
    }
    
    public function setNom($new_user_name) {
        $this->user_name = htmlspecialchars(trim($new_user_name));
    }
    
    public function setPasse($new_user_pass) {
        $this->user_pass = password_hash($new_user_pass, PASSWORD_DEFAULT);
    }
    
    public function validerPasse($pass_a_verifier) {
        return password_verify($pass_a_verifier, $this->user_pass);
    }
}

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Création d'une nouvelle instance d'Utilisateur
    $nouvelUtilisateur = new Utilisateur();
    
    // Récupération des données du formulaire
    $nom = $_POST['user_name'] ?? '';
    $pass = $_POST['user_pass'] ?? '';
    $confirm_pass = $_POST['confirm_pass'] ?? '';
    
    // Validation simple
    if (empty($nom) || empty($pass) || empty($confirm_pass)) {
        die("Tous les champs sont obligatoires.");
    }
    
    if ($pass !== $confirm_pass) {
        die("Les mots de passe ne correspondent pas.");
    }
    
    // Attribution des valeurs à l'objet
    $nouvelUtilisateur->setNom($nom);
    $nouvelUtilisateur->setPasse($pass);
    
    // Affichage des résultats 
    echo "<h2>Inscription réussie!</h2>";
    echo "<p>Nom d'utilisateur: " . $nouvelUtilisateur->getNom() . "</p>";
    
   
    echo "<p>Mot de passe hashé: (non affiché pour des raisons de sécurité)</p>";
    
    
    echo '<a href="http://localhost/abc-project/aie-tv/">Retour à l\'accueil</a>';
}
?>