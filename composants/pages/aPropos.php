<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amaris Telecom</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/navbar.css">
    <link rel="stylesheet" href="../../style/footer.css">
    <link rel="stylesheet" href="../../style/carrousel.css">
    <link rel="stylesheet" href="../../style/aProposStyle.css">
    <script src="./../../assets/js/fonctions.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="../../scroll-entrance-master/src/scroll-entrance.js"></script>
</head>
<body>
    <?php include('../navbar.php'); ?>

    <div class="histoire">
        <div class="histoire_flex">
          <div>
            <h1 id="titre_histoire">Notre histoire</h1>
            <p>
              AMARIS, créée en 1997, experte dans le domaine de la téléphonie, des télécommunications et de l’informatique, offre ses services de conseils et de formations continus depuis plus de 24 ans.
              Notre expertise nous permet de proposer des formations qui recouvrent tous les domaines de la télécommunication.

              <br>Nous réalisons également des installations téléphoniques et assurons le service maintenance du matériel pour les professionnels. Accessoirement, nous procédons à l’achat et à la revente de matériels informatiques et téléphoniques (commutateurs, cartes et postes numériques téléphoniques) afin d’assurer le renouvellement de matériel d’ancienne génération.
            </p>
          </div>
          <img class="image_histoire" src="../../assets/images/IMG_8550.jpg" alt="photo locaux">
        </div>
      </div>
      <div class="timeline">
        <hr class="gradient">
        <div class="elements">
          <div class="block_timeline">
            <img src="../../assets/icons/point.png" class="point_timeline"/>
            <h2 class="date">1997</h2>
            <div>
              <img src="../../assets/logo/logo-Amaris.png" alt="Image" class="image">
            </div>
            <p class="titre">Création d'AMARIS</p>
            <p class="texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tincidunt quam, eget tristique nisl interdum vel. Sed fermentum magna non felis tincidunt, vel ultrices lacus interdum.</p>
          </div>
          <div class="block_timeline">
            <img src="../../assets/icons/point.png" class="point_timeline"/>
            <h2 class="date">05 juin 2023</h2>
            <div>
              <img src="../../assets/logo/logo-Amaris.png" alt="Image" class="image">
            </div>
            <h2 class="titre">Titre de l'article</h2>
            <p class="texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tincidunt quam, eget tristique nisl interdum vel. Sed fermentum magna non felis tincidunt, vel ultrices lacus interdum.</p>
          </div>
          <div class="block_timeline">
            <img src="../../assets/icons/point.png" class="point_timeline"/>
            <h2 class="date">05 juin 2023</h2>
            <div>
              <img src="../../assets/logo/logo-Amaris.png" alt="Image" class="image">
            </div>
            <h2 class="titre">Titre de l'article</h2>
            <p class="texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tincidunt quam, eget tristique nisl interdum vel. Sed fermentum magna non felis tincidunt, vel ultrices lacus interdum.</p>
          </div>
          <div class="block_timeline">
            <img src="../../assets/icons/point.png" class="point_timeline"/>
            <h2 class="date">05 juin 2023</h2>
            <div>
              <img src="../../assets/logo/logo-Amaris.png" alt="Image" class="image">
            </div>
            <h2 class="titre">Titre de l'article</h2>
            <p class="texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tincidunt quam, eget tristique nisl interdum vel. Sed fermentum magna non felis tincidunt, vel ultrices lacus interdum.</p>
          </div>
        </div>



      </div>




      <div class="equipe">
        <h1 >L'équipe d'Amaris</h1>
        <div class="equipe_flex">

          <div class="equipe_membre">
            <div class="section_membre">
              <img class="image_membre" src=../../assets/images/photo_equipe.jpg alt="photo membre">
              <div class="titre_membre">
                <h4>Sarah BLANC</h4>
                <p>Titre</p>
              </div>
            </div>
          </div>
          <div class="equipe_membre">
            <div class="section_membre">
              <img class="image_membre" src=../../assets/images/photo_equipe.jpg alt="photo membre">
              <div class="titre_membre">
                <h4>Jacques BANNAIRE</h4>
                <p>Titre</p>
              </div>
            </div>
          </div>
          <div class="equipe_membre">
            <div class="section_membre">
              <img class="image_membre" src=../../assets/images/photo_equipe.jpg alt="photo membre">
              <div class="titre_membre">
                <h4>Autre membre</h4>
                <p>Titre</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="partenaires">
          <h1 id="titre_partenaires">Nos partenaires principaux</h1>
          <div class="partenaires_flex">
            <div class="section_partenaire">
              <div class="partenaire_div">
                <div class="tab">
                  <button id="chmButton" class="active">CHM</button>
                  <button id="hamadaButton">M. Hamada</button>
                  <button id="saindouButton">M. Saindou</button>
                </div>
                <div class="container-video">
                  <iframe id="chmVideo" class="active" allow="fullscreen" src="https://www.youtube.com/embed/U5krMx4pxqI?autoplay=1&mute=1&rel=0"></iframe>
                  <iframe id="hamadaVideo" allow="fullscreen" src="https://www.youtube.com/embed/AX8Qy2vYRNE?autoplay=1&mute=1&rel=0"></iframe>
                  <iframe id="saindouVideo" allow="fullscreen" src="https://www.youtube.com/embed/VIwgmOvkJQA?autoplay=1&mute=1&rel=0"></iframe>
                </div>
              </div>
              <div class="partenaire_text fade" data-entrance="from-right" style="margin-top: 45px;">
                <h1>Centre Hospitalier de Mayotte</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo a diam sollicitudin tempor id eu. Aliquam vestibulum morbi blandit cursus risus at. Est ultricies integer quis auctor elit. Libero nunc consequat interdum varius sit. Risus quis varius quam quisque id. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Blandit volutpat maecenas volutpat blandit aliquam.</p>
              </div>
            </div>
            <div class="divider_container">
              <div class="divider"></div>
            </div>
            <div class="section_partenaire">
              <div class="partenaire_div">
                <img class="image_partenaire" src="../../assets/images/agglomeration_montpellier.jpg" alt="photo agglomération montpellier">
                <div class="titre_partenaire">
                  <h4>Agglomération de Montpellier</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="partenaire_text fade" data-entrance="from-left">
                <h1>Agglomération de Montpellier</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo a diam sollicitudin tempor id eu. Aliquam vestibulum morbi blandit cursus risus at. Est ultricies integer quis auctor elit. Libero nunc consequat interdum varius sit. Risus quis varius quam quisque id. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Blandit volutpat maecenas volutpat blandit aliquam.</p>
              </div>
            </div>
            <div class="divider_container">
              <div class="divider"></div>
            </div>
            <div class="section_partenaire">
              <div class="partenaire_div">
                <img class="image_partenaire" src="../../assets/images/ministere_affaires_etrangeres.jpg" alt="photo ministere">
                <div class="titre_partenaire">
                  <h4>Ministère des affaires étrangères</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="partenaire_text fade" data-entrance="from-right">
                <h1>Ministère des affaires étrangères</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo a diam sollicitudin tempor id eu. Aliquam vestibulum morbi blandit cursus risus at. Est ultricies integer quis auctor elit. Libero nunc consequat interdum varius sit. Risus quis varius quam quisque id. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Blandit volutpat maecenas volutpat blandit aliquam.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="chiffres">
          <div class="bloc_titre">
            <h1 id="titre_chiffre">Quelques <br> chiffres</h1>
            <button id="voirOffresButton" class="bouton">Voir les offres</button>
          </div>
          <div class="cote_chiffres" id="section">
            <div class="bloc_chiffre">
              <img src="../../assets/images/mallette.png" alt="image maintenance" class="icone_chiffres">
              <h1 id="experienceCount">0</h1>
              <p class="chiffre_desc">Années d'expérience</p>
            </div>
            <div class="bloc_chiffre">
              <img src="../../assets/images/installation-facile.png" alt="image maintenance" class="icone_chiffres">
              <h1 id="installationsCount">0</h1>
              <p class="chiffre_desc">Installations effectuées</p>
            </div>
            <div class="bloc_chiffre">
              <img src="../../assets/images/avatar-des-utilisateurs.png" alt="image maintenance" class="icone_chiffres">
              <h1 id="partnersCount">0</h1>
              <p class="chiffre_desc">Différents partenaires</p>
            </div>
            <div class="bloc_chiffre">
              <img src="../../assets/images/formation4.png" alt="image maintenance" class="icone_chiffres">
              <h1 id="formationsCount">0</h1>
              <p class="chiffre_desc">Formations proposées</p>
            </div>
          </div>
        </div>

        <script src="../../assets/js/aProposScript.js"></script>


    <?php include('../footer.php'); ?>
    
</body>
</html>