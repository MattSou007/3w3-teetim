<?php
    // afficher les paramètres d'URL (querystring)

    // 1) choix de langue ( par défaut: Français)
    $language = 'fr';
    // 2) si utilisateur a fait un choix par le passé (témoins HTTP/cookies), alors changer la var au code langue sauvergadé

    // 3) si utilisateur clique le bouton de langue, changer la var au langue correspondant
    if(isset($_GET["lan"])) { $language = $_GET["lan"]; }

    // A) lire le fichier JSON contenant les textes
    $txtJSON = file_get_contents('i18n/txt-'.$language.'.json');
    // test wowie
    // echo $txtJSON;

    // B) convertir la chaîne JSON en structure PHP
    // answer is json_decode
    $txt = json_decode($txtJSON);

    // test 2.0
    // print_r($txt);
    // var_dump($txt);
    // -- afficher le contenu du tabH2 --
    // echo $txt -> accueil -> tabH2;

    // C) créer  quelques raccourcis pour les sections importantes de textes
    // tous les txt du contenu spécifique à chaque page (var $page existe dans ce contexte car elle est définie avant l'inclusion de ce fichier)
    $_ = $txt->$page;
    // txt de l'entete
    $_head = $txt->header;
    // txt du pied de page
    $_foot = $txt->footer;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;900&family=Noto+Serif:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_head->meta->title; ?></title>
    <meta name="description" content= <?= $_head->meta->desc; ?>>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    <div class="conteneur">
        <header>
            <nav class="barre-haut">
                <a class="" href="index.php?lan=fr">fr</a>
                <a class="" href="index.php?lan=en">en</a>
            </nav>
            <nav class="barre-logo">
                <label for="cc-btn-responsive" class="material-icons burger">menu</label>
                <a class="logo" href="index.php"><img src="images/logo.png" alt=""></a>
                <a class="material-icons panier" href="panier.php">shopping_cart</a>
                <input class="recherche" type="search" name="motscles" placeholder="">
            </nav>
            <input type="checkbox" id="cc-btn-responsive">
            <nav class="principale">
                <label for="cc-btn-responsive" class="menu-controle material-icons">close</label>
                <a href="teeshirts.php"><?= $_head->navMain->navTeeshirts; ?></a>
                <a href="casquettes.php"><?= $_head->navMain->navCap; ?></a>
                <a href="hoodies.php"><?= $_head->navMain->navHoodies; ?></a>
                <span class="separateur"></span>
                <a href="aide.php"><?= $_head->navMain->navHelp; ?></a>
                <a href="apropos.php"><?= $_head->navMain->navUs; ?></a>
            </nav>
        </header>