
    <main>
        <!--A priori pas besoin de de navigation (sauf pour la carte ?)-->
        <h2>Présentation des Départements ou j'ai testé du sake</h2>

        <form action="http://localhost/Apprendre%20HTML%20&%20CSS/PHP/departement_Shimane.php" method="get"></form>
        <p >
                <label for="department">Sélectionnez un département : </label>
                    <select class="select" name="department" id="department">
                        <option value="Hyogo">Hyogo 兵庫 </option>
                        <option value="Shimane">Shimane  島根 </option>
                        <option value="Tochigi">Tochigi 栃木 </option>
                        <option value="Yamagata">Yamagata 山形 </option>

                    </select>
        </p>

        <input type="submit" value="Go" title="valider pour aller à la page sélectionnée" />
        
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