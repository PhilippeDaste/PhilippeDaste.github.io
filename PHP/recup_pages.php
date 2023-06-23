<?php


echo "salut patate";
// Récupération des données nécessaires la page (si besoin)

// On récupère la bonne page selon le paramètre page de l'URL
// Par défaut, on est sur la page home (page d'accueil)
// Cette info servira un peu plus bas à savoir quel template utiliser
$page = "home";
echo $page; // évidemment: home


// ********************  COMPREND RIEN  *******************************


$id = $_GET["id"];
echo $id;
// if (!empty($_GET["page"])) {
//     $page = $_GET["page"];
// }

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';


// Idéalement, ici on pourrait vérifier si on a bien un template existant pour la page.
// Si ce n'est pas le cas, afficher une page d'erreur 404.


// Inclusion des fichiers nécessaires
require_once "inc/classes/Article.php";

require_once "inc/data.php";




// Affichage
require __DIR__ . "/inc/templates/header.tpl.php";
require __DIR__ . "/inc/templates/$page.tpl.php";
require __DIR__ . "/inc/templates/footer.tpl.php";