<section class="conteneur_section">
    <p>Écrit le <?= $article->getCreatedAt() ?></p>
    <p>Dernière modification le <?= $article->getUpdatedAt() ?></p>
<?php
// on importe la "partial" de l'article voulu, grâce au slug qu'on aura passé à la view
require_once __DIR__ . '/partials/' . $slug . '.tpl.php';
?>
</section>