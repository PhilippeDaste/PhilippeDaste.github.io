<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include __DIR__ . '/../Templates/partials/head-content.php'; ?>
    <title>Sake mes experiences</title>
</head>

<?php
// J'inclus mon header
include __DIR__ . "/../Templates/header.php";

// J'inclus le nav
include __DIR__ . "/../Templates/nav.php";

// J'inclus le contenu de ma page_experiences.tpl.php
include __DIR__ . "/../Templates/page_experiences.tpl.php";

// J'inclus le footer
include __DIR__ . "/../Templates/footer.php";
?>