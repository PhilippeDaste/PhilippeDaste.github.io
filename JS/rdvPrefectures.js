

/********************
 *  Seconde refonte du fichier
 * *******************/

// 1 - récupérer l'élément form #prefecture-form (pour pouvoir le submit apres)
const prefectureForm = document.querySelector("#prefecture-form");

// 2 - récupérer l'élément select #prefecture (pour ajouter un eventlistener dessus)
const prefectureSelect = prefectureForm.querySelector("#prefecture");

// 3 - ajouter un eventlistener sur le changement du select
prefectureSelect.addEventListener("change", redirectToPrefecture);

// 4 - submit le form gràce à js (formElement.submit())
function redirectToPrefecture() {
    // 5 - récupérer la valeur du select (pour récupérer le nom de la préfecture)
    const selectedPrefecture = prefectureSelect.value

    // 6 - mettre la bonne action sur le form avec l'attribut html action
    prefectureForm.action = `prefecture_${selectedPrefecture}.php`

    // 7 - on submit le form maintenant qu'on a bien mis la bonne action dessus
    prefectureForm.submit();
}