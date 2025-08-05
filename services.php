


<?php include "header.php" ?>

    <main>
        <section id="services">
            <h2>Nos Abonnements</h2>

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
