<!DOCTYPE html>
<html lang="fr">

<?php $track = '../'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $track ?>img/logo.png">
    <title>Mon Parcours</title>

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
                <h2 class="title">Mon Parcours</h2>
            </div>

            <!-- DIVISION PARCOURS -->
            <div class="table_container">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Période</th>
                            <th>Gérer le patrimoine informatique</th>
                            <th>Répondre aux incidents et aux demandes d’assistance et d’évolution</th>
                            <th>Développer la présence en ligne de l’organisation</th>
                            <th>Travailler en mode projet</th>
                            <th>Mettre à disposition des utilisateurs un service informatique</th>
                            <th>Organiser son développement professionnel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="8">Réalisation en cours de formation</th>
                        </tr>
                        <tr>
                            <th><a href="<?= $track ?>mesPages/veille_techno.php">Veille techno</a></th>
                            <td>02/09/2022 au 16/05/2022</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <th><a href="https://www.linkedin.com/in/tristan-labaume-7b5868200/">Linkedin</a></th>
                            <td>02/09/2022 au 16/05/2022</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <th>Travail sur le contexte GSB en php (Partie Back)</th>
                            <td>18/12/2021 au 10/03/2022</td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Création d'une api</th>
                            <td>21/03/2022 au 22/04/2022</td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Création du portfolio</th>
                            <td>02/09/2022 au 16/05/2022</td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <th>Application web contexte GSB en vue.js (partie Front)</th>
                            <td>14/03/2022 au 16/05/2022</td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Réalisation d'un premier site web en (HTML/CSS)</th>
                            <td>09/11/2020 au 7/12/2020</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="8">Réalisations en milieu professionnel en cours de première année
                            </th>
                        </tr>
                        <tr>
                            <th>Utilisation du logiciel prestashop</th>
                            <td>24/05/2021 au 25/06/2021</td>
                            <td>X</td>
                            <td>X</td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Réalisation d'une documentation sur l'utilisation de prestashop</th>
                            <td>24/05/2021 au 25/06/2021</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="8">Réalisations en milieu professionnel en cours de seconde année
                            </th>
                        </tr>
                        <tr>
                            <th>Etude du cahier des charges</th>
                            <td>03/01/2022 au 11/03/2022</td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Réalisation d'un logiciel de gestion d'escape game</th>
                            <td>03/01/2022 au 11/03/2022</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td>X</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <?php require_once $track . 'includes/nav_js.php' ?>

</body>

</html>