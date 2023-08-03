
/* Pour démarer j'ai récupéré des images.
Les formats sont .jpg pour toutes mais les tailles de fichier varient énormément. */

const slide = ["../images/images_nara/Todaiji1.jpg", "../images/images_nara/Daibutsu_Todaiji2.jpg", "../images/images_nara/Horyuji.jpg",
 "../images/images_nara/Yoshino.jpg", "../images/images_nara/Omiwa_shrine.jpg",
   "../images/images_shimane/Tsuwano4.jpg",
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