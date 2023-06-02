// OBJECTIF
// ajouter les informations relatives à une nouvelle brasserie sur page_marques.html


/* TODO
1) créer un tableau[] contenant les nouvelles informations à importer
2) créer une nouvelle ligne vide dans mon Tableau sur page_marques
3) remplir le la nouvelle ligne dans le Tableau html
4) créer une fonction permettant de faire les opérations.

BONUS
créer une colonne "Remarques" avec des cases de taille variable pour pouvoir ensuite ajouter des commentaires, ou pas.
*/

// les éléments du tableau sont de même type :texte
const novelBewery = ["Hyogo 兵庫", "Takara 宝", "兵庫県松戸市新作字高田111 〒271-0052","Shirakabekura 白壁蔵"];

/* Je crée une nouvelle ligne <tr> , dois-je avoir des <td> ?? Logiquement céee 1 tr puis 4 td.
et je ma met à la fin du tableau happend () */
const myTable = document.querySelector("table");
console.log(myTable);