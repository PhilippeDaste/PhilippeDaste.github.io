<main>
    <!--A priori pas besoin de header ni de navigation-->
    <h2>Présentation synthétique des différentes marques</h2>

    <!--La marque, chaque brasserie pouvant en avoir plusieurs, avec son historique-->
    <p>La marque, chaque brasserie pouvant en avoir plusieurs, avec son historique</p>
    <section>
        <!-- je met un tableau avec les informations de base sur les différentes brasserie-->
        <table class="brasseries_table">
            <caption>Liste des brasseries testées</caption>
            <tr>
                <th>Brasserie 酒造</th>
                <th>Préfecture 県</th>
                <th>Adresse 住所</th>
                <th>Marque(s) 銘柄</th>
            </tr>

            <?php foreach ($brandsList as $brand) {   ?>
                <tr>
                    <td><?= $breweriesList[$brand->getId()]->getName() ?></td>
                    <td><?= $prefecturesList[$brand->getId()]->getName() ?></td>
                    <td><?= $breweriesList[$brand->getId()]->getAddress() ?></td>
                    <td><?= $brand->getName() ?></td>
                </tr>
            <?php
            }
            ?>
            <!-- Illegal offset type errors occur when you attempt to access an array index using an object or an array as the index key.-->
        </table>
    </section>
</main>