<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="a-propos" />
  <title>À propos de nous</title>

  <style>

    @keyframes slideInLeft{
        from{
            transform : translateX(-300px);
        }
        to{
            transform: translateX(0;)
        }
    }

     .photos-equipe {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 100px;
        }

    .photo-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .photo {
      background-color: grey;
      width: 100px;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
    }

    .nom {
      margin-top: 8px;
      font-weight: bold;
      
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
</head>

<body>
  <?php include "header.php" ?>

  <main>
    <section id="about-us">
      <h2>A propos de nous</h2>
      <br />


      <div id="description" align="center">
      <h3>L'équipe derrière AIE TV</h3>
        <p>
          Derrière AIE TV, se cache une équipe réduite mais redoutablement efficace, composée de deux développeurs passionnés par le web, la programmation et l’innovation digitale. Formés au Centre de Réadaptation de Mulhouse, nous avons partagé les mêmes bancs, les mêmes défis, et surtout la même envie de créer quelque chose de grand. De cette vision est née AIE TV : une plateforme ambitieuse pensée pour simplifier le streaming et rassembler le meilleur du divertissement.
        </p>
      </div>

      <h4 align="center">L'équipe</h4>

<!-- la partie de Benamin que j'avais fait parce que je pensais que c'était à moi, code déjà transmis à Benjamin
      <section id="photos">
        <div class="photos-equipe">
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 1</div>
          </div>
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 2</div>
          </div>
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 3</div>
          </div>
        </div>
      

        <div class="photos-equipe">
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 1</div>
          </div>
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 2</div>
          </div>
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 3</div>
          </div>
        </div>

        <div class="photos-equipe">
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 1</div>
          </div>
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 2</div>
          </div>
          <div class="photo-container">
            <div class="photo">Photo</div>
            <div id="nom">Prénom 3</div>
          </div>
        </div>
        </section> -->


    </section>
  </main>

  <?php include "footer.php" ?>
</body>
</html>
