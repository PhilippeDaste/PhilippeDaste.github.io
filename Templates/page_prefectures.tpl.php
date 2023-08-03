
    <main>
        <!--A priori pas besoin de de navigation (sauf pour la carte ?)-->
       
<!--width="1024" height="621"-->
        <h2>Carte des 48 préfectures du Japon</h2>

        <img id="prefecture_map_position" src="../images/Map-of-Prefectures-of-Japan.webp" 
        width="500" 
        height="400"
        >
        
        <h2>Présentation des préfectures ou j'ai testé du sake</h2>

        <form id="prefecture-form" method="get" action="./prefecture_okayama.php">
        <p >
                <label for="prefecture">Sélectionnez une préfecture : </label>
                    <select class="select" name="prefecture" id="prefecture">
                        <option value="hyogo">Hyogo 兵庫 </option>
                        <option value="nara">Nara 奈良 </option>
                        <option value="okayama">Okayama 岡山 </option>
                        <option value="shimane">Shimane  島根 </option>
                        <option value="tochigi">Tochigi 栃木 </option>
                        <option value="yamagata">Yamagata 山形 </option>

                    </select>
        </p>
        
        </form>

        <section>
            <p>Aller plus loin que la simple carte avec l'emplacement des départements ci-dessus.
              Carte interactive du département avec indiqué les adresses de chaque brasserie.
             
                Ecrire aussi une description du département  (ou un lien vers wikipedia ??).
                Plus précisément la cité (市) ou se situe la brasserie, avec une photo perso ??
              </p>

        </section>


    </main>
    <script src="../JS/rdvPrefectures.js"></script>
   