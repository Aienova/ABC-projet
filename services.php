<?php 
$pageTitle = "AIE TV - Abonnements";

include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-container {
            background-color: #FFD700;
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
            <h2>Nos Abonnements</h2>

            <div class="form-container">
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
</body>
</html>

<?php include "footer.php" ?>