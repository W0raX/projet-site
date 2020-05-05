<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'accueil</title>
    <?php
    include './includes/styles.php';
    ?>
</head>
<body>
    <?php
    include './includes/header.php';
    ?>
    <main>
        <div class="video">
            <video autoplay muted loop>
                <source src="images/design/test.mp4" type="video/mp4">
            </video>
        </div>

        <div class="introduction">
            <div class="introduction-content">
                <h1 class="inroduction-title">Bienvenue jeune Padawan</h1>
                <p>Star Wars Jedi: Fallen Order est un jeu vidéo d'action-aventure, basé sur la licence Star Wars, développé par Respawn Entertainment et édité par Electronic Arts. </p>
                <p>Le jeu est sorti le 15 novembre 2019 sur Windows, PlayStation 4 et Xbox One.</p>
                <p>Le jeu se place chronologiquement entre les épisodes 3 et 4, soit 5 ans après Star Wars, épisode III : La Revanche des Sith.</p>
                <p>Star Wars Jedi: Fallen Order est un jeu d'action-aventure en solo et en vue à la troisième personne2.</p>
                <p>Le joueur incarne Cal Kestis (un apprenti Jedi), aux pouvoirs peu développés, qui est en possession d'un sabre laser et d'un droide, nommé BD-1 qu'il rencontrera durant sa première mission sur la planète Zeffo.</p>
            </div>
        </div>
        <div class="actuality">
            <div class="container-fluid actuality-container">
                <div class="row">
                    <div class="col">
                        <h2 class="actuality-title">Actualités</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-4">
                            <img src="images/articles/thumb/actualites/star_1.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3 class="card-title">19 janvier 2020</h3>
                                <p class="card-text">5 histoires qu’on aimerait voir dans Star Wars Jedi : Fallen Order 2.</p>
                                <a href="https://jeux.ca/jeux-video/5-histoires-quon-aimerait-voir-dans-star-wars-jedi-fallen-order-2/" class="btn btn-primary">jeux.ca</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card  mb-4">
                            <img src="images/articles/thumb/actualites/star_4.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3 class="card-title">15 janvier 2020</h3>
                                <p class="card-text">Star Wars Jedi Fallen Order : Les bonus de précommande désormais accessibles à tous.</p>
                                <a href="http://www.jeuxvideo.com/news/1170732/star-wars-jedi-fallen-order-les-bonus-de-precommande-desormais-accessibles-a-tous.htm" class="btn btn-primary">jeuxvideo.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card  mb-4">
                            <img src="images/articles/thumb/actualites/star_2.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3 class="card-title">14 janvier 2020</h3>
                                <p class="card-text">Star Wars : Jedi Fallen Order - Critique. Un grand jeu Star Wars.</p>
                                <a href="http://www.jeuxvideo.com/jeux/ps4/jeu-858992/avis/" class="btn btn-primary">jeuxvideo.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card  mb-4">
                            <img src="images/articles/thumb/actualites/star_3.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3 class="card-title">14 janvier 2020</h3>
                                <p class="card-text">Star Wars Jedi Fallen Order : Lucasfilm ne voulait pas valider le jeu au début</p>
                                <a href="https://www.begeek.fr/star-wars-jedi-fallen-order-lucasfilm-ne-voulait-pas-valider-le-jeu-au-debut-334461" class="btn btn-primary">begeek.fr</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="col ">
                        <a  class="actuality-more" href="pages/actualites.php">Voir Plus...</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include './includes/buy.php';
    ?>
    </main>
    <?php
    include './includes/footer.php';
    ?>
    <?php
    include './includes/scripts.php';
    ?>
</body>
</html>
