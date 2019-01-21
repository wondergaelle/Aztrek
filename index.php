<?php

require_once "model/database.php";


require_once "functions.php";

//le get header suivant perrmet de nommer le lien en fonction de la page sr laquelle on se trouve

getHeader("Accueil", "sejour");

?>


<header class="header-top">
    <img src="./images/logo-header.png" alt="" class="logo-header-fixe">


    <div class="video">
        <video autoplay muted loop src="./images/aztrek_site.mp4"></video>
    </div>

    <button class="nav-toggle" data-target=".main-nav">Menu<span></span></button>

    <?php require_once "layout/menu.php" ?>

    <div class="infos">

        <h1>Aztrek</h1>
        <p>Voyagez autrement ...</p>
    </div>
</header>

<!--contenu statique -->

<main class="main oh">
    <section class="about">

        <img src="images/img1-about.jpg" alt="coucher-de-soleil-montagne" class="photo-about-1">

        <div class="article-about">
            <div class="article-header">
                <h2 class="title-noir">Notre éthique </h2>
                <p>Organisateur de voyage en Amérique centrale,</p>
                <p>AZTREK propose des circuits hors des sentiers battus pour découvrir les régions les plus
                    authentiques de
                    l’Amérique centrale. </p>
            </div>
            <!-- les titres H6 apparaissent en filigramme -->
            <h6 class="overflow-clip">Voyagez</h6>

            <div class="article-bottom">
                <p>AZTREK s’inscrit dans une démarche d’écotourisme en planifiant des voyages responsables, dans
                    des
                    zones
                    naturelles, en respectant l’environnement et en travaillant en collaboration avec les
                    populations
                    locales</p>

                <a href="" class="btn-orange">> En savoir plus</a>
            </div>


        </div>

        <img src="./images/img2-about.jpg" alt="coucher-de-soleil-montagne" class="photo-about-2">
    </section>

    <!--    fin du contenu statique-->

    <section class="voyages">
        <div class="title-section">
            <h6 class="overflow-clip">Découvrez</h6>
            <h2 class="title-noir">Découvrez nos destinations</h2>
        </div>

        <article class="voyages-article">
            <!-- classe pour car a partir du medium sur 2 colonnes -->

            <div class="left">
                <div class="voyages-detail item">
                    <div class="contim"><img src="./images/img1-Guatemala-voyages.jpg" alt="Guatemala"></div>
                    <div class="continfos">
                        <p>Guatemala</p>
                        <p>Voyagez en sereinité</p>
                    </div>
                    <a href="pays.html" class="btn-voyages">Guatemala</a>
                </div>

                <div class="voyages-detail item">
                    <div class="contim"><img src="./images/img2-Costa-rica-voyages.jpg" alt="Costa-Rica"></div>

                    <div class="continfos">
                        <p>Costa-Rica</p>
                        <p>La nature et vous...</p>
                    </div>
                    <a href="" class="btn-voyages">Costa-Rica</a>
                </div>

            </div>

            <div class="right">
                <div class="voyages-detail item">
                    <div class="contim"><img src="./images/img3-Salvador-voyages.jpg" alt="Salavador">
                    </div>
                    <div class="continfos">
                        <p>Salvador</p>
                        <p>Au coeur des forêts ...</p>
                    </div>
                    <a href="" class="btn-voyages">Salavador</a>
                </div>
                <div class="voyages-detail item">
                    <div class="contim"><img src="./images/img4-Honduras-voyages.jpg" alt="Honduras">
                    </div>
                    <div class="continfos">
                        <p>Honduras</p>
                        <p>Au coeur des forêts ...</p>
                    </div>
                    <a href="" class="btn-voyages">Honduras</a>
                </div>
                <div class="voyages-detail item">
                    <div class="contim"><img src="./images/img5-Mexique-voyages.jpg" alt="Mexique">
                    </div>
                    <div class="continfos">
                        <p>Mexique</p>
                        <p>Les pyramides à vos pieds</p>
                    </div>
                    <a href="" class="btn-voyages">Mexique</a>
                </div>
            </div>

        </article>

        <a href="pays.html" class="btn-grey"> Nos destinations</a>

    </section>
    <section class="equipe">

        <div class="presentation">
            <h2 class="title-noir">Nos experts vous accompagnent</h2>
            <p>L’équipe de AZTREK vous accompagnera dans les démarches de préparation de votre voyage avant de vous
                guider à travers cette terre de contraste.</p>
            <h6 class="overflow-clip">Ensemble</h6>
        </div>

        <div class="equipe-1">
            <img src="./images/photo-equipe-1.jpg" alt="Photo-equipe-1" class="photo-equipe-1">
            <div id="detail-equipe1">
                <p>Hervé TISSIER</p><br>
                <P>ETIOPATHE</p><br>
                <P>Depuis le plus jeune page, j’ai toujours été dans la nature, le sport, le plein air et
                    l’aventure. Je
                    vous accompagne durant votre séjour pour vous faire découvrir les plus beaux panoramas de
                    l’Amérique
                    centrale, </P>
                <a href="" class="btn-orange">Rencontrez-le</a>
            </div>
        </div>

        <article class="membres-equipe">
            <h3>Découvrez nos ambassadeurs</h3>

            <h6 class="overflow-clip">Expériences</h6>

            <div class="gallerie-equipe">
                <div class="photo">
                    <img src="./images/photo-equipe-2.jpg" alt="Photo-equipe-2" class="photo-equipe">
                    <a href="" class="btn-equipe">Manue</a>
                </div>

                <div class="photo">
                    <img src="./images/photo-equipe-3.jpg" alt="Photo-equipe-3" class="photo-equipe">

                    <a href="" class="btn-equipe">Antoine</a>

                </div>
                <div class="photo">
                    <img src="./images/photo-equipe-4.jpg" alt="Photo-equipe-4" class="photo-equipe">
                    <a href="" class="btn-equipe">Coralie</a>
                </div>
                <div class="photo">
                    <img src="./images/photo-equipe-5.jpg" alt="Photo-equipe-5" class="photo-equipe">
                    <a href="" class="btn-equipe">Willy</a>
                </div>
                <div class="photo">
                    <img src="./images/photo-equipe-6.jpg" alt="Photo-equipe-6" class="photo-equipe">
                    <a href="" class="btn-equipe">Ben</a>
                </div>
                <div class="photo">
                    <img src="./images/photo-equipe-7.jpg" alt="Photo-equipe-7" class="photo-equipe">
                    <a href="" class="btn-equipe">David</a>
                </div>

            </div>
        </article>
        <a href="" class="btn-orange">Rencontrez-les</a>

    </section>
</main>

<section class="reseaux oh">


    <div class="title-section">
        <h6 class="overflow-clip">Partagez</h6>
        <h2 class="title-noir">Aztrek sur les réseaux</h2>
    </div>

    <div class="icon-reseau">
        <a href="#"><img src="./images/logo-facebook-equipe.jpg" alt="icon-facebook"></a>
        <a href="#"><img src="./images/logo-insta-equipe.jpg" alt="icon-facebook"></a>
    </div>
    <article class="reseaux-photos">
        <img src="./images/img-fb-1.jpg" alt="img-fb-1" class="photos-reseau">
        <img src="./images/img-fb-2.jpg" alt="img-fb-2" class="photos-reseau">
        <img src="./images/img-fb-3.jpg" alt="img-fb-3" class="photos-reseau">
        <img src="./images/img-fb-4.jpg" alt="img-fb-4" class="photos-reseau">
        <img src="./images/img-fb-5.jpg" alt="img-fb-5" class="photos-reseau">
        <img src="./images/img-fb-6.jpg" alt="img-fb-6" class="photos-reseau">
        <img src="./images/img-fb-7.jpg" alt="img-fb-7" class="photos-reseau">
        <img src="./images/img-fb-8.jpg" alt="img-fb-8" class="photos-reseau">
    </article>

</section>

<?php require_once "layout/footer.php"; ?>


