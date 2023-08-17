<div id="slider">
    <img src="<?= $_SERVER['BASE_URI'] ?>/public/images/<?= $prefectureName ?>/<?= $firstImage?>" alt="Le Todaiji" id="slide" width="auto" height="500" data-base-uri="<?= $_SERVER['BASE_URI'] ?>" data-prefecture="<?= $prefectureName ?>">
    <div id="previous" onclick="changeSlide(-1)">&lt;</div>
    <div id="next" onclick="changeSlide(1)">&gt;</div>
</div>