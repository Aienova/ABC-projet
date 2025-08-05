<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="contact" />
  <title>Contact</title>

<style>

    @keyframes slideInLeft{
        from{
            transform : translateX(-300px);
        }
        to{
            transform: translateX(0;)
        }
    }

#description {
     max-width: 700px;
     margin-left: auto;
     margin-right: auto;
    text-align: left;
    line-height: 25px;
    animation: slideInLeft 1s ease-in both;
}

</style>



<?php include "header.php" ?>
</head>
<body>
    <main>
<div id="description" align="center">
    <h1 align="center">Contact</h1>
    <br>

    <p style="max-width: 500px; margin-left: auto; margin-right: auto; text-align: left; line-height: 25px; font-weight: bold; font-size: 18px">Besoin d'aide ou avez-vous des questions ? Vous pouvez nous contacter via notre formulaire ci-dessous</p>
  
</div>
        <section id="services">
            <h2>Nous contacter</h2>

        </section>
    </main>


<?php include "footer.php" ?>
</body>
</html>