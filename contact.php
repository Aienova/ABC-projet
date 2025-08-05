<?php 
$pageTitle = "AIE TV - Contact";

include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-container {
            background-color: red;
            color: black;
            max-width: 700px;
            margin: auto;
            padding: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-container input {
            width: 50%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: none;
        }

        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: none;
            resize: none;
        }

        .form-container button {
            background-color: black;
            width: 25%;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>

        <section id="services">
            <h2>Contact</h2>

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
    </main>
</body>

</html>
<?php include "footer.php" ?>