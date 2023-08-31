<?php

namespace App\Controller;

use App\Model\Brand;
use App\Model\Brewery;
use App\Model\Prefecture;

class BrandController extends CoreController {
    public function index() {

        // d'abord on récupère toutes les marques
        $brands = (new Brand())->findAll();

        // on initialise les tableaux prefectures et breweries qui vont nous servir à stocker, pour chaque marque, la brasserie et préfecture associées
        $breweries = [];
        $prefectures = [];
        
        // on parcourt toutes les marques...
        foreach($brands as $brand) {
            //... pour chaque marque, on récupère une instance de brewery à partir de l'id stocké dans la marque
            $brewery = (new Brewery())->find($brand->getBreweryId());

            // on met l'instance de brewery récupérée dans un tableau associatif qu'on indexe avec l'id de la marque
            $breweries[$brand->getId()] = $brewery;

            // on fait la même chose avec la préfecture, qu'on va chercher grâce à l'id stocké cette fois dans la brasserie
            $prefectures[$brand->getId()] = (new Prefecture())->find($brewery->getPrefectureId());
        }

        $this->render('brand/index',
            [
                'brandsList' => $brands,
                'breweriesList' => $breweries,
                'prefecturesList' => $prefectures,
                'pageTitle' => 'Liste des marques'
            ]
        ); 
    }
}