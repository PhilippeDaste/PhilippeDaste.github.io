<?php

namespace App\Model;

class Brewery extends CoreModel
{
    private $name;
    private $address;
    private $link;
    private $comment;
    private $latitude;
    private $longitude;
    private $prefecture_id;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress($address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink($link): self
    {
        $this->link = $link;
        return $this;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment($comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude($latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude($longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getPrefectureId(): int
    {
        return $this->prefecture_id;
    }

    public function setPrefectureId($prefecture_id): self
    {
        $this->prefecture_id = $prefecture_id;
        return $this;
    }
}
