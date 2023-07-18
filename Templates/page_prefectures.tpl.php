
    <main>
        <!--A priori pas besoin de de navigation (sauf pour la carte ?)-->
       
<!--width="1024" height="621"-->
        <img decoding="async"  src="https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan.webp" 
        alt="Map of Prefectures of Japan" class="prefectures_map" title="Prefectures of Japan 1" 
        data-src="https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan.webp" 
        data-srcset="https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan.webp 1024w, https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan-300x182.webp 300w, https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan-768x466.webp 768w, https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan-150x91.webp 150w" 
        data-sizes="(max-width: 1024px) 100vw, 1024px" data-ll-status="loaded" sizes="(max-width: 1024px) 100vw, 1024px" 
        srcset="https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan.webp 1024w, https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan-300x182.webp 300w, https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan-768x466.webp 768w, https://zinglanguages.b-cdn.net/wp-content/uploads/2021/12/Map-of-Prefectures-of-Japan-150x91.webp 150w"
        width="400" 
        height="500"
        >

        <h2>Présentation des préfectures ou j'ai testé du sake</h2>

        <form id="prefecture-form" method="get" action="./prefecture.php">
        <p >
                <label for="prefecture">Sélectionnez une préfecture : </label>
                    <select class="select" name="prefecture" id="prefecture">
                        <option value="hyogo">Hyogo 兵庫 </option>
                        <option value="shimane">Shimane  島根 </option>
                        <option value="tochigi">Tochigi 栃木 </option>
                        <option value="yamagata">Yamagata 山形 </option>

                    </select>
        </p>

        <!-- pas besoin de bouton :
        <input type="submit" value="Go" title="valider pour aller à la page sélectionnée" /> 
        -->
        
        </form>

        <section>
          <!--Description du département avec ses villes, sous-préfectures et spécialités locales notamment nourriture, eau et riz-->
            <p>Tenté formulaire avec un menu déroulant. Faut-il en plus une carte interactive du département en question avec les brasseries testées?
                Ou récupérer cette info très japonaise ?
                Afficher le doc correspondant au choix sur cette même page (oui) ?
                Ecrire aussi une description du département  (ou un lien vers wikipedia ??).
                Plus précisément la cité (市) ou se situe la brasserie, avec une photo perso ??
              </p>

        </section>

        <section>
            <h3>Département de Hyogo 兵庫</h3>
            <h3>Département de Shimane 島根</h3>
              <p>Shimane</p>
            <h3>Département de Tochigi 栃木</h3>
            <h3>Département de Yamagata 山形</h3>

        </section>

        <section>
            <!--carte interactive du département avec indiqué les adresses de chaque brasserie-->
         
              
          </section>

    </main>
    <script src="../JS/rdvPrefectureShimane.js"></script>