<?php
    // Indiquer la page
    $page = "caps";

    // Inclure le fichier commun contenant le haut du code des écrans de UI
    include_once("commun/header.inc.php");

    /** @var stdClass $_ */
?>
<main class="page-casquettes">
    <article class="amorce">
        <h1><?= $_->leadH1; ?></h1>
    </article>
    <article class="principal">
        <?= $_->WiP; ?>
    </article>
</main>
<?php
    // Inclure le fichier commun contenant le bas du code des écrans de UI
    include_once("commun/p2p.inc.php");
?>