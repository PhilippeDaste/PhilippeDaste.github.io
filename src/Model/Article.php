<?php

namespace App\Model;

use App\Core\Database;
use PDO;
use Throwable;

class Article extends CoreModel
{
    private $title;
    private $content;
    private $brewery_id;
    private $slug;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getBreweryId(): int
    {
        return $this->brewery_id;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug($slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setContent($content): self
    {
        $this->content = $content;
        return $this;
    }

    public function setBreweryId($brewery_id): self
    {
        $this->brewery_id = $brewery_id;
        return $this;
    }

    public function findBySlug(string $slug): ?self
    {
        $sql = "SELECT `articles`.`title`, `articles`.`created_at`, `articles`.`updated_at`
                FROM `articles`
                WHERE `articles`.`slug` = :slug";

        try {
            $pdo = Database::getPDO();

            $pdoStatement = $pdo->prepare($sql);

            $pdoStatement->bindValue(':slug', $slug, PDO::PARAM_STR);

            $pdoStatement->execute();

            $article = $pdoStatement->fetchObject(self::class);

            return $article;
        } catch (Throwable $throwable) {
            dd($throwable);
        }
    }

    public function findAllIndex(): ?array
    {
        $sql = "SELECT `articles`.`title`, `articles`.`slug`, `articles`.`created_at`, `articles`.`updated_at`
                FROM `articles`";

        try {
            $pdo = Database::getPDO();

            $pdoStatement = $pdo->query($sql);

            $articles = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

            return $articles;
        } catch (Throwable $throwable) {
            dd($throwable);
        }
    }
}
