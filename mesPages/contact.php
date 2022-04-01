<?php

//mettez ici votre adresse mail
$VotreAdresseMail = "labaume.tristan@gmail.com";

// si le bouton "Envoyer" est cliqué
if (isset($_POST['envoyer'])) {

    //on vérifie que le champ mail est correctement rempli
    if (empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {

        //on vérifie que l'adresse est correcte
        if (!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i", $_POST['mail'])) {
            echo "L'adresse mail entrée est incorrecte";
        } else {

            //on vérifie que le champ sujet est correctement rempli
            if (empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            } else {

                //on vérifie que le champ message n'est pas vide
                if (empty($_POST['message'])) {
                    echo "Le champ message est vide";
                } else {

                    //on renseigne les entêtes de la fonction mail de PHP
                    $Entetes = "From: " . $_POST['mail'] . "\r\n" . "Reply-To: " . $_POST['mail'] . "\r\n" . "X-Mailer: PHP/" . phpversion();

                    $Mail = $_POST['mail'];
                    $Sujet = '=?UTF-8?B?' . base64_encode($_POST['sujet']) . '?='; //Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 $
                    $Message = htmlentities($_POST['message'], ENT_QUOTES, "UTF-8"); //htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML

                    //en fin, on envoi le mail
                    if (mail($VotreAdresseMail, $Sujet, nl2br($Message))) { //la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                        echo "Le mail à été envoyé avec succès!";
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                    }
                }
            }
        }
    }
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
    <title>Me contacter</title>

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
                <h2 class="title">Me contacter</h2>
            </div>

            <!-- FORM CONTACT -->
            <!-- <form action="contact.php" method="post">
                <input type="text" name="mail" value="mail" />
                <input type="text" name="sujet" value="sujet" />
                <textarea name="message"></textarea>
                <input type="submit" name="envoyer" value="Envoyer" />
            </form> -->
            <form action="contact.php" method="POST" class="form form_contact">

                <div class="form_field">
                    <label for="mail">
                        <div class="mail"></div>
                    </label>
                    <input class="text" type="text" name="mail" placeholder="Votre E-Mail" required />
                </div>

                <div class="form_field">
                    <label for="sujet">
                        <div class="sujet"></div>
                    </label>
                    <input class="text" type="text" name="sujet" placeholder="Votre Sujet" required />
                </div>

                <div class="form_field">
                    <textarea class="message" name="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>

                <div class="form_field">
                    <input class="envoyer" type="submit" value="ENVOYER" />
                </div>

            </form>

        </div>

    </div>

    <?php require_once $track . 'includes/nav_js.php' ?>

</body>

</html>