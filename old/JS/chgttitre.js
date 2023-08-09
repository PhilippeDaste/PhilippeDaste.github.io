// PREMIER TEST

console.log("salut Philippe");
// got my salutation in the console of the page "page-marques.html"
// la liaison entre les 2 fichiers est donc bonne.



// PREMIERES RECHERCHES

// pour afficher un élément il y a 2 opérations:
// premièrement, déclarer ce que l'on recherche, ici body : const body = document.getElementsByTagName("body");
// Deuxièmement, l'afficher : console.log(body);
const body = document.getElementsByTagName("body");
console.dir(body);
// il m'affiche body et h1, pas le p ; pourquoi ?
// HTMLCollection(1)
//HTMLCollection  [h1]


// avec console.log
// console.log(body);
// me donne sur la console :
// HTMLCollection [body]
// HTMLCollection [h1]


// console.dir("div");
const div = document.getElementsByTagName("div");
console.dir(div);



// PREMIER CHANGEMENT !

const h1 = document.getElementsByTagName("h1");
h1[0].textContent = "Présentation de différentes marques";
// impec, le titre à changé dans la page correspondante.
// ***************************** Premier script JS sur mon site ! **************************//

// pour le plaisir, je l'affiche aussi dans la console
console.log(h1[0].textContent);


// Je décide aussi de changer le texte du paragraphe de la page :
const p = document.getElementsByTagName("p");
p[0].textContent = "Chaque brasserie peut gérer une ou plusieurs marque ; voir Mio et Shirakabekusa pour la brasserie Takada.";
// Ce changement a aussi fonctionné sur la page.
// pour le plaisir, on affiche dans la console :
console.log(p[0].textContent);

// WARNING : n'a pas changé le html écrit à l'origine dans le fichier "page-marques.html. N'a changé que l'affichage. C'est raisonnable.
// REMARQUE : le fichier PHP page-marques.php s'affiche tj pareil, avec un titre qui ne me plait pas...

// KEEPING EVERYTHING IN MIND