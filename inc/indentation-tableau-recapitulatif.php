<?php

echo '<h3>indentation classe TableauRecapitulatif</h3>';

// première indentation
require_once "../inc/TableauRecapitulatif.php";

$tableauPhilippe = new TableauRecapitulatif("Asahi 旭", "Yamaguchi 山口", "〒742-0422 山口県岩国市周東町獺越2167-4", "Dassai 獺祭");

var_dump($tableauPhilippe);

// O.K. fonctionne, mais j'ai l'air d'un con avec un tableau à une ligne.....
?>