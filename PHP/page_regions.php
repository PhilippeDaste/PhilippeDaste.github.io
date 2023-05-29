<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include '../Templates/partials/head-content.php'; ?>
	<title>Sake mes régions</title>
</head>


<?php

/* {header("Location: ".$_POST['department']."");} */

    // J'inclus le header
    include "../Templates/header.php";

    // J'inclus le nav
    include "../Templates/nav.php";

    // J'inclus le coeur de ma page_regions.php
    include "../Templates/page_regions.tpl.php";

    // J'inclus le footer
    include "../Templates/footer.php";
?>

