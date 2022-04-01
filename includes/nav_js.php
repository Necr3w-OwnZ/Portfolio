<!-- RIGHT NAV (PRESENTATION / CONTACT / PROJECT / ...) -->

<div id="circularMenu" class="circular-menu active">
    <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
        <span class="option"></span>
        <span class="option"></span>
        <span class="option"></span>
    </a>
    <menu class="items-wrapper">
        <a href="<?= $track ?>mesPages/contact.php" class="menu-item"><div class="imgnav contact"></div></a>
        <a href="<?= $track ?>mesPages/parcours.php" class="menu-item"><div class="imgnav parcours"></div></a>
        <a href="<?= $track ?>mesPages/veille_techno.php" class="menu-item"><div class="imgnav veille_techno"></div></a>
        <a href="<?= $track ?>mesPages/presentation.php" class="menu-item"><div class="imgnav presentation"></div></a>
    </menu>
</div>

<!-- LEFT NAV (HOME) -->

<div class="circular-menu circular-menu-home">
    <a class="floating-btn" href="<?= $track ?>index.php">
        <!-- <span class="home"></span>
        <span class="home"></span> -->
        <div class="imgnav home"></div>
    </a>
</div>

<!-- SCRIPT JS -->

<script type="text/javascript" src="<?= $track ?>js/app.js"></script>