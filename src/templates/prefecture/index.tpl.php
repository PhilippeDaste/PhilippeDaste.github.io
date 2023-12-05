<main>
    <!--A priori pas besoin de de navigation (sauf pour la carte ?)-->

    <!--width="1024" height="621"-->
    <h2>Carte des 48 préfectures du Japon</h2>

    <img id="prefecture_map_position" src="<?= $assetsBaseUri ?>/images/Map-of-Prefectures-of-Japan.webp" width="500"
        height="400">

    <h2>Présentation des préfectures où j'ai testé du sake</h2>
    <div>
        <label for="prefecture">Sélectionnez une préfecture : </label>
        <select class="select" name="prefecture" id="prefecture" onchange="location = this.value;">

            <option value="<?= $router->generate('prefecture_show', ['name' => 'nara']) ?>">Nara 奈良 </option>
            <option value="<?= $router->generate('prefecture_show', ['name' => 'okayama']) ?>">Okayama 岡山 </option>
            <option value="<?= $router->generate('prefecture_show', ['name' => 'shimane']) ?>">Shimane 島根 </option>
            <option value="<?= $router->generate('prefecture_show', ['name' => 'tochigi']) ?>">Tochigi 栃木 </option>
            <option value="<?= $router->generate('prefecture_show', ['name' => 'niigata']) ?>">Niigata 新潟 </option>
            <option value="#">Hyogo 兵庫 </option>
            <option value="#">Yamagata 山形 </option>
        </select>
    </div>

    <section>
        <p>Aller plus loin que la simple carte avec l'emplacement des départements ci-dessus.
            Carte interactive du département avec indiqué les adresses de chaque brasserie.

            Ecrire aussi une description du département (ou un lien vers wikipedia ??).
            Plus précisément la cité (市) ou se situe la brasserie, avec une photo perso ??
        </p>

    </section>


</main>