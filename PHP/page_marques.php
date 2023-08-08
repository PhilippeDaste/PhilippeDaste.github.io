<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include __DIR__ . '/../Templates/partials/head-content.php'; ?>
    <title>Mes marques de sake</title>
</head>

<?php
// J'inclus 
include __DIR__ . "/../Templates/header.php";

// J'inclus le nav
include __DIR__ . "/../Templates/nav.php";

// J'inclus le coeur de ma page_marques.php
include __DIR__ . "/../Templates/page_marques.tpl.php";

// J'inclus le footer
include __DIR__ . "/../Templates/footer.php";
?>