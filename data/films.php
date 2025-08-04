<?php

    require_once "dbManager.php";

    // Définir le type de contenu comme JSON
    header('Content-Type: application/json');

    $dbManager = new dbManager();

    // Récupérer le paramètre mode depuis l'URL
    $mode = isset($_GET['mode']) ? $_GET['mode'] : 'all';

    $data = null;
    $message = "";

    switch ($mode) {
        case 'all':
        default:
            // Afficher tous les films (mode par défaut)
            $data = $dbManager->selectTable("film");
            $message = $mode === 'all' ? "Liste de tous les films" : "Mode par défaut : Liste de tous les films";
            break;

        case 'top':
            // Afficher les films les mieux notés (ORDER BY avec LIMIT via condition)
            // Note: selectWhere ne supporte pas ORDER BY et LIMIT directement, 
            // donc on utilise une condition qui inclut ORDER BY et LIMIT
            $condition = "1=1 ORDER BY grade DESC LIMIT 10";
            $data = $dbManager->selectWhere("film", $condition);
            $message = "Top 10 des films les mieux notés";
            
            if ($data === false) {
                $data = [];
                $message = "Erreur lors de la récupération des films les mieux notés";
            }
            break;

        case 'recent':
            // Afficher les films récents (moins de 1 mois)
            $condition = "date_publish >= DATE_SUB(NOW(), INTERVAL 1 MONTH) ORDER BY date_publish DESC";
            $data = $dbManager->selectWhere("film", $condition);
            $message = "Films ajoutés récemment (moins de 1 mois)";
            
            if ($data === false) {
                $data = [];
                $message = "Erreur lors de la récupération des films récents";
            }
            break;
    }

    // Créer la réponse standardisée
    $response = [
        "status" => (empty($data) && $mode !== 'all') || $data === false ? "error" : "success",
        "message" => $message,
        "mode" => $mode,
        "count" => is_array($data) ? count($data) : 0,
        "data" => $data
    ];

    // Fermer la connexion
    $dbManager->endConnection();

    // Retourner la réponse JSON
    echo json_encode($response, JSON_UNESCAPED_UNICODE);