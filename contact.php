<?php 
$pageTitle = "AIE TV - Contact";

include "header.php" ?>


        <section id="services">
            <h2>Contact</h2>
            <!--FORM-->

            <div class="form-container">
               <form method="POST" action="">
                    <h3>Nous contacter</h3>

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


</html>
<?php include "footer.php" ?>