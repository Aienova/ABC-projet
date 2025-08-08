
<?php include "header.php"; ?>

<?php
// Récupération du paramètre ID depuis l'URL
$filmId = isset($_GET['id']) ? (int)$_GET['id'] : null;

// Vérification si un ID est fourni
if ($filmId) {  ?>


        <main>
                <section id="film-details">
                    <h2></h2>

                <div class="details-container">
                    <img src="" alt="Film Image">
                    <div class="details-text">
                        <h3 id="film-subtitle"></h3>
                        <h4 id="film-rating">Note du film : <span id="film-rating-value"></span></h4>
                        <p id="film-description"></p>
                        <p>Informations supplémentaires sur le film, son casting, sa date de sortie et autres détails intéressants.</p>
                        
                        <div class="button-group">
                            <a href="../media/aietv.mp4" class="btn btn-primary" target="_blank">
                                🎬 Voir le film
                            </a>
                            <a href="#" id="trailer-link" class="btn btn-trailer" target="_blank">
                                🎥 Voir la bande-annonce
                            </a>
                            <a href="<?php echo isset($root) ? $root : ''; ?>" class="btn btn-secondary">
                                ← Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    <!-- Scripts pour récupérer et afficher les détails du film -->
    <script src="../script/getApiData.js"></script>
    <script src="../script/displayFilmDetails.js"></script>

<?php

    
} else {
    echo "<h1>Liste des films</h1>";
    echo "<p>Aucun film spécifique sélectionné. Affichage de la liste des films.</p>";
    
    // TODO: Ajouter la logique pour afficher la liste de tous les films
}
?>

<?php include "footer.php" ?>