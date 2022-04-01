<!DOCTYPE html>
<html lang="fr">

<?php $track = '../'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $track ?>img/logo.png">
    <title>A Propos de moi</title>

    <link rel="stylesheet" href="<?= $track ?>css/nav.css">
    <link rel="stylesheet" href="<?= $track ?>css/style.css">

</head>

<body>

    <?php require_once $track.'includes/loader_bar_background.php' ?>

    <!-- PAGE DIVISION -->
    <div class="div_page">

        <!-- DIVISION CONTENT -->
        <div class="div_contenu">

            <!-- HEAD TITLE -->
            <div class="head_title">
                <h2 class="title">A propos de moi</h2>
            </div>

            <!-- DIVISION PRESENTATION -->
            <div class="card_presentation">

                <!-- ABOUT ME PRESENTATION CARD -->
                <div class="card_picture">

                    <span class="picture"></span>
                    <span class="picture_neon"></span>

                    <div class="contact">
                        <div class="presentation_desc">
                            <h2 class="name">LABAUME TRISTAN</h2>
                        </div>

                        <a class="moncv" href="<?= $track ?>cv_tristan_labaume.pdf">MON CV</a>

                        <div class="presentation_desc">
                            <h3 class="name">
                                <p class="min_title">E-mail :</p>tristan.labaume@gmail.com<br></br>
                                <p class="min_title">Télephone :</p>+33 6 14 19 92 62<br></br>
                                <p class="min_title">Adresse :</p>148 Chemin de Molessiat,<br /> 01560 St Nizier le Bouchoux<br />
                            </h3>
                        </div>
                    </div>

                </div>

                <!-- PRENSENTATION CARD -->
                <div class="presentation_card">

                    <div class="head_content">
                        <h1 class="title_head_content">Mes Compétences</h1>
                    </div>

                    <div class="bar_container">
                        <div class="box" onmouseover="mouseoverLeft(0)" onmouseout="mouseoutLeft(0)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>HTML</h2>
                                <p class="pourcent">90<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(1)" onmouseout="mouseoutLeft(1)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>CSS</h2>
                                <p class="pourcent">85<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(2)" onmouseout="mouseoutLeft(2)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>JS</h2>
                                <p class="pourcent">70<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(3)" onmouseout="mouseoutLeft(3)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>PHP</h2>
                                <p class="pourcent">80<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(4)" onmouseout="mouseoutLeft(4)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>C#</h2>
                                <p class="pourcent">90<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(5)" onmouseout="mouseoutLeft(5)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>SQL</h2>
                                <p class="pourcent">75<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(6)" onmouseout="mouseoutLeft(6)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>Java</h2>
                                <p class="pourcent">20<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(7)" onmouseout="mouseoutLeft(7)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>VB</h2>
                                <p class="pourcent">10<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(8)" onmouseout="mouseoutLeft(8)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>Json</h2>
                                <p class="pourcent">70<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(9)" onmouseout="mouseoutLeft(9)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>C++</h2>
                                <p class="pourcent">25<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(10)" onmouseout="mouseoutLeft(10)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>Python</h2>
                                <p class="pourcent">25<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>
                        <div class="box" onmouseover="mouseoverLeft(11)" onmouseout="mouseoutLeft(11)">
                            <span class="glass"></span>
                            <span class="bar"></span>
                            <div class="content">
                                <h2>Arduino</h2>
                                <p class="pourcent">50<span class="smaller">%</span>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="head_content">
                        <h1 class="title_head_content">Mes Projets</h1>
                    </div>

                    <div class="card_container">
                        <div class="box">
                            <span></span>
                            <div class="content">
                                <h2>Portfolio</h2>
                                <p>Ce projet n'est pas encore terminer. Il est mis a jour régulièrement sur GitHub.</p>
                                <a href="https://github.com/Necr3wOwnZ">GitHub</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- <button class="btn" id="fullscr">Go Fullscreen</button> -->

    <?php require_once $track.'includes/nav_js.php' ?>

</body>

</html>