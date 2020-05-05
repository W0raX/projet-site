<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personnages-principaux</title>
    <?php
    include '../includes/styles.php';
    ?>
</head>
<body>
    <?php
    include '../includes/header.php';
    ?>
    <main>  
        <div class="character-img">
        </div>
        <div class="story">
            <div class="story-content">
                <div class="container-fluid character-container">
                    <div class="row">
                        <div class="col">
                            <h1 class="story-title">Personnages</h1>
                            <p>Ici nous pouvons voir les protagonistes de Star Wars Jedi Fallen Order </p>
                        </div>
                    </div>
                    <div class="row tabulation">
                        <div class="col ">
                            <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="principaux-tab" data-toggle="pill" href="#principaux" role="tab" aria-controls="principaux" aria-selected="true">Principaux</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="secondaire-tab" data-toggle="pill" href="#secondaire" role="tab" aria-controls="secondaire" aria-selected="false">Secondaire</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="principaux" role="tabpanel" aria-labelledby="principaux-tab">
                                    <div class="row ">
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Cal">
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/cal.jpg" alt="Card image cap"  >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Cal Kestis</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Greez"> 
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/greez.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Greez Dritus</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Cere">
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/cere.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Cere Junda</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#BD1">
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/bd1.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">BD-1</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="secondaire" role="tabpanel" aria-labelledby="secondaire-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Saw">
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/saw.jpg" alt="Card image cap"  >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Saw Gerrera</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Jaro"> 
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/jaro.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Jaro Tapal</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Eno">
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/eno.jpg" alt="Card image cap" >
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Eno Cordova</p>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3" data-toggle="modal" data-target="#Merrin">
                                            <div class="card mb-4 character-card-container">
                                                <div class="card character-card-content" style="width: 100%;">
                                                    <img class="card-img-top" src="../images/articles/thumb/personnages/Merrin.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text text-secondary">Merrin</p>
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