
// // Faire le lien entre la page html sur Shimane et le formulaire, menu déroulant, qui permet de sélectionner un département.


// // dans notre select/option il y a une classe select pour retrouver le <select> et une value pour chaque <option>
// let choixPrefecture = document.querySelector(".select_department");
// console.log(choixPrefecture); // fonctionne, on a fait appel à la classe plutôt qu'àl'id (department)
// let nomPrefecture = choixPrefecture.value;
// console.log(nomPrefecture); // m'affche la première prefecture [de la classe]; ce qui est correct 

// // O.K. mais je ne veux pas récupérer la première <option> mais celle choisie dans le menu déroulant !



// // intercepter le submit
// choixPrefecture.addEventListener("change", function(event) {
//     event.preventDefault();
//     nomPrefecture = choixPrefecture.options[choixPrefecture.selectedIndex].text;
//     console.log(nomPrefecture);// fonctionne, il affiche dans la console lorsque on change le choix de préfecture
//     /* return nomPrefecture; */
// });

// /* 
// AAARGH !!!! Pas foutu de récupérer le résultat du change !!!!

// function recupPrefecture (nomPrefecture) {
//     nomPrefecture = choixPrefecture.value;
//     console.log(nomPrefecture);
//     return nomPrefecture
// }
// */


// // Pour voir, créons un élément simple, un affichage de la préfecture choisie sur la page web, avant de lier une url
// let h3 = document.createElement("h3");
// h3.innerText = "Vous avez choisi la préfecture de " + nomPrefecture; // reste bloqué sur la valeur initiale, normal, hélas...
// let formChoix = document.querySelector("main");
// formChoix.appendChild(h3);

// // lien vers le lien
// let createLink = document.createElement("a");
// createLink.setAttribute("href", "http://localhost/Mon%20site/HTML/departement_shimane.html");
// createLink.setAttribute("target", "_blank");
// createLink.innerText="Shimane";
// /* on se positionne et on colle :   */
// let positionLink = document.querySelector("h3");
// positionLink.appendChild(createLink); // très moche mais fonctionne si on clique sur le lien


/********************
 *  refonte du fichier
 * *******************/

// TODO 1 - récupérer l'élément form #prefecture-form
const prefectureSelect = document.querySelector("#prefecture");

// TODO 1 - récupérer l'élément form #prefecture-form
const prefectureForm = document.querySelector("#prefecture-form");

// TODO 2 - ajouter un eventlistener sur le changement du select
prefectureSelect.addEventListener("change", redirectToPrefecture);

// TODO 3 - submit le form gràce à js (formElement.submit())
function redirectToPrefecture() {
    prefectureForm.submit();
}








// let nomPrefecture = choixPrefecture.value;