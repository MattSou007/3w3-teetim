<?php
    // Indiquer la page
    $page = "home";

    // Inclure le fichier commun contenant le haut du code des écrans de UI
    include_once("commun/header.inc.php");

    /** @var stdClass $_ */
    // ^^^ commentaire de documentations (annotation)
?>
<main class="page-accueil">
    <article class="amorce">
        <h1><?= $_->leadH1; ?></h1>
        <h2><?= $_->leadH2; ?></h2>
        <h4><?= $_->leadH4; ?></h4>
    </article>
    <article class="principal">
        <p> <?= $_->para1 ?> </p>
        <p> <?= $_->para2; ?> </p>
    </article>
</main>
<?php
    // Inclure le fichier commun contenant le bas du code des écrans de UI
    include_once("commun/p2p.inc.php");
?>
        