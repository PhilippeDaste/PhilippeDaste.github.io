<?php

namespace App\Controller;

use App\Model\Article;

class ArticleController extends CoreController
{
    public function index()
    {
        $articles = (new Article())->findAllIndex();
        $this->render('article/index', [
            'articles' => $articles,
            'pageTitle' => 'Mes expériences'
        ]);
    }

    public function show(string $slug)
    {
        $article = (new Article())->findBySlug($slug);
        // TODO : si l'article n'existe pas, on affiche une 404
        
        $this->render('article/show', [
            'article' => $article,
            'slug' => $slug,
            'pageTitle' => $article->getTitle()
        ]);
    }
}