# Sake_Site
Préparation pour la construction de mon site sur le sake
# Introduction
> Impossible d'affirmer comment cet intérêt pour le sake est advenu ; avec ma première bouteille de Dasai ?? Impossible aussi de definir une date précise. Ce qui est certain c'est que je n'avais pas cet intérêt il y a 30 ans lorsque je faisais mon post doc au Japon (septembre 1986- décembre 1988). Je cherchais plus alors à boire un peu de vin, souvent italien, le français étant trop cher.

# Le site

## Quel intérêt ?
> Utiliser l'internet c'est bien. Comprendre les technologies qui sous-tendent ce "miracle" c'est mieux. Un exemple, le MOOC FUN "web sémantique et web de donnés". Sans être allé jusqu'au bout, parce que ce qui était présenté n'était en fait qu'une proposition de structuration, pas la réalité terrain des méthodes employées, on peut commencer à comprendre ce qui structure le web.

Plus proche de la formation actuelle, le MOOC [Concevez votre site web avec PHP et MySQL](https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql). Il m'a aiguillé vers la formation actuelle et m'a donné les bases de compréhension de la complexité sous-jascente à la construction d'un site web.

Restait à trouver un sujet motivant pour mettre en oeuvre les technologies et occuper activement la retraite à venir, autrement que par d'intéressantes analyses de données. Pourquoi pas le **sake** car avec 1500 brasseries encore en activité il y a matière à faire de nombreuses excursions "culturelles" dans des endroits plus ou moins "originaux" hors des lieux touristiques habituels.

Et finalement, pourquoi laisser sur la table les 3200 € de Compte Personnel de Formation déjà acquis ?
Merci à Orange qui a accepté ma demande de formation via le CPF, qui a complété les 1000 € manquants, et me permet de passer 3 mois (intenses) à travailler sur mon projet. (moyennant de continuer mon job actuel en dehors des horaires de cours O'Clock).

## Quel contenu ?
Réalisation d'une première "maquette" avec ce que j'avais en tête. Au bout de 6 semaines il s'avère que ce que j'imaginais tient la route.
Je peuxs créer du contenu, donc faire quelques recherches sur le sake, apprendre des choses sur les départements, faire du japonais. Cela prends du temps sur le développement mais se montre utile car sert à créer et placer concrètement les éléments constitutifs du site.
Ayant les briques de contenu que je souhaitais, je constate que ce que j'apprends en cours peut être réalisé fonctionnellement et donne le résultat attendu.

Globalement, une page d'accueil et une barre de navigation (pas un "burger bar" de base) qui me permet d'aller vers : Expériences, Brasseries, Marques, Préfectures.
Chacune des pages dispose d'une structure identique.

1. Header
- Un grad bandeau avec une photo sympa sur les éléments constitutifs du sake.
- Sur la gauche. A coup sur, une photo de mon petit bouddha favori (mon "logo", pas encore réalisé. Petite touche encore plus perso à ajouter à la fin).
- sur la droite la possibilité de basculer du français au japonais. Simple menu déroulant à 2 entrées (ou 3 si anglais). Essayer avec la traduction automatique DeepL ?

2. Barre de navigation
- Avec les renvois aux autres pages 
  
4. Main
Page d'accueil.
Traitants de sujets globaux : types de sake, de fabrication, un petit historique de la production,  ...). Avec une grand carte interactive du Japon (OpenStreetMap ou Google Map ? Le plus pertinent pour le Japon).

Page Expériences.
Des articles (avec une date). Affichage du plus récent et accès aux autres : rangés par dates + tags (région, nom, marque, brasserie).

Page mes_adresses : essentiellement des textes récupérant des infos tirées des sites. Ou d'articles sur les brasseries et leur sake. Auxquelles j'ajoute mes remarques personnelles (peu de chances que j'ai essayé tous les sake donc préciser lesquels et pourquoi)
  - page mes_marques : essentiellement un tableau. Structure à définir mais avec les données de la BD : marques, nom de la brasserie, adresse, une ou plusieurs photos de la brasserie, lien vers le site, photos des sake que j'ai bu/essayés. **commentaire perso**....
  - page mes_préfectures : carte des préfectures du Japon (permet de la situer). On clique sur la carte. On trouve alors des commentaires sur ces préfectures : bouffe, riz, production sake, villes, y suis passé ou pas, quand ? a quelle occasion....
  On peut penser aussi a un petit slider avec quelques photos caractéristiques.
  Pas un guide touristique, juste quelques éléments pour me permettre d'étudier le Japon en ratissant des articles sur les préfectures en insistant sur les "sources" de sake.

1. Footer

Pas bien défini, ce n'est pas un site commercial. Mon adresse mail (une nouvelle adresse mail spécifique ?). Pas spécialement envie de faire du sav et de répondre à des questions (mais pour corriger d'éventuelles erreurs ? Proposer des formulaires pour que les gens envoient des commentaires/corrections ?)

## La base de données
Après 6 semaines, la maquette se précise un peu. O.K. pour la structure avec les 4 pages en plus de la page d'accueil index.
1. page_accueil (index)
Quelques éléments sur la sake, sans aller trop loin. Quelque chose entre introduction et glossaire. Entre la simplicité du produit (eau, riz, levure) et la complexité des méthodes de fabrication liées à la fermentation, au filtrage et à l'ajout éventuel d'alcool.
A quelques évolutions près dans le temps sur le contenu (faut écrire !) Pas de mise en base nécessaire.
(des versions  avec un [last update] qd même ?? Bof...)

2. page_experiences
Déja écrit quelques articles. Les formes se ressemblent mais ne veux pas d'une présentation unique.
Ceux-ci seront à stocker : ou ? sous quel format de données?

3. page_mes_adresses
Pas de tableau mais des articles "a propos de".
Ceux-ci seront à stocker : ou ? sous quel format de données ?

4. page_marques
Ai commencé un tableau récapitulatif.
besoin de 6 variables : Préfecture, Brasserie, Adresse, Marque1, Marque2, Remarques (à créer)
Aujourd'hui, types : text.
Demain, :
        Préfecture est un lien vers la Préfecture correspondante dans page_prefecture,
        Brasserie est un lien vers la Brasserie correspondante dans page_prefecture,
        Marque (1 ou 2) est un lien vers la Marque correspondante.
Cohérence entre les pages.

5. page_préfectures
Si je veux une carte interactive avec localisation des brasseries dans chaque préfecture il me faudre les coordonnées GPS de ces brasseries. A récupérer sur Google Map ?
Besoin de latitude et longitude en base de donnée.
Ou trouver les sources officielles pour les cartes japonaises ??? Sait pour la France mais... Open streetMaps ?
[Source à explorer :](https://latitude.to/articles-by-country/jp/japan/page/1).

Donc **à stocker**:
Des variables texte
des liens internet
des images
des coordonnées GPS (lat et lon, en fait du numérique)

                                                                  続

