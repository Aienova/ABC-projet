
<?php include "header.php" ?>

    <main>



<section id="inscription">
    <h2>Inscription</h2>
    <form action="http://localhost/abc-project/aie-tv/inscription.php" method="post">
        <div>
            <label for="user_name">Nom d'utilisateur (3-20 caractères):</label><br>
            <input type="text" id="user_name" name="user_name" required minlength="3" maxlength="20">
        </div>
        
        <div>
            <label for="user_pass">Mot de passe (6 caractères minimum):</label><br>
            <input type="password" id="user_pass" name="user_pass" required minlength="6">
        </div>
        
        <div>
            <label for="confirm_pass">Confirmer le mot de passe:</label><br>
            <input type="password" id="confirm_pass" name="confirm_pass" required>
        </div>
        
        <button type="submit">S'inscrire</button>
    </form>
</section>


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
