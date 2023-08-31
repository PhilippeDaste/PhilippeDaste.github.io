<!--Les liens vers les autres pages du site-->
<nav class="conteneur_navigation">
    <a href="<?= $router->generate('main_home') ?>" class="conteneur_link_color">
        Accueil
    </a>
    <a href="<?= $router->generate('brewery_index') ?>" class="conteneur_link_color">
        Brasseries
    </a>
    <a href="<?= $router->generate('article_index') ?>" class="conteneur_link_color">
        Expériences
    </a>
    <a href="<?= $router->generate('brand_index')?>" class="conteneur_link_color">
        Marques
    </a>
    <a href="<?= $router->generate('prefecture_index') ?>" class="conteneur_link_color">
        Préfectures
    </a>
</nav>