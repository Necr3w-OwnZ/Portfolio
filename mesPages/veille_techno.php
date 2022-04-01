<?php
// $bdd = new PDO("mysql:host=127.0.0.1;dbname=tristan;charset=utf8", "tristan", "Carriat2020");
// $article = $bdd->query('SELECT * FROM article ORDER BY date_time_publication DESC')->fetchAll();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "");
$article = $bdd->query('SELECT * FROM article ORDER BY date_time_publication DESC')->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<?php $track = '../'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $track ?>img/logo.png">
    <title>Veille Technologique</title>

    <link rel="stylesheet" href="<?= $track ?>css/nav.css">
    <link rel="stylesheet" href="<?= $track ?>css/style.css">

</head>

<body>

    <?php require_once $track . 'includes/loader_bar_background.php' ?>

    <!-- PAGE DIVISION -->
    <div class="div_page">

        <!-- DIVISION CONTENT -->
        <div class="div_contenu">

            <!-- HEAD TITLE -->
            <div class="head_title">
                <h2 class="title">Veille Technologique</h2>
            </div>

            <!-- DIVISION VEILLE -->
            <div class="card_container veille_div">
                <?php foreach ($article as $unArticle) { ?>
                    
                    <div class="box">
                        <span></span>
                        <div class="content">
                            <h2><?= $unArticle['titre'] ?></h2>
                            <a href="article.php?id=<?= $unArticle['id'] ?>">VOIR PLUS</a>
                        </div>
                        <div class="img" style="background-image: url('../illustration/<?= $unArticle['id'] ?>.jpg')"></div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </div>

    <?php require_once $track . 'includes/nav_js.php' ?>

</body>

</html>