// OBJECTIF
// ajouter les informations relatives à une nouvelle brasserie sur page_marques.html


/* TODO
1) créer un tableau[] contenant les nouvelles informations à importer
2) je vais chercher l'endroit ou je veux créer une nouvelle ligne : le Tableau dans ma page html
3) créer une nouvelle ligne vide dans mon Tableau sur page_marques
4) remplir/coller la nouvelle ligne (les td) dans le Tableau html 
5) créer une fonction permettant de faire les opérations.
*/

//1) créer tableau avec nouveaux éléments, les éléments du tableau sont de même type :texte
const novelBewery = ["Hyogo 兵庫", "Takara 宝", "兵庫県松戸市新作字高田111 〒271-0052","Shirakabekura 白壁蔵"];

//2) et 3)
let myTableBody = document.querySelector("tbody"); // je sélectionne un endroit
const newLine = document.createElement("tr"); // je crée l'argument
newLine.setAttribute("id","4"); // méthode pour modifier un argument, ici je crée un id
myTableBody.append(newLine); // j'insère le nouvel élément dans la page A LA SUITE DES AUTRES (en queue)
console.log(myTableBody);
//YES  !!!!! créé un tr avec id="4" à l'endroit que je voulais dans la table !!!
// 3)

//4) presque comme le petit tailleur ??
let myTr = document.getElementById("4");
for(let i=0 ; i< novelBewery.length ; i++) {
    nouveauTd = document.createElement("td");
    nouveauTd.textContent = novelBewery[i];
    myTr.append(nouveauTd)
} 

// 5) créer la fonction ET le module

/*BONUS
créer une colonne "Remarques" avec des cases de taille variable pour pouvoir ensuite ajouter des commentaires, ou pas.
*/






