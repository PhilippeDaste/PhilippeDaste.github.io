
/* Pour démarer j'ai récupéré des images.
Les formats sont .jpg pour toutes mais les tailles de fichier varient énormément. */

const slide = ["../images/images_shimane/sanctuaire_Izumo.jpg", "../images/images_shimane/Tsuwano2.jpg",
 "../images/images_shimane/chateau_Matsue.jpg", "../images/images_shimane/Tsuwano3.jpg",
  "../images/images_shimane/jardin_musée_Adachi.jpg", "../images/images_shimane/Tsuwano4.jpg",
   "../images/images_shimane/iwamikagura_dance_orochi.jpg"];

  let numero = 0;
    let sens = 1;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero]; // on utilise l'id de notre première image : le sanctuaire de Izumo et on change le src
}

/* Lorsque l'utilisateur clique sur la flèche suivante, le paramètre sens est égal à 1 et la variable numero est incrémentée.*/