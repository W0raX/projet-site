<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boss-empire</title>
    <?php
    include '../includes/styles.php';
    ?>
</head>
<body>
    <?php
    include '../includes/header.php';
    ?>
    <main>  
        <div class="boss-img">
        </div>
        <div class="story">
            <div class="story-content ">
                <div class="container-fluid character-container">
                    <div class="col">
                        <h1 class="story-title">Boss</h1>
                        <p>Ici nous pouvons voir les antagonistes de Star Wars Jedi Fallen Order </p>
                    </div>
                    <div class="row tabulation">
                        <div class="col ">
                            <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="empire-tab" data-toggle="pill" href="#empire" role="tab" aria-controls="empire" aria-selected="true">Empire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="betes-tab" data-toggle="pill" href="#betes" role="tab" aria-controls="betes" aria-selected="false">Bêtes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="droide-tab" data-toggle="pill" href="#droide" role="tab" aria-controls="droide" aria-selected="true">Droïde</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="autres-tab" data-toggle="pill" href="#autres" role="tab" aria-controls="autres" aria-selected="false">Autres</a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane fade show active" id="empire" role="tabpanel" aria-labelledby="empire-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Second">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/seconde.jpg" alt="Card image cap"  >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">seconde soeur</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3"> 
                                            <?php 
                                            $datas = array(
                                                "target" => "Nine",
                                                "name" => "neuvième soeur",
                                                "image" => "../images/articles/thumb/boss/neuvieme.jpg"
                                            );
                                            include '../includes/card.php'; ?>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#ATST">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/vehicules.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">AT-ST</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Troopers">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/trooper.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">troopers</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#DV">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/darth_vader.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Dark Vador</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="betes" role="tabpanel" aria-labelledby="betes-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Oggdo">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/oggdo.jpg" alt="Card image cap"  >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Oggdo bogdo</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Rabid"> 
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/rabid.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Rabid jotaz</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Albino">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/albino.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Albino wyyschokk</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Nydak">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/nydak.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Nydak alpha</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Gorgana">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/gorgana.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Gorgana</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="droide" role="tabpanel" aria-labelledby="droide-tab">
                                    <div class="row ">
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Hexion">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/hexion.jpg" alt="Card image cap"  >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Droïde chasseur de la nuée d’Haxion</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Sonde" > 
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/sonde.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Droïde Sonde</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Security">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/security.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Droïde de sécurité</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Guardian">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/guardian.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Gardien du Tombeau</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="autres" role="tabpanel" aria-labelledby="autres-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Prime">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/prime.jpg" alt="Card image cap"  >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Chasseur de Primes de la Nuée d’Haxion</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Commando" > 
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/comando.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Commando de la Nuée d’Haxion</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3" data-toggle="modal" data-target="#Taron">
                                            <div class="card mb-4 boss-card-container">
                                                <div class="card boss-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/boss/taron.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Taron malicos</p>
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
            </div>
        </div>
    <?php
    include '../pages/description.php';
    ?>
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