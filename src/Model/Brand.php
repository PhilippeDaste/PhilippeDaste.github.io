<?php

namespace App\Model;

use App\Core\Database;
use PDO;

class Brand extends CoreModel
{
    private $name;
    private $brewery_id;

    public function getName(): string
    {
        return $this->name;
    }

    public function getBreweryId(): int
    {
        return $this->brewery_id;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setBreweryId($brewery_id): self
    {
        $this->brewery_id = $brewery_id;
        return $this;
    }

    public function findAll()
    {
        $sql = "SELECT `id`, `created_at`, `updated_at`, `name`, `brewery_id`
            FROM `brands`";

        $stmt = Database::getPDO()->prepare($sql);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_CLASS, self::class);

        return $results;
    }
}
