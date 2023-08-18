<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="fr">

    <!--Pour pouvoir faire des media queries i.e. ajuster la taille de l'affichage à celle des différents écrans: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta est une balise orpheline, elle permet d'insérer un élément à un endroit précis-->

    <!--Liaison avec mon fichier CSS sake-style-->
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/sake_style.css" />
    <!--Liaison avec mon fichier CSS slider-->
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/slider.css" />


    <!--Font utilisée dans le site-->
    <link href="https://fonts.bunny.net/css?family=cabin:400,500,500i" rel="stylesheet" />

    <!--Ici je récupère la police Dosis de Google font. Mais j'ai déjà une font bunny. Conflit ??-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=IBM+Plex+Sans+JP:wght@300&family=Piazzolla:wght@300&display=swap"
        rel="stylesheet">

    <title>Les sake du Japon</title>
    <script src="<?= $assetsBaseUri ?>/js/slider.js"></script>
</head>

<body>
    <!-- première version, même header pour toutes les pages : -->
    <header>
        <h1>Les sake du Japon 日本酒</h1>
    </header>