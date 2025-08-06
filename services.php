
<?php include "header.php" ?>

    <main>
        <section id="services">
                <h2>Nos abonnements</h2>

                <div id="description">

            

                <p style="max-width: 700px; line-height: 25px; font-weight: bold; font-size: 18px">Accès illimité à tous les films & séries du moment - 35&#x20AC/mois</p>
            
                
                <p>Vous en avez assez de jongler entre Netflix, Dinsey+, Amazon Prime ou Paramounth TV ? Avec le Pack Premium AIE TV, accédez en illimité à tous les contenus des plus grandes plateformes, réunis en une seule application.</p>
                </div>

            <h2>Inscription au pack premium</h2>

            <div id="form-services" class="form-container">
                <form method="POST" action="">
                    <h3>Inscription au pack premium</h3>

                    <label for="fname">Nom :</label>
                    <input type="text" id="fname" name="fname" required>

                    <label for="lname">Prénom :</label>
                    <input type="text" id="lname" name="lname" required>

                    <label for="birthday">Date de naissannce :</label>
                    <input type="date" id="birthday" name="birthday" required>

                    <label for="email">Adresse Email :</label>
                    <input type="email" id="email" name="email" required>

                    <button type="submit">S'inscrire</button>
                </form>
            </div> 

        </section>
    </main>

<?php include "footer.php" ?>
