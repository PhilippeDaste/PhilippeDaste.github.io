
<body>
    

    <main>
        <!--A priori pas besoin de header ni de navigation-->
        <h2>Présentation synthétique des différentes marques</h2>
	

          <!--La marque, chaque brasserie pouvant en avoir plusieurs, avec son historique-->
                <p>La marque, chaque brasserie pouvant en avoir plusieurs, avec son historique</p>
            

                <!-- première version de mon tableau, avec html et JS pour la dernière ligne
        <section>

            <table class="brasseries_table">
                <caption>Liste des brasseries testées</caption>
                <tr>
                    <th>Préfecture 県</th>
                    <th>Brasserie 酒造</th>
                    <th>Adresse 住所</th>
                    <th>Marque(s) 銘柄</th>
                </tr>

                <tr>
                    <td>Yamaguchi 山口</td>
                    <td>Asahi 旭</td>
                    <td>〒742-$value422 山口県岩国市周東町獺越2167-4 </td>
                    <td>Dassai 獺祭</td>
                </tr>

                <tr>
                    <td>Yamagata 山形</td>
                    <td>Dewasakura 出羽桜</td>
                    <td>〒994-$value44 山形県天童市一日町一丁目4番6号 </td>
                    <td>Dewasakura 出羽桜</td>
                </tr>

                <tr>
                    <td> Shimane 島根</td>
                    <td> Hikami 簸上</td>
                    <td> 島根県仁多郡奥出雲町横田1222 </td>
                    <td> Nanakanba 七冠馬</td>
                </tr>


            </table>
-->



<!-- TODO :
1) Créer une branche git : connexion_BDD

2) Dans oclock Adminer, tester la requête SQL qui doit me permettre de récupérer les éléments que j'ai actuellemant dans la Tableau affiché sur "marques"
SELECT brewery_name, prefecture_name, brewery_address, brand_name
FROM brewery
LEFT JOIN prefecture ON prefecture.id= brewery.prefecture_id
LEFT JOIN brands ON brands.brewery_id=brewery.id

3) déployer cette requête avec PDO (à l'ancienne) sur pages_marques.tpl.php (ici)

4) faire un pull request vers Adélie
-->


<?php
// -----------------------------------------------------------------------
// Etape 1 : établir la connexion à la base de données
// -----------------------------------------------------------------------

// Le DSN (Data Source Name) contient une partie des informations requises
// pour se connecter à la BDD :
// - mysql : le nom du pilote/driver pour communiquer avec le logiciel de BDD
// - dbname : le nom de la base de données
// - host : l'adresse du serveur qui héberge le logiciel de BDD (pour nous la VM => localhost)
// - charset : encodage des caractères pour les échanges entre PHP-PDO et le logiciel de BDD
$dsn = 'mysql:dbname=SakeSite;host=127.0.0.1;charset=UTF8';

// En vrai, bien entendu on n'utilise pas un compte admin qui peut tout faire, on va plutôt créer un user
// spécifique pour notre appli (notre appli est un utilisateur) qui pourra faire certaines actions seulement.
$user = 'SakeSite';
$password = '@bracadabrA23';

// TRY CATCH :
// On essaie d'exécuter le code présent dans le try :
// - Si jamais il y a une erreur (même fatale), PHP continue quand même en se "téléportant" directement dans le catch
// (le catch intercepte l'erreur).
// - On exécute alors le code situé dans le catch.
// - Une fois le catch terminé, on poursuit le code situé après le try/catch.
// - S'il n'y a pas d'erreur lors de l'exécution du code présent dans le try,
// alors le code du catch n'est pas exécuté et on continue à exécuter le code ligne par ligne.
try {
    $pdoDBConnexion = new PDO(
        $dsn,
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            // Pour les tests, PDO::ERRMODE_WARNING permet d'avoir des indices sur les
            // erreurs qui se produisent lors de l'utilisation de la connexion PDO
            // et notamment pour l'exécution des requêtes.
            // ATTENTION : En production, on aurait mis : PDO::ERRMODE_SILENT car on ne veut pas
            // donner accès à tout le monde aux informations disponibles dans les
            // messages d'erreurs d'accès à la BDD
            // => pour éviter les risques de sécurité
        ]
    );

    // Si la connexion à la DB a échouée, ces lignes là sont ignorées, on se retrouve directement transporté dans le catch
    // ...
    // ...
    // ...

} catch(PDOException $exception) {
    exit("Echec de la connexion : " . $exception->getMessage());
}

// Si la connexion a réussi, on obtient un objet PDO
// check  var_dump($pdoDBConnexion);

// -----------------------------------------------------------------------
// Etape 2 : écrire sa requête SQL dans une chaîne de caractères
// -----------------------------------------------------------------------
$sql = "SELECT brewery_name, prefecture_name, brewery_address, brand_name
FROM brewery
LEFT JOIN prefecture ON prefecture.id= brewery.prefecture_id
LEFT JOIN brands ON brands.brewery_id=brewery.id";
// check  var_dump($sql); 

// -----------------------------------------------------------------------
// Etape 3 : exécuter la requête de type SELECT
// -----------------------------------------------------------------------

// query retourne un objet PDOStatement qui représente une sorte
// de boite de résultats (mais pas exploitable directement)
// PDOStatement nous sert d'intermédiaire pour pouvoir récupérer
// le résultat. Il nous faudra une étape supplémentaire pour
// exploiter ce résultat avec PHP et accéder enfin aux données.
$pdoStatement = $pdoDBConnexion->query($sql);

// La méthode query retourne soit false en cas d'erreur, soit un objet PDOStatement
// Ici, on traite le cas où la requête échoue
if ($pdoStatement === false) {
    // Gestion de l'erreur
    // On peut récupérer la dernière erreur survenue sur notre connexion PDO
    var_dump($pdoDBConnexion->errorInfo());
    // On peut éventuellement quitter le script ou afficher un message d'erreur...
    exit("Problème lors de l'exécution de la requête");
}

// check var_dump($pdoStatement);

$results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
// check var_dump($results); 

?>

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

                    <?php  foreach ($results as $valeur) {   ?>
                    <tr> 
                        <td><?= $valeur['brewery_name']?></td>
                        <td><?= $valeur['prefecture_name']?></td>
                        <td><?=$valeur['brewery_address']?></td>
                        <td><?= $valeur['brand_name']?></td>
                    </tr>  
                    <?php
                                    }
                    ?>  
                    <!-- Illegal offset type errors occur when you attempt to access an array index using an object or an array as the index key.-->
                </table>
            </section>

    </main>

    <script src="../JS/letableau.js"></script>

</body>