<?php

echo '<h3>indentation classe TableauRecapitulatif</h3>';

// première indentation
require_once "../inc/TableauRecapitulatif.php";

/* $tableauPhilippe = new TableauRecapitulatif("Asahi 旭", "Yamaguchi 山口", "〒742-0422 山口県岩国市周東町獺越2167-4", "Dassai 獺祭");
var_dump($tableauPhilippe);*/

// O.K. fonctionne, mais j'ai l'air d'un con avec un tableau à une ligne.....

// faisons un "vrai" tableau :
$firstLinePhil = new TableauRecapitulatif("Asahi 旭", "Yamaguchi 山口", "〒742-0422 山口県岩国市周東町獺越2167-4", "Dassai 獺祭");
$secondLinePhil = new TableauRecapitulatif("Dewasakura 出羽桜", "Yamagata 山形", "〒994-0044 山形県天童市一日町一丁目4番6号", "Dewasakura 出羽桜");
$thirdLinePhil = new TableauRecapitulatif("Hikami 簸上", "Shimane 島根", "島根県仁多郡奥出雲町横田1222", "Nanakanba 七冠馬");
$fourthLinePhil = new TableauRecapitulatif("Takara 宝", "Hyogo 兵庫", "兵庫県松戸市新作字高田111 〒271-0052", "Shirakabekura 白壁蔵");

// avec les:  key  => value,
$brasseriesCaractList = [
    1 => $firstLinePhil,
    2 => $secondLinePhil,
    3 => $thirdLinePhil,
    4 => $fourthLinePhil
];

// one by one
var_dump($brasseriesCaractList[1]);
var_dump($brasseriesCaractList[2]);
var_dump($brasseriesCaractList[3]);
var_dump($brasseriesCaractList[4]);

// O.K. et pour chopper tout d'un coup, un foreach
foreach ($brasseriesCaractList as $key => $value) {
    // var_dump($dataArticlesList[$key]);
    echo " La clé {$key} c'est déjà ça";
}
// Y veut pas (peut pas!) donner la valeur car Tableau

?>