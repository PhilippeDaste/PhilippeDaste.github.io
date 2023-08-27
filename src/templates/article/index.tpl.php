<main>
    <ul>
        <?php foreach($articles as $article) { ?>
            <li>
                <a href="<?= $router->generate('article_show', ['slug' => $article->getSlug()]) ?>">
                    <h2><?= $article->getTitle() ?></h2>
                    <p><?= $article->getCreatedAt() ?></p>
                    <p><?= $article->getUpdatedAt() ?></p>
                </a>
            </li>
        <?php } ?>
</main>