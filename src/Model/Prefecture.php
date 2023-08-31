<?php

namespace App\Model;

use App\Core\Database;

class Prefecture extends CoreModel
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function find(int $id) {
        $sql = "SELECT * FROM prefectures WHERE id = :id";
        $stmt = Database::getPdo()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Prefecture::class);
        return $stmt->fetch();
    }
}