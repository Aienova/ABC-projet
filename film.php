<?php

    require_once "dbManager.php";

    // Définir le type de contenu comme JSON
    header('Content-Type: application/json');

    $dbManager = new dbManager();

    // Récupérer le paramètre ID depuis l'URL
    $filmId = isset($_GET['id']) ? (int)$_GET['id'] : null;

    if ($filmId) {

        // Sélectionner le film spécifique par ID
        $data = $dbManager->selectWhere("film", "id = $filmId");

        // Vérifier si un film a été trouvé
        if ($data && count($data) > 0) {
            // Récupérer le premier (et seul) film du tableau
            $film = $data[0];
            
            echo json_encode([
                "status" => "success",
                "message" => "Film trouvé avec l'ID: $filmId",
                "data" => $film  // Objet film directement, pas de double encodage
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Film non trouvé avec l'ID: $filmId",
                "data" => null
            ]);
        }

    }   else {
        // Si aucun ID n'est fourni, retourner une erreur
        echo json_encode([
            "status" => "error",
            "message" => "Film non trouvé avec l'ID: $filmId",
            "data" => null
        ]);
    }