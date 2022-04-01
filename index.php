<!DOCTYPE html>
<html lang="fr">

<?php $track = ''; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $track ?>img/logo.png">
    <title>Mon Portfolio</title>

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
                <h2 class="title"><img src="img/plume.png"> Mon Portfolio <img src="img/plume.png"></h2>
            </div>

            <!-- VIDEO -->
            <video class="home_video" autoplay loop muted>
                <source src="img/video.mp4" type="video/mp4">
            </video>

            <div class="div_home">
                <!-- TEXT DINAMIQUE -->
                <h1 class="home_title">BIENVENUE</h1>

                <!-- TEXT -->
                <div class="home_bar1"></div>
                <div class="home_text">
                    Qu'est-ce que le BTS SIO ?<br />
                    Le Brevet de Technicien Supérieur Services informatique aux Organisations (SIO) s’adresse à ceux qui souhaitent se former en deux ans aux métiers d’administrateur réseau ou de développeur pour intégrer directement le marché du travail ou continuer des études dans le domaine de l’informatique.
                    <br />
                    Le BTS Services informatique aux Organisations est un diplôme reconnu par l’état de niveau Bac+2. Cette formule répond aux attentes de la profession en matière de qualification. Le programme a évolué en fonction de la place et du rôle des TIC (Technologies d’Information Communication) et propose deux spécialités bien distinctes : le BTS SIO SISR et le BTS SIO SLAM.
                    <br />
                    Il associe aux enseignements théoriques (en contrôle continu et final) et professionnels, deux stages en entreprise (12 semaines réparties sur les deux années d’études).
                    <br></br>
                    Les deux options :
                    <br></br>
                    <div class="space">
                        <div class="home_bar3"></div>
                        Option A - SISR<br />
                    </div>
                    <div class="space">
                        <div class="home_bar3"></div>
                        L’option Solutions d’infrastructure, systèmes et réseaux forme des professionnels des réseaux et équipements informatiques (installation, maintenance, sécurité).
                        <br />
                        Les techniciens supérieurs en informatique option SISR, peuvent accéder aux métiers de :
                        <br />
                        Administrateur systèmes et réseaux,<br />
                        Informaticien support et déploiement,<br />
                        Pilote d’exploitation,<br />
                        Support systèmes et réseaux,<br />
                        Technicien d’infrastructure,<br />
                        Technicien de production,<br />
                        Technicien micro et réseaux.
                    </div>
                    <br />
                    <div class="space">
                        <div class="home_bar2"></div>
                        Option B - SLAM<br />
                    </div>
                    <div class="space">
                        <div class="home_bar2"></div>
                        L’option Solutions logicielles et applications métiers forme des spécialistes des logiciels (rédaction d’un cahier des charges, formulation des besoins et spécifications, développement, intégration au sein de la société).
                        <br />
                        Les techniciens supérieurs en informatique option SLAM, sont préparés aux métiers de :
                        <br />
                        Développeur d’applications informatiques,<br />
                        Développeur informatique,<br />
                        Analyste d’applications ou d’études,<br />
                        Analyste programmeur,<br />
                        Chargé d’études informatiques,<br />
                        Informaticien d’études,<br />
                        Programmeur analyste,<br />
                        Programmeur d’applications,<br />
                        Responsable des services applicatifs,<br />
                        Technicien d’études informatiques
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require_once $track . 'includes/nav_js.php' ?>

</body>

</html>