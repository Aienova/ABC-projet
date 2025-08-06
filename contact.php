<?php 
$pageTitle = "AIE TV - Contact";

include "header.php"; ?>


    <main>
        <section id="services">
            
            <h2>Contact</h2>

                    <div id="description">

                        <p style="max-width: 500px; margin-left: auto; margin-right: auto; text-align: left; line-height: 25px; font-weight: bold; font-size: 18px">Besoin d'aide ou avez-vous des questions ? Vous pouvez nous contacter via notre formulaire ci-dessous</p>
                    
                    </div>
            <!--FORM-->




            <div id="form-services" class="form-container">
                <form method="POST" action="">
                    <label for="email">Adresse Email :</label>
                    <input type="email" id="email" name="email" required>

                    <label for="subject">Sujet de votre message :</label>
                    <input type="text" id="subject" name="subject" required>

                    <label for="message">Votre message :</label>
                    <textarea id="comment" name="message" rows="8" required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div> 
        </section>
    </main>

<?php include "footer.php" ?>