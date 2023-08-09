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
    // var_dump($brasseriesCaractList[$key]); fonctionne et me balance la totalité de l'indentation correspondante
    echo " La clé $key c'est déjà ça <br>"; // Y veut pas (peut pas!) donner la valeur car OBJET
}

// Si on veut parcourir une ligne, marche pas :
foreach ($firstLinePhil as $key => $value) {
    echo " Les propriétés de firstLinePhil : $value<br>";
} // n'affiche strictement rien



// voyons comment utiliser les fonctions get définies dans ma classe :
// echo $firstLinePhil->brasserie;     fatal error car j'ai défini brasserie en private
echo 'brasserie de la première indentation $firstLinePhil avec un simple echo :<br>';
echo $firstLinePhil-> getBrasserie();
echo "<br>écrit différemment, directement à partir du tableau associatif brasseriesCaractList :". $brasseriesCaractList[1] -> getBrasserie();
echo "si je veux la marque de la brasserie Takara : ".$brasseriesCaractList[4] -> getMarque();
echo "<br>si je veux la préfecture de la marque Nanakanba : ".$brasseriesCaractList[3] -> getPrefecture();
// O.K. tout fonctionne, on est dans du ligne/colonne id/variable prélude aux BDD

echo '<br>brasserie de la première indentation $firstLinePhil avec var_dump : <br> ';
var_dump($firstLinePhil-> getBrasserie()); //me donne: /var/www/html/PhilippeDaste.github.io/inc/indentation-tableau-recapitulatif.php:45:string 'Asahi 旭' (length=9)


// OK

// voyons comment utiliser les fonctions set définies dans ma classe :
// Dassai 34.125508639289265, 132.00421623844468 récupérées su Google
$firstLinePhil-> setLatitude(34.125508639289265);
echo "Latitude de Dassai : " .$firstLinePhil-> getLatitude()."<br>";

$firstLinePhil-> setLongitude(132.00421623844468);
echo "Longitude de Dassai : " .$firstLinePhil-> getLongitude()."<br>";

$firstLinePhil -> setRemarque("Dassai 39, ma marque préférée.39 c'est le taux de polissage du riz. 39 en japonais se prononce san (3) kyu(9). En anglais Thank you...");
echo "remarque de Dassai : " .$firstLinePhil-> getRemarque(). "<br>";

/* ce qui ne marche pas
echo $firstLinePhil; */

// ce qui marche
var_dump($brasseriesCaractList[1]);

?>

<!-- en html, me donne simplement la valeur recherchée-->
<p>brasserie de la première indentation $firstLinePhil avec html : <?= $firstLinePhil->getBrasserie() ?></p>