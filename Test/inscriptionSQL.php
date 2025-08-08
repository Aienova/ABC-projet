<?php
// Classe Utilisateur
class Utilisateur {
    private $user_name;
    private $user_pass;
    
    public function getNom() {
        return $this->user_name;
    }
    
    public function setNom($new_user_name) {
        $this->user_name = trim($new_user_name);
    }
    
    public function setPasse($new_user_pass) {
        $this->user_pass = password_hash($new_user_pass, PASSWORD_DEFAULT);
    }
    
    public function getPasseHash() {
        return $this->user_pass;
    }
}

// Connexion à la base SQLite
try {
    $db = new PDO('sqlite:utilisateurs.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Création de la table
    $db->exec("CREATE TABLE IF NOT EXISTS utilisateurs (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT UNIQUE,
        password TEXT)");
        
} catch(PDOException $e) {
    die("Erreur de base de données: " . $e->getMessage());
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['user_name'] ?? '';
    $pass = $_POST['user_pass'] ?? '';
    $confirm_pass = $_POST['confirm_pass'] ?? '';
    
    // Validation
    $erreurs = [];
    
    if (strlen($nom) < 3 || strlen($nom) > 20) {
        $erreurs[] = "Le nom d'utilisateur doit faire entre 3 et 20 caractères.";
    }
    
    if (strlen($pass) < 6) {
        $erreurs[] = "Le mot de passe doit faire au moins 6 caractères.";
    }
    
    if ($pass !== $confirm_pass) {
        $erreurs[] = "Les mots de passe ne correspondent pas.";
    }
    
    // Vérifier si l'utilisateur existe déjà
    $stmt = $db->prepare("SELECT username FROM utilisateurs WHERE username = ?");
    $stmt->execute([$nom]);
    if ($stmt->fetch()) {
        $erreurs[] = "Ce nom d'utilisateur est déjà pris.";
    }
    
    // Si pas d'erreurs, inscription
    if (empty($erreurs)) {
        $utilisateur = new Utilisateur();
        $utilisateur->setNom($nom);
        $utilisateur->setPasse($pass);
        
        try {
            $stmt = $db->prepare("INSERT INTO utilisateurs (username, password) VALUES (?, ?)");
            $stmt->execute([
                $utilisateur->getNom(),
                $utilisateur->getPasseHash()
            ]);
            
            echo "<p>Inscription réussie! Bienvenue " . htmlspecialchars($nom) . ".</p>";
            echo '<p><a href="http://localhost/abc-project/aie-tv/">Retour à l\'accueil</a></p>';
            
        } catch(PDOException $e) {
            echo "<p>Erreur lors de l'inscription: " . $e->getMessage() . "</p>";
        }
        
    } else {
        // Afficher les erreurs
        echo "<h3>Erreurs:</h3>";
        foreach ($erreurs as $erreur) {
            echo "<p>- " . htmlspecialchars($erreur) . "</p>";
        }
        echo '<p><a href="javascript:history.back()">Retour au formulaire</a></p>';
    }
}
?>