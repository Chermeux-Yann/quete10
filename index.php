<!DOCTYPE html>
<html lang="fr">
<?php include_once 'includes/head.php'; ?>

<body>
    <?php
    include_once 'includes/header.php';
    include_once 'class/Learner.php';
    include_once 'class/Manager.php';
    include_once 'config/Database.php';
    ?>

    <section class="container-fluid ">
        <div class="row justify-content-center">
            <?php

            //create table
            $manager = new Manager();
            if (isset($_POST['createTable'])) {
                $manager->createTable();
                echo "<h1>la table vien d'être créer</h1>";
            }

            //create value 
            $manager = new Manager();
            if (isset($_POST['createValue'])) {
                $manager->createValue();
                echo "<h1>les values sont bien créer</h1>";
            }

            //vider la table 
            if (isset($_POST['viderTable'])) {
                $manager->viderTable();
                echo "<h1>table vider !</h1>";
            }

            //delete la table 
            if (isset($_POST['deleteTable'])) {
                $manager->deleteTable();
                echo "<h1>table delete !</h1>";
            }

            // color list décroissant
            $manager = new Manager();
            if (isset($_POST['colorList'])) {
                $list = $manager->color();
                if (!empty($list)) {
                    foreach ($list as $value) {  ?>

                        <div class="card mb-3" style="width: 28rem;">
                            <div class="row no-gutters">
                                <div class=" ">
                                    <div class="card-body text-center ">
                                        <h5 class="card-title"><?php echo $value['poisson']; ?></h5>
                                        <p class="card-text"><strong>description: </strong><?php echo $value['description']; ?></p>
                                        <p class="card-text"><strong>Espérence de vie: </strong><?php echo $value['age']; ?> </p>
                                        <p class="card-text"><strong>Taille adulte: </strong> <?php echo $value['size']; ?></p>
                                        <p class="card-text"> <strong>Couleur: </strong><?php echo $value['couleur']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
            }

            // read All 
            $manager = new Manager();
            if (isset($_POST['poisson'])) {
                $list = $manager->readAll('poisson');
                if (!empty($list)) {
                    foreach ($list as $value) { ?>

                        <div class="card mb-3" style="width: 28rem;">
                            <div class="row no-gutters">
                                <div class=" ">
                                    <div class="card-body text-center ">
                                        <h5 class="card-title"><?php echo $value['poisson']; ?></h5>
                                        <p class="card-text"><strong>description: </strong><?php echo $value['description']; ?></p>
                                        <p class="card-text"><strong>Espérence de vie: </strong><?php echo $value['age']; ?> </p>
                                        <p class="card-text"><strong>Taille adulte: </strong> <?php echo $value['size']; ?></p>
                                        <p class="card-text"> <strong>Couleur: </strong><?php echo $value['couleur']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="justify-content-center">
                        <h1>La table est vide !</h1>
                    </div>
                <?php
                }
            }

            //read one
            if (isset($_POST['poissonOne'])) {
                $list = $manager->readOne('poissonOne');
                if (!empty($list)) { ?>

                    <div class="card mb-3" style="width: 28rem;">
                        <div class="row no-gutters">
                            <div class=" ">
                                <div class="card-body text-center ">
                                    <h5 class="card-title"><?php echo $list['poisson']; ?></h5>
                                    <p class="card-text"><strong>description: </strong><?php echo $list['description']; ?></p>
                                    <p class="card-text"><strong>Espérence de vie: </strong><?php echo $list['age']; ?> </p>
                                    <p class="card-text"><strong>Taille adulte: </strong> <?php echo $list['size']; ?></p>
                                    <p class="card-text"> <strong>Couleur: </strong><?php echo $list['couleur']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }

            //delete one 
            if (isset($_POST['deleValue'])) {
                $manager->deleteOne();
                echo '<h1>Le poisson vient d\'être supprimé !</h1>';
            }

            // update en Kraken
            $manager = new Manager();
            if (isset($_POST['updateValue'])) {
                $_poisson = $manager->readUpdate();
                $manager->changeKraken($_poisson['id']);
                echo "<h1>le poisson devien un KRAKEN</h1>";
            }
            ?>
        </div>
    </section>

    <?php include_once 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>