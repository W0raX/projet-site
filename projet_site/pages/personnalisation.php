<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techniques-Sabre laser</title>
    <?php
    include '../includes/styles.php';
    ?>
</head>
<body>
    <?php
    include '../includes/header.php';
    ?>
    <main>  
        <div class="perso-img"></div>
        <div class="story">
            <div class="skill-content ">
                <div class="container-fluid character-container">
                    <div class="col">
                        <h1 class="story-title">Personnalisation</h1>
                        <div class="row tabulation">
                            <div class="col ">
                                <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="lightsaber-tab" data-toggle="pill" href="#lightsaber" role="tab" aria-controls="lightsaber" aria-selected="true">Sabre-laser</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="mantis-tab" data-toggle="pill" href="#mantis" role="tab" aria-controls="mantis" aria-selected="false">Mantis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="bd1-tab" data-toggle="pill" href="#bd1" role="tab" aria-controls="bd1" aria-selected="false">BD-1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="poncho-tab" data-toggle="pill" href="#poncho" role="tab" aria-controls="poncho" aria-selected="false">Poncho</a>
                                    </li>
                                </ul>
                                <div class="tab-content ">
                                    <div class="tab-pane fade show active" id="lightsaber" role="tabpanel" aria-labelledby="lightsaber-tab">
                                        <div class="story-content">
                                            <div class="row story-container align-items-center">
                                                <div class="col-8 text-story">
                                                    <h2 class="story-title">Conseil</h2>
                                                    <p>Afin de pouvoir personnaliser son sabre-laser, il faudra avoir au préalable fouillé un peu partout dans les différentes zones ou dans les coffres disséminés un peu partout pour trouver des « skins ». Pour pouvoir changer l’apparence du sabre (en bleu ou en vert dans un premier temps), il faudra ensuite se rendre à un établi. Le premier que vous croiserez se situe sur la planète Bogano, mais vous en trouverez un dans le Mantis.Lorsque vous y aurez accès, vous serez tout d’abord en mesure de changer la couleur de votre sabre, puis sa poignée, son interrupteur, l’émetteur et son matériau de base. Vous aurez accès à un large choix, mais il faudra cependant avoir débloqué tous ces items pour modifier votre sabre.</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="../images/articles/thumb/perso/advice.jpg" onclick="openModal();currentSlide(1)" width="100%">
                                                </div>
                                            </div>
                                            <div class="row story-container align-items-center">
                                                <div class="col-4">
                                                    <img src="../images/articles/thumb/perso/color.jpg" width="100%">                    
                                                </div>
                                                <div class="col-8 text-story">
                                                    <h2 class="story-title">Couleur</h2>
                                                    <p>Afin d'obtenir plus de couleur de sabreil vous faudra avancer dans l'histoire, jusqu'à retrouver le crystal Kyber sur Ilum lors de votre premier passage sur la planète. Ne paniquez pas, vous aurez fait une grande partie de l'histoire avant d'y arriver, il vous faudra faire avec le bleu ou le vert une bonne partie du temps avant de débloquer les cinq autres couleurs de sabre. Vous pouvez changer cette couleur sur n'importe quelle table d'équipements de sabre, que ce soit dans votre vaisseau ou sur celles disséminées sur chaque planète.</p>
                                                </div>
                                            </div>
                                            <div class="row story-container align-items-center">
                                                <div class="col-8 text-story">
                                                    <h2 class="story-title">Double sabre-laser</h2>
                                                    <p>Pour le sabre laser à double lame, il est débloquable très tôt dans le jeu. Une fois votre première expédition sur Bogano terminé, vous pouvez commencer à visiter Dathomir, bien que l'histoire vous dit d'aller sur Zeffo. Sur Dathomir donc, vous pouvez explorer jusqu'à arriver sur une table d'equipement, sur laquelle vous débloquerez le sabre laser à double lame. Si vous ne voulez pas vous aventurer sur Dathomir aussi tôt dans votre partie, les Frères de la nuit et créatures locales y étant plus fortes que les ennemis des autres planètes, vous débloquerez ce sabre plus tard dans la partie, juste avant d'affronter la Neuvième Soeur. Ce sabre est l'arme la plus utile face à des groupes d'adversaires.</p>
                                                </div>
                                                <div class="col-4">
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">            
                                                                <img src="../images/articles/thumb/perso/double-saber.webp" width="100%">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="../images/articles/thumb/perso/double-saber-2.jpg" alt="Second slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row story-container align-items-center">
                                                <div class="col-4">
                                                    <img src="../images/articles/thumb/perso/materiau.jpg" width="100%">                    
                                                </div>
                                                <div class="col-8 text-story">
                                                    <h2 class="story-title">Materieaux</h2>
                                                    <p>Outre les formes de sabres, les couleurs du laser ou encore les différents thèmes disponibles, il est aussi possible de changer le matériau de votre arme. Disponible dans les coffres d'équipements disséminés sur les différentes planètes, il vous est possible de changer le matériau sur les tables de personnalisation de sabre laser. Voici donc tous les matériaux disponible dans le jeu et sur quelle planète les trouver.</p>
                                                </div>
                                            </div>
                                            <div class="row story-container align-items-center">
                                                <div class="col-8 text-story">
                                                    <h2 class="story-title">Chapter 4</h2>
                                                    <p>Mis à part les différentes formes de sabres, les couleurs du laser et le matériau de l'arme, on peut aussi modifier les apparences de trois parties du sabre laser : l'émetteur, l'interrupteur et la poignée. Dans Jedi Fallen Order, vous pouvez choisir de vous faire un sabre à thème entre ces trois parties, ou tout simplement les combiner entre différents thèmes de sabre.</p> 
                                                    <p>La plupart des composants se trouvent dans des caisses, mais certains sont sur les tables de personnalisations de sabre disséminées sur les différentes planètes. Enfin, le sabre Cere Junda est quant à lui débloqué lorsque vous trouver le crystal Kyber sur Ilum dans l'histoire. Voici donc les différents thèmes et où trouver chaque composant de chaque thème.</p>
                                                </div>
                                                <div class="col-4">
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">            
                                                                <img src="../images/articles/thumb/perso/partie.jpg" width="100%">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="../images/articles/thumb/histoire/ilum.jpg" alt="Second slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mantis" role="tabpanel" aria-labelledby="mantis-tab">
                                        <div class="col">
                                            <img src="/images/articles/thumb/perso/mantis.jpg"width="100%">
                                            <div class="text-custom">
                                                <p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bd1" role="tabpanel" aria-labelledby="bd1-tab">
                                        <div class="col">
                                            <img src="/images/articles/thumb/perso/bd1-paint.jpg"width="100%">
                                            <div class="text-custom">
                                                <p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="poncho" role="tabpanel" aria-labelledby="poncho-tab">
                                        <div class="col">
                                            <img src="/images/articles/thumb/perso/cal-custom.jpg"width="100%">
                                            <div class="text-custom">
                                                <p>Les ponchos présents dans le jeu n'apporte aucun avantage dans le gameplay, il modifie simplement l'apparence du personnage. </p>
                                                <p>Ces ponchos sont droppables dans les coffres que l'on trouve au fur et à mesure de l'histoire </p>
                                                <p>Voici un guide permettant de trouver tous les coffres du jeu : <a href="http://www.jeuxvideo.com/wikis-soluce-astuces/1144147/coffres-de-zeffo.htm"><img src="../images/articles/thumb/perso/ag.png" width="80px" height="auto"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include '../includes/buy.php';
    ?>
    </main>
    <?php
        include '../includes/footer.php';
    ?>
    <?php
        include '../includes/scripts.php';
    ?>
</body>
</html>