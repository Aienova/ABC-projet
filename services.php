<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="abonnements" />
  <title>Nos abonnements</title>

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
    <h1 align="center">Nos abonnements</h1>
    <br>

    <p style="max-width: 700px; line-height: 25px; font-weight: bold; font-size: 18px">Accès illimité à tous les films & séries du moment - 35&#x20AC/mois</p>
  
    
    <p>Vous en avez assez de jongler entre Netflix, Dinsey+, Amazon Prime ou Paramounth TV ? Avec le Pack Premium AIE TV, accédez en illimité à tous les contenus des plus grandes plateformes, réunis en une seule application.</p>
    </div>


        <section id="services">
            <h2>Inscription au pack premium</h2>

        </section>
    </main>


<?php include "footer.php" ?>
</body>
</html>