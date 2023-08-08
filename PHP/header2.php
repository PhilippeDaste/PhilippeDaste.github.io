<?php

$tableauPages = [
	"index" => "Les sake du Japon",
	"page_experiences" => "Mes expériences et annecdotes",
	"page_adresses" => "Présentation synthétique de différentes brasseries",
	"page_marques" => "Présentation synthétique de différentes marques",
	"page_regions" => "Présentation des régions ou j'ai testé du sake"
];

foreach ($tableauPages as $nomPage => $intituléPage) {
	echo $intituléPage;
}

?>