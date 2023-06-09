<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amaris Telecom</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/navbar.css">
    <link rel="stylesheet" href="../../style/footer.css">
    <link rel="stylesheet" href="../../style/carrousel.css">
    <script src="./../../assets/js/fonctions.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
    
    <script src="../../scroll-entrance-master/src/scroll-entrance.js"></script>
</head>
<body>
    <?php include('../navbar.php'); ?>

    <div class="body">
        <div id="carroussel_intro">
            <section class="section_carrousel" aria-label="images_carrousel">
                <div class="carrousel" data-carousel>
                    <button id="button_carrousel_next" class="bouton_carrousel next" data-carousel-button="prev">&#8250;</button>
                    <button class="bouton_carrousel prev" data-carousel-button="next">&#8249;</button>
                    <ul data-slides>
                        <li class="slide active">
                            <img class="image_carrousel" src="../../assets/images/IMG_8541.jpg" alt="image1">
                            <span class="carrousel-text fade" data-entrance="fade">
                                <h1>Services de conseil et de formation</h1>
                                <p>AMARIS est experte en téléphonie, en télécommunications et en informatique depuis plus de 24 ans</p>
                            </span>
                        </li>
                        <li class="slide">
                            <img class="image_carrousel" id="image_telephone" src="../../assets/images/IMG_8542.jpg" alt="image2">
                            <span class="carrousel-text">
                                <h1>Services d'installation et de maintenance</h1>
                                <p>AMARIS réalise également des installations téléphoniques et assure la maintenance du matériel</p>
                            </span>
                        </li>
                        <li class="slide">
                            <img class="image_carrousel" src="../../assets/images/IMG_8550.jpg" alt="image3">
                            <span class="carrousel-text">
                                <h1>Environnement de formation agréable</h1>
                                <p>Nous vous accueillons dans nos locaux situés à Levallois-Perret</p>
                            </span>
                        </li>
                        <li class="slide"><img class="image_carrousel" src="../../assets/images/chm.jpg" alt="image3"><span class="carrousel-text"><h1>Nos références</h1><p>Amaris est appuyée par des références de renom et bénéficie d'un partenariat exclusif avec le CHM</p></span></li>
                    </ul>
                </div>
            </section>
            <section>
                <div class="bas_carrousel">
                    <ul class="bas_carrousel_point">
                        <li class="point active" data-active></li>
                        <li class="point" data-inactive></li>
                        <li class="point" data-inactive></li>
                        <li class="point" data-inactive></li>
                    </ul>
                </div>
            </section>
        </div>
        
        <div id="presentation_section">
            <div class="titre">
                <h1>Au service des professionnels</h1>
            </div>
            <div id="presentation_elements">
                <div class="element_presentation">
                    <div class="icone_presentation">
                        <img src="./../../assets/images/formation4_256.png" alt="image formations" class="image_presentation">
                    </div>
                    <div class="element_presentation_text  fade" data-entrance="fade">
                        <div>
                            <h3>Formation</h3>
                        </div>
                        <div>
                            <p>Partage d'expertise et de solutions depuis plus de 20 ans.</p>
                        </div>
                        <div>
                            <button type="button" class="bouton">En savoir plus</button>
                        </div>
                    </div>
                    
                </div>
                <div class="element_presentation">
                    <div>
                        <img  src="./../../assets/images/conseil3_256.png" alt="image conseil" class="image_presentation">
                    </div>
                    <div class="element_presentation_text  fade" data-entrance="fade">
                        <div>
                            <h3>Conseil</h3>
                        </div>
                        <div>
                            <p>Service d'accompagnement personnalisé, rapide et fiable.</p>
                        </div>
                        <div>
                            <button type="button" class="bouton">En savoir plus</button>
                        </div>
                    </div>
                </div>
                <div class="element_presentation">
                    <div >
                        <img src="./../../assets/images/installation_telephone2_256.png" alt="image telephone installation" class="image_presentation">
                    </div>
                    <div class="element_presentation_text  fade" data-entrance="fade">
                        <div>
                            <h3>Installation</h3>
                        </div>
                        <div>
                            <p>Mise en place d'équipements téléphoniques et informatiques.</p>
                        </div>
                        <div>
                            <button type="button" class="bouton">En savoir plus</button>
                        </div>
                    </div>
                </div>
                <div class="element_presentation">
                    <div>
                        <img src="./../../assets/images/maintenance3_256.png" alt="image maintenance" class="image_presentation">
                    </div>
                    <div class="element_presentation_text  fade" data-entrance="fade">
                        <div>
                            <h3>Maintenance</h3>
                        </div>
                        <div>
                            <p>Suivi continu du matériel des professionnels.</p>
                        </div>
                        <div>
                            <button type="button" class="bouton">En savoir plus</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>

        <div id="video_section">
            <div>
                <div class="text fade" data-entrance="from-left">
                    <h2>Jacques Bannaire</h2>
                    <p>Expert en téléphonie et en informatique, en conseil et en formation, le directeur d'AMARIS a exercé depuis plus de 20 ans en France et à l'étranger notamment auprès d'ALCATEL Coopération Internationale.</p>
                    <div>
                        <button type="button" class="bouton" style="margin-top: 40px; ">Découvrir l'équipe</button>
                    </div>
                </div>

                <div class="container-iframe fade" data-entrance="fade">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/X7Ucy7FRMeY?autoplay=1&mute=1&rel=0"></iframe>
                </div>
            </div>
        </div>

        <div id="avis_section">
            <div class="titre">
                <h1 class="fade" data-entrance="fade">Les avis de nos clients</h1>
            </div>
            <div class="avis_container">
                <div class="avis fade" data-entrance="fade">
                <div class="informations">
                    <h2>Titre avis</h2>
                    <div class="etoiles">
                        <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                    </div>
                </div>
                <div class="commentaires">
                    <p>
                        Simple, claire, rapide. Message de validation dès le lendemain, suivi rapide. Je ne peux qu'être satisfaite
                    </p>
                </div>
                <div class="nom_prénom_date">
                    <h4>le 99/99/9999</h4>
                    <h4>Nom prénom</h4>
                </div>
                </div>
                <div class="avis fade" data-entrance="fade">
                    <div class="informations">
                        <h2>Titre avis</h2>
                        <div class="etoiles">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        </div>
                    </div>
                    <div class="commentaires">
                        <p>
                            Simple, claire, rapide. Message de validation dès le lendemain, suivi rapide. Je ne peux qu'être satisfaite
                        </p>
                    </div>
                    <div class="nom_prénom_date">
                        <h4>le 99/99/9999</h4>
                        <h4>Nom prénom</h4>
                    </div>
                </div>
                <div class="avis fade" data-entrance="fade">
                    <div class="informations">
                        <h2>Titre avis</h2>
                        <div class="etoiles">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        </div>
                    </div>
                    <div class="commentaires">
                        <p>
                            Simple, claire, rapide. Message de validation dès le lendemain, suivi rapide. Je ne peux qu'être satisfaite
                        </p>
                    </div>
                    <div class="nom_prénom_date">
                        <h4>le 99/99/9999</h4>
                        <h4>Nom prénom</h4>
                    </div>
                </div>
                <div class="avis fade" data-entrance="fade">
                        <div class="informations">
                            <h2>Titre avis</h2>
                            <div class="etoiles">
                                <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                                <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                                <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                                <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                                <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            </div>
                        </div>
                        <div class="commentaires">
                            <p>
                                Simple, claire, rapide. Message de validation dès le lendemain, suivi rapide. Je ne peux qu'être satisfaite
                            </p>
                        </div>
                        <div class="nom_prénom_date">
                            <h4>le 99/99/9999</h4>
                            <h4>Nom prénom</h4>
                        </div>
                </div>
                <div class="avis fade" data-entrance="fade">
                    <div class="informations">
                        <h2>Titre avis</h2>
                        <div class="etoiles">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                            <img src="../../assets/icons/etoile-jaune.png" alt="etoile icon" class="logo etoile">
                        </div>
                    </div>
                    <div class="commentaires">
                        <p>
                            Simple, claire, rapide. Message de validation dès le lendemain, suivi rapide. Je ne peux qu'être satisfaite
                        </p>
                    </div>
                    <div class="nom_prénom_date">
                        <h4>le 99/99/9999</h4>
                        <h4>Nom prénom</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="carrousel_partenaires">
            <div class="titre titre_partenaire">
                <h1 class="fade" data-entrance="fade">Ils nous font confiance</h1>
            </div>
            <div class="carrousel_partenaires fade" data-entrance="fade">
                <div class="carrousel_partenaires-enfant premier">
                    <div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-acadomia.png" alt="logo acadomia">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-bcsh.jpg" alt="logo bcsh">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-BNP-Paribas.jpg" alt="logo bnp">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-chc.jpg" alt="logo chc">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-CHM.png" alt="logo CHM">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-credit-agricole.jpg" alt="logo credit agricole">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-dgac.jpg" alt="logo dgac">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-Enedis-ERDF.png" alt="logo enedis">
                        </div>
                    </div>
                    <div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-acadomia.png" alt="logo acadomia">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-bcsh.jpg" alt="logo bcsh">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-BNP-Paribas.jpg" alt="logo bnp">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-chc.jpg" alt="logo chc">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-CHM.png" alt="logo CHM">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-credit-agricole.jpg" alt="logo credit agricole">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-dgac.jpg" alt="logo dgac">
                        </div>
                        <div class="partenaire ligne1">
                            <img src="./../../assets/logo/logo-Enedis-ERDF.png" alt="logo enedis">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carrousel_partenaires fade" data-entrance="fade">
                <div class="carrousel_partenaires-enfant deuxieme">
                    <div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-etat-francais.png" alt="logo etat-francais">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-FFB.jpg" alt="logo FFB">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-ineo.jpg" alt="logo ineo">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-medicall.png" alt="logo medicall">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-moco.png" alt="logo moco">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-ratp.png" alt="logo ratp">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-Thales.png" alt="logo Thales">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-Sebia.png" alt="logo Sebia">
                        </div>
                    </div>
                    <div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-etat-francais.png" alt="logo etat-francais">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-FFB.jpg" alt="logo FFB">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-ineo.jpg" alt="logo ineo">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-medicall.png" alt="logo medicall">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-moco.png" alt="logo moco">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-ratp.png" alt="logo ratp">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-Thales.png" alt="logo Thales">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-Sebia.png" alt="logo Sebia">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carrousel_partenaires fade" data-entrance="fade">
                <div class="carrousel_partenaires-enfant troisieme">
                    <div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/Logo_Chevilly-Larue.png" alt="logo Chevilly-Larue">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-saint-germain-laye.jpg" alt="logo saint germain en laye">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo_Ville_Choisy-le-Roi.png" alt="logo choisy le roi">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-vigneux.png" alt="logo vigneux">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo_metro_rvb.jpg" alt="logo montpellier metro">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-port-du-havre.jpg" alt="logo port du havre">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-vigneux.png" alt="logo vigneux">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo_metro_rvb.jpg" alt="logo montpellier metro">
                        </div>
                    </div>
                    <div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/Logo_Chevilly-Larue.png" alt="logo Chevilly-Larue">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-saint-germain-laye.jpg" alt="logo saint germain en laye">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo_Ville_Choisy-le-Roi.png" alt="logo choisy le roi">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-vigneux.png" alt="logo vigneux">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo_metro_rvb.jpg" alt="logo montpellier metro">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-port-du-havre.jpg" alt="logo port du havre">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo-vigneux.png" alt="logo vigneux">
                        </div>
                        <div class="partenaire ligne2">
                            <img src="./../../assets/logo/logo_metro_rvb.jpg" alt="logo montpellier metro">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>

    <div id="darkButton">
        <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="checkbox-label">
            <img class="moon" src="./../../assets/icons/moon.png" alt="moon svg">
            <img class="sun" src="./../../assets/icons/sun.png" alt="moon svg">
            <span class="ball"></span>
        </label>
    </div>

    <?php include('../footer.php'); ?>
    
</body>
</html>