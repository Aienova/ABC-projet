<?php include "header.php" ?>


<style>
.scene {
  display: inline-block;
  width: 100%;
  height: 120px;
  margin: 40px 0;
  perspective: 600px;
}

.FAQcard {
  position: relative;
  width: 100%;
  height: 100%;
  cursor: pointer;
  transform-style: preserve-3d;
  transform-origin: center right;
  transition: transform 1s;
  margin: 20px;
}

.FAQcard.is-flipped {
  transform: translateX(-100%) rotateY(-180deg);
}


.FAQcard__face {
  position: absolute;
  width: 100%;
  height: 100%;
  color: white;
  text-align: center;
  font-weight: bold;
  font-size: 21px;
  backface-visibility: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px;
  line-height: normal;
}

.FAQcard__face--front {
  cursor: pointer;
  background: red;
}

.FAQcard__face--back {
  transform: rotateY(180deg);
  background: grey;
  color: black;
}


</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  var FAQcards = document.querySelectorAll('.FAQcard');

  FAQcards.forEach((FAQcard) => {
    FAQcard.addEventListener('click', function () {
      FAQcard.classList.toggle('is-flipped');

    });
  });
});
</script>


    <main>
        <section id="FAQ" align="center">
                <h1 style="font-size: 50px">F.A.Q.</h1>

                
<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">1. Qu’est-ce que AIE TV ?</div>
<div class="FAQcard__face FAQcard__face--back">AIE TV est une plateforme de streaming à la demande qui regroupe des films et séries issus de plusieurs catalogues (Netflix, Disney+, Amazon Prime, etc.) en un seul endroit. Vous y trouverez les contenus les plus populaires du moment.</div>
  </div>
</div>

<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">2. AIE TV est-il un service légal ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui. AIE TV fonctionne sous licence et s’engage à respecter les droits de diffusion. Nos accords de contenu nous permettent d'agréger des œuvres présentes sur d'autres plateformes de manière centralisée.</div>
  </div>
</div>

<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">3. Combien coûte l’abonnement AIE TV Premium ?</div>
<div class="FAQcard__face FAQcard__face--back">L’abonnement Premium coûte 35 € TTC par mois, sans engagement.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">4. Puis-je tester AIE TV gratuitement ?</div>
<div class="FAQcard__face FAQcard__face--back">Actuellement, AIE TV ne propose pas de période d’essai gratuite. Cependant, vous pouvez vous désabonner à tout moment sans frais.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">5. Quels types de contenus sont disponibles ?</div>
<div class="FAQcard__face FAQcard__face--back">Films récents, séries cultes, documentaires, animés, contenus exclusifs… Tout est regroupé en un seul endroit avec une interface simple et efficace.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">6. Est-ce que je peux télécharger les contenus pour les regarder hors ligne ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui, les abonnés Premium peuvent télécharger les contenus disponibles pour un visionnage hors connexion sur mobile ou tablette.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">7. Combien de profils peut-on créer ?</div>
<div class="FAQcard__face FAQcard__face--back">Avec un seul compte AIE TV Premium, vous pouvez créer jusqu’à 5 profils différents pour une expérience personnalisée.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">3. Combien coûte l’abonnement AIE TV Premium ?</div>
<div class="FAQcard__face FAQcard__face--back">AIE TV eulaires du moment.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">8. Peut-on regarder AIE TV sur plusieurs écrans en même temps ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui, jusqu’à 4 écrans simultanés sont autorisés pour les abonnés Premium.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">9. AIE TV est-il disponible sur Smart TV ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui. AIE TV est compatible avec la majorité des Smart TV, ainsi qu’avec les appareils Android TV, Apple TV, Chromecast et Fire Stick.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">10. Puis-je utiliser AIE TV à l’étranger ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui, AIE TV est accessible partout dans l’Union Européenne. Toutefois, certains contenus peuvent être soumis à des restrictions géographiques.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">11. Comment puis-je m’abonner ?</div>
<div class="FAQcard__face FAQcard__face--back">Rendez-vous sur Aiioz , créez un compte, choisissez l’abonnement Premium et renseignez vos informations de paiement.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">12. Est-ce que je peux annuler mon abonnement à tout moment ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui, vous pouvez résilier votre abonnement à tout moment depuis votre espace client. Aucun frais de résiliation ne s’applique.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">13. Comment puis-je modifier mes informations personnelles ?</div>
<div class="FAQcard__face FAQcard__face--back">Connectez-vous à votre compte, accédez à l’onglet “Mon Profil”, puis modifiez les informations souhaitées.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">14. Quels moyens de paiement sont acceptés ?</div>
<div class="FAQcard__face FAQcard__face--back">Nous acceptons les cartes bancaires (Visa, Mastercard) et le prélèvement SEPA. Les paiements sont sécurisés.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">15. Mes données sont-elles en sécurité ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui. Vos données personnelles sont protégées conformément au RGPD. Vos paiements sont cryptés et gérés par un prestataire certifié.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">16. Que faire si j’ai oublié mon mot de passe ?</div>
<div class="FAQcard__face FAQcard__face--back">Cliquez sur “Mot de passe oublié” depuis la page de connexion et suivez les instructions pour en créer un nouveau.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">17. J’ai un bug ou un problème de lecture. Que faire ?</div>
<div class="FAQcard__face FAQcard__face--back">Vérifiez votre connexion Internet, mettez à jour l'application si nécessaire, puis contactez notre support à admin@aietv.com si le problème persiste.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">18. Y a-t-il des publicités sur AIE TV ?</div>
<div class="FAQcard__face FAQcard__face--back">Non. L’abonnement Premium vous garantit un visionnage sans aucune publicité.</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">19. AIE TV propose-t-il du contenu en 4K ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui. De nombreux films et séries sont disponibles en haute définition (HD) et en 4K, selon votre appareil et votre connexion..</div>
  </div>
</div>


<div class="scene scene--FAQcard">
  <div class="FAQcard">
    <div class="FAQcard__face FAQcard__face--front">20. Puis-je partager mon compte avec d'autres personnes ?</div>
<div class="FAQcard__face FAQcard__face--back">Oui, dans la limite des 4 écrans simultanés. Toutefois, le partage abusif de compte hors du foyer peut entraîner une suspension de l’abonnement.</div>
  </div>
</div>



        </section>
    </main>

<?php include "footer.php" ?>
