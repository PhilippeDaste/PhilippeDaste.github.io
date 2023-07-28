

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