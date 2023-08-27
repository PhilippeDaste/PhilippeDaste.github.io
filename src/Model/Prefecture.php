<?php

namespace App\Model;

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
}