<!DOCTYPE html>
<html lang="fr">

<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$count = -2;
$track = '';
for ($i = 0; strlen($url) > $i; $i++) {
    $position = strpos($url, '/');
    if ($position === false) {
        break;
    } else {
        $url = substr($url, ($position + 1));
        $count++;
    }
}

for ($o = 0; $count > $o; $o++) {
    $track = $track . "../";
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $track ?>img/logo.png">
    <title>Erreur 404 !!</title>

    <link rel="stylesheet" href="<?= $track ?>css/erreur.css">
    <link rel="stylesheet" href="<?= $track ?>css/nav.css">
    <link rel="stylesheet" href="<?= $track ?>css/style.css">

</head>

<body>

    <?php require_once '../includes/loader_bar_background.php' ?>

    <div class="page">
        <div class="div_content">
            <div class="title">
                <h1>
                    Hoo ! Une erreur 404 apparaît !
                </h1>
            </div>
            <div class="bis_title">
                <h2>
                    Cette page est sûrement en construction !
                </h2>
            </div>
        </div>
    </div>

    <?php require_once '../includes/nav_js.php' ?>

</body>

</html>