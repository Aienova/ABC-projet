<?php 

$pageTitle = "AIE TV - Accueil";
$pageDescription = "Bienvenue sur AIE TV, votre source de films et séries.";
include "header.php" ?>
        <?php include "banner.php" ?>
    <main>

        <section id="news">
            <h2>Nos dernières sorties</h2>
        
        <div class="info-container">
            <p>Découvrez notre catalogue exceptionnel de plus de <strong>5000 films du moment</strong> à voir en streaming ! Plongez dans un univers cinématographique sans limites avec les dernières sorties, les grands classiques et les pépites du cinéma mondial. Que vous soyez amateur d'action, de romance, de science-fiction, de thriller ou de documentaires, notre plateforme vous offre un accès illimité à une bibliothèque de films constamment mise à jour. Profitez d'une expérience de streaming haute qualité et laissez-vous emporter par les histoires les plus captivantes du cinéma contemporain.</p>
        </div>  


        </section>

        <section id="topten">
        
        </div> 

        </section>
        <section id="films">
  
        </section>
  
    </main>
    <script src="script/getApiData.js"></script>
    <script src="script/displayFilms.js"></script>

<?php include "footer.php" ?>