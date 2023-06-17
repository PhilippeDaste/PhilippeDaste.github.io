<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include '../Templates/partials/head-content.php'; ?>
	<title>Sake mes adresses</title>
</head>


<script src="../JS/slider.js"></script>

<?php

/* {header("Location: ".$_POST['department']."");} */

    // J'inclus le header
    include "../Templates/header.php";

    // J'inclus le nav
    include "../Templates/nav.php";

    // J'inclus le coeur de ma page_regions.php
    include "../Templates/prefecture_shimane.tpl.php";

    // J'inclus le footer
    include "../Templates/footer.php";
?>