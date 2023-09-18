<?php

use App\Controllers\ConducteurController;
use App\Controllers\VoitureController;

    require_once '../Controllers/VoitureController.php';
    require_once '../Controllers/ConducteurController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/css/style.css">
</head>
<body>
    <h1>Accueil</h1>
    <?php
        $v1 = new VoitureController("Renault", "Jaune", 175);
        $v2 = new VoitureController("Fiat", "Vert", 90);
        $v3 = new VoitureController("Audi", "Vert", 130);
        $c1 = new ConducteurController("Charpentier", "Florian", 42);
        $c2 = new ConducteurController("Charpentier", "Patrick", 71);
    ?>
    <div class="flex">
        <div>
            <h2><?= $v1->getMarque() ?></h2>
            <h2><?= $v1->getPuissance() ?></h2>
            <h2><?= $v1->getCouleur() ?></h2>
        </div>
        <div>
            <h2><?= $v2->getMarque() ?></h2>
            <h2><?= $v2->getPuissance() ?></h2>
            <h2><?= $v2->getCouleur() ?></h2>
        </div>
        <?= $v3->getInfos() ?>
    </div>
    <div class="flex">
        <?= $c1->getConductor() ?>
        <?= $c2->getConductor() ?>
    </div>
</body>
</html>