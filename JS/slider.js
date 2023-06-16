
/* Pour démarer j'ai récupéré des images.
Les formats sont .jpg pour toutes mais les tailles de fichier varient énormément. */

const slide = ["../Images/images_shimane/sanctuaire_Izumo.jpg", "../Images/images_shimane/Tsuwano2.jpg",
 "../Images/images_shimane/chateau_Matsue.jpg", "../Images/images_shimane/Tsuwano3.jpg",
  "../Images/images_shimane/jardin_musée_Adachi.jpg", "../Images/images_shimane/Tsuwano4.jpg",
   "../Images/images_shimane/iwamikagura_dance_orochi.jpg"];

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