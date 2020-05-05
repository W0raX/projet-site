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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="skill-img"></div>
                </div>
                <div class="carousel-item">
                    <div class="skill2-img"></div>
                </div>
                <div class="carousel-item">
                    <div class="skill3-img"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="story">
            <div class="skill-content ">
                <div class="container-fluid character-container">
                    <div class="col">
                    <h1 class="story-title">Techniques</h1>
                        <div class="skill-tree">
                            <img src="../images/articles/thumb/techniques/skill-tree.png" width="90%">
                        </div>
                    <div class="row tabulation">
                        <div class="col ">
                            <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="lightsaber-tab" data-toggle="pill" href="#lightsaber" role="tab" aria-controls="lightsaber" aria-selected="true">Sabre-laser</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="force-tab" data-toggle="pill" href="#force" role="tab" aria-controls="force" aria-selected="true">Force</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="health-tab" data-toggle="pill" href="#health" role="tab" aria-controls="health" aria-selected="false">Santé</a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane fade show active" id="lightsaber" role="tabpanel" aria-labelledby="lightsaber-tab">
                                    <div class="card-deck rowtech ">
                                        <div class="card">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=13" allowfullscreen></iframe>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 1-Overhead Slash</h5>
                                                <p class="card-text">Unlocks a powerful strike that is deadly against weaker enemies. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 2-Dash Strike</h5>
                                                <p class="card-text">Cal dashes forward and attacks his target. Jump while dashing to flip over the target instead. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 3-Leaping Slash</h5>
                                                <p class="card-text">Cal can perform another powerful attack after an Overhead Slash. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-deck rowtech">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 4-Whirlwind Throw</h5>
                                                <p class="card-text">Throws the double-bladed lightsaber in an area around Cal. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competences</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 5-Improved Dash</h5>
                                                <p class="card-text">Increase the distance that Cal can travel when using Dash Strike.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 6-Repulse</h5>
                                                <p class="card-text">An airborne attack that allows Cal to push away nearby enemies when he lands. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-deck rowtech">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 7-Sprint Strike </h5>
                                                <p class="card-text"> Attacking out of a sprint allows Cal to perform a special lightsaber attack.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competences</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 8-Lightsaber Throw </h5>
                                                <p class="card-text">Cal throws his lightsaber forward before pulling it back to him, hitting any enemies along the way. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 9-Power Throw</h5>
                                                <p class="card-text">Increases the range of Cal’s Lightsaber Throw.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-deck rowtech">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 10-Evasive Kick</h5>
                                                <p class="card-text">Attacking after a quick evade allows Call to quickly perform a kick attack.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competences</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 11-Delay Thrust</h5>
                                                <p class="card-text">Waiting longer to press attack after Cal swings his lightsaber allows him to perform a special attack with increased range.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title">12-Delay Combo</h5>
                                                <p class="card-text">Waiting longer to press attack after Cal swings his double-bladed lightsaber allows him to perform a continuous string of high-damage attacks.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lastrow">
                                        <div class="card-deck rowtech lastcard justify-content-center">
                                            <div class="card">
                                                <div class="video">
                                                    <video controls>
                                                        <source src="../images/design/test.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="card-body cardtech ">
                                                    <h5 class="card-title"> 13-Switch Attack</h5>
                                                    <p class="card-text">Cal performs a special attack while switching his lightsaber type.</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">1 point de competences</small>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="video">
                                                    <video controls>
                                                        <source src="../images/design/test.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="card-body cardtech">
                                                    <h5 class="card-title"> 14-Lightsaber Mastery</h5>
                                                    <p class="card-text">Increase all lightsaber damage.</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">1 point de competence</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="force" role="tabpanel" aria-labelledby="force-tab">
                                    <div class="card-deck rowtech ">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 1-Force Attunement </h5>
                                                <p class="card-text">Cal’s maximum Force is increased.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 2-Mass Push</h5>
                                                <p class="card-text">Holding Push allows Cal to push groups of enemies and stagger large enemies. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 3-Howling Push</h5>
                                                <p class="card-text">A powerful Push allowing Cal to send groups of enemies flying and knock down large targets. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-deck rowtech">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 4-Enhanced Force Recovery</h5>
                                                <p class="card-text">Cal regains more Force when he defeats an enemy, and regains some Force when he hits a blocking enemy.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competences</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 5-Empowered Slow</h5>
                                                <p class="card-text">Holding Slow allows Cal to slow his target for a longer duration. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 6-Burst Slow </h5>
                                                <p class="card-text">Holding Slow allows Cal to slow all targets around him. Increases slowed duration on target enemies. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-deck rowtech">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 7-Grasping Pull </h5>
                                                <p class="card-text">Holding Pull allows Cal to pull and hold most enemies. Large enemies can be yanked towards Cal. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competences</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 8-Howling Pull </h5>
                                                <p class="card-text">A powerful Pull that yanks groups of enemies toward Cal. Uses Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 9-Greater Force Attunement </h5>
                                                <p class="card-text">Cal’s maximum Force is increased.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lastrow">
                                        <div class="card-deck rowtech lastcard justify-content-center">
                                            <div class="card">
                                                <div class="video">
                                                    <video controls>
                                                        <source src="../images/design/test.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="card-body cardtech ">
                                                    <h5 class="card-title"> 10-The Power of Friendship</h5>
                                                    <p class="card-text">BD-1’s stim canisters completely refill your Force Meter.</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">1 point de competences</small>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="video">
                                                    <video controls>
                                                        <source src="../images/design/test.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="card-body cardtech">
                                                    <h5 class="card-title"> 11-Ultimate Force Attunement</h5>
                                                    <p class="card-text">Cal’s maximum Force is increased.</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">1 point de competence</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
                                    <div class="card-deck rowtech ">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 1-Survival Skills</h5>
                                                <p class="card-text">Cal’s maximum Life is increased.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 2-Precision Evade</h5>
                                                <p class="card-text">When performing a Precision Evade, Cal briefly slows enemies and recovers a small amount of Force.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 3-Superior Blocking</h5>
                                                <p class="card-text">Cal’s defenses are improved, allowing him to take less block stamina damage from incoming attacks.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-deck rowtech">
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 4-Agile Deflection</h5>
                                                <p class="card-text">Cal automatically deflects blaster bolts while he is sprinting or wall-running.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competences</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 5-Improved Stims</h5>
                                                <p class="card-text">Cal recovers additional Life when using a stim canister from BD-1.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="video">
                                                <video controls>
                                                    <source src="../images/design/test.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="card-body cardtech">
                                                <h5 class="card-title"> 6-Enhanced Survival Skills</h5>
                                                <p class="card-text">Cal’s maximum Life is increased.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">1 point de competence</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lastrow">
                                        <div class="card-deck rowtech lastcard justify-content-center">
                                            <div class="card">
                                                <div class="video">
                                                    <video controls>
                                                        <source src="../images/design/test.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="card-body cardtech ">
                                                    <h5 class="card-title"> 7-Expert Survival Skills</h5>
                                                    <p class="card-text">Cal’s maximum Life is increased.</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">1 point de competences</small>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="video">
                                                    <video controls>
                                                        <source src="../images/design/test.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                                <div class="card-body cardtech">
                                                    <h5 class="card-title"> 8-Personalized Stims</h5>
                                                    <p class="card-text">Cal recovers additional Life when using a stim canister from BD-1.</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">1 point de competence</small>
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