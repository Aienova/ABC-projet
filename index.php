<?php 

$pageTitle = "AIE TV - Accueil";
$pageDescription = "Bienvenue sur AIE TV, votre source de films et séries.";
include "header.php" ?>
        <?php include "banner.php" ?>
    <main>

        <section id="news">
            <h2>Nos dernières sorties</h2>
        
        <div class="cards-container">
            <div class="card">
                <div class="premium-badge">Premium</div>
                <img src="./media/film-1.jpg" alt="Film 1">
                <h3>Mufasa:Roi Lion</h3>
                <p>Description du film 1.</p>
                <a href="./film/1">En savoir plus</a>
            </div>
            <div class="card">
                <img src="/media/thunderbolt.webp" alt="Film 2">
                <h3>Film 2</h3>
                <p>Description du film 2.</p>
                <a href="./film/2">En savoir plus</a>
            </div>
            <div class="card">
                <div class="premium-badge">Premium</div>
                <img src="/media/" alt="Film 3">
                <h3>Film 3</h3>
                <p>Description du film 3.</p>
                <a href="./film/3">En savoir plus</a>
            </div>
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