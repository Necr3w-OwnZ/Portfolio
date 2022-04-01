<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "");
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']);

    $articles = $bdd->prepare('SELECT * FROM article WHERE id = ?');
    $articles->execute(array($get_id));

    if ($articles->rowCount() == 1) {
        $articles = $articles->fetch();
        $titre = $articles['titre'];
        $id = $articles['id'];
        $text = $articles['text'];
    } else {
        die('Cette article n\'existe pas ou à été supprimé !');
    }
} else {
    die('erreur');
}
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
        <!-- ARTICLE CONTENTE -->
        <div class="article_content">

            <!-- HEAD TITLE -->
            <div class="head_title">
                <h2 class="title"><?= $titre ?></h2>
            </div>

            <img src="../illustration/<?= $id ?>.jpg" />
            <p><?= $text ?></p>
            <a class="back_button" href="veille_techno.php">RETOUR</a>
        </div>
    </div>

    <?php require_once $track . 'includes/nav_js.php' ?>

</body>

</html>