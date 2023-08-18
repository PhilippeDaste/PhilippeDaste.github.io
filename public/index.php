<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use App\Controller\MainController;
use App\Controller\PrefectureController;

// on met en place le système de gestion des variables d'environnement (fichier .env)
try {
    $dotenv = new Dotenv();
    $dotenv->loadEnv(__DIR__ . '/../.env');
} catch (Exception $e) {
    dd($e);
}

$router = new AltoRouter();

if (!isset($_SERVER['BASE_URI'])) {
    $_SERVER['BASE_URI'] = '/';
} else {
    $_SERVER['BASE_URI'] = $_SERVER['HTTP_HOST'];
}

// on donne la racine de toutes les routes au router
$router->setBasePath($_SERVER['BASE_URI']);

$routes = [
    // MAIN
    [
        'method' => 'GET',
        'route' => '/',
        'target' => [
            'controller' => MainController::class,
            'action' => 'home'
        ],
        'name' => 'main_home'
    ],
    // PREFECTURES
    [
        'method' => 'GET',
        'route' => '/prefectures',
        'target' => [
            // TODO : changer le nom du controller en se basant sur l'exemple de MAIN (attention à bien importer la classe avec use)
            'controller' => 'PrefectureController',
            'action' => 'index'
        ],
        'name' => 'prefecture_index'
    ],
    [
        'method' => 'GET',
        'route' => '/prefectures/[a:name]',
        'target' => [
            'controller' => PrefectureController::class,
            'action' => 'show'
        ],
        'name' => 'prefecture_show'
    ],
    // BRASSERIES
    [
        'method' => 'GET',
        'route' => '/brasseries',
        'target' => [
            'controller' => 'BreweryController',
            'action' => 'index'
        ],
        'name' => 'brewery_index'
    ],
    // ARTICLES
    [
        'method' => 'GET',
        'route' => '/articles',
        'target' => [
            // TODO : changer le nom du controller en se basant sur l'exemple de MAIN (attention à bien importer la classe avec use)
            'controller' => 'ArticleController',
            'action' => 'index'
        ],
        'name' => 'article_index'
    ],
    [
        'method' => 'GET',
        'route' => '/articles/[i:id]',
        'target' => [
            // TODO : changer le nom du controller en se basant sur l'exemple de MAIN (attention à bien importer la classe avec use)
            'controller' => '',
            'action' => 'show'
        ],
        'name' => 'article_show'
    ],
    // MARQUES
    [
        'method' => 'GET',
        'route' => '/marques',
        'target' => [
            // TODO : changer le nom du controller en se basant sur l'exemple de MAIN (attention à bien importer la classe avec use)
            'controller' => 'BrandController',
            'action' => 'index'
        ],
        'name' => 'brand_index'
    ],
];

// on donne les routes au router
$router->addRoutes($routes);

dump($router);


// on dispatch ça vers le controller et la bonne méthode de ce controller
try {
    /*
On processe la requête grâce à altorouter :
- si la route demandée est connue d'altorouter, il va nous créer un tableau contenant
notre controller, et la méthode du controller à appeler, ainsi que les params qu'il aura récupérés dans l'url
- si la route n'est pas connue, il va juste nous renvoyer false, et nous on pourra afficher une 404
*/
    $match = $router->match();

    if ($match) {
        // on récupère tout ce dont on a besoin dans $match pour afficher notre page

        // 1 - on récupère le nom du controller
        $controllerName = $match['target']['controller'];

        // 2 - on récupère le nom de la méthode/action
        $actionName = $match['target']['action'];

        // 3 - on récupère les paramètres (les [a:name] etc...)
        $params = $match['params'];

        // 4 - on instancie le controller
        $controller = new $controllerName();

        // 5 - on appelle la méthode sur cette nouvelle instance, et on lui passe les params
        $controller->$actionName(...array_values($params));
    } else {
        // on affiche une 404
        throw new Exception('Page non trouvée !');
    }
} catch (Throwable $t) {
    dd($t);
}