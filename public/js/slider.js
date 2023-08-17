// on déclare un tableau contenant les noms des fichiers images pour chaque préfecture
const prefectureImages = {
  shimane: [
    "sanctuaire_Izumo.jpg",
    "Tsuwano2.jpg",
    "chateau_Matsue.jpg",
    "Tsuwano3.jpg",
    "jardin_musée_Adachi.jpg",
    "Tsuwano4.jpg",
    "iwamikagura_dance_orochi.jpg",
  ],
  nara: [
    "Todaiji1.jpg",
    "Daibutsu_Todaiji2.jpg",
    "shika2.jpg",
    "Horyuji.jpg",
    "Yoshino.jpg",
    "Omiwa_shrine.jpg",
    "Katsuragi.jpg",
    "hanatomoe3.jpg",
  ],
  okayama: [
    "great-seto-ohashi.jpg",
    "korakuen5.jpg",
    "takahashi1.jpg",
    "momotaro.jpg",
    "takahashi3.jpg",
    "korakuen2.jpg",
    "kurashiki1.jpg",
    "kikuchi3.jpg",
  ],
};

// on déclare un compteur qu'on initilaise à 0
let counter = 0;

// on déclare une variable direction qu'on initialise à 1
let direction = 1;

function changeSlide(direction) {
    console.log(direction);
  // on récupère l'élément img du slider
  const imgElement = document.getElementById("slide");

  // on récupère le nom de la préfecture (depuis l'attribut html data-prefecture)
  const currentPrefecture = imgElement.dataset.prefecture;

  // on récupère l'uri de base du serveur depuis l'attribut html data-base-uri
  const baseUri = imgElement.dataset.baseUri;

  // on récupère le tableau des images correspondant à la préfecture récupérée
  const currentImages = prefectureImages[currentPrefecture];

  // on incrémente (ou décrémente) le compteur
  counter += direction;

  // si le compteur est inférieur à 0, on le remet à la taille du tableau - 1 (dernière entrée du tableau)
  if (counter < 0) {
    counter = currentImages.length - 1;
  }

   // si le compteur dépasse la taille du tableau, on le remet à 0
  if (counter > currentImages.length - 1) {
    counter = 0;
  }

  // on récupère le nom de l'image à afficher
  const imageToShow = currentImages[counter];

  // on met à jour l'attribut src de l'élément img du slider avec la nouvelle image
  document.getElementById("slide").src = `${baseUri}/public/images/${currentPrefecture}/${imageToShow}`;
}
