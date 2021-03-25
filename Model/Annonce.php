<?php

namespace Model;

class Annonce implements \JsonSerializable
{
    private $idAnnonce;
    private $titleAnnonce;
    private $idGarage;
    private $decription;
    private $kilometer;
    private $color;
    private $price;
    private $motor;
    private $idFuelType;
    private $idModel;
    private $idFinish;
    private $yearOfCirculation;
    private $creationDateAnnonce;
    private $dateSell;
    private $idGearType;

    public function toArray()
    {
        return [
            'idAnnonce' => $this->idAnnonce,
            'titleAnnonce' => $this->titleAnnonce,
            'idGarage' => $this->idGarage,
            'decription' => $this->decription,
            'kilometer' => $this->kilometer,
            'color' => $this->color,
            'price' => $this->price,
            'motor' => $this->motor,
            'idFuelType' => $this->idFuelType,
            'idModel' => $this->idModel,
            'idFinish' => $this->idFinish,
            'yearOfCirculation' => $this->yearOfCirculation,
            'creationDateAnnonce' => $this->creationDateAnnonce,
            'dateSell' => $this->dateSell,
            'idGearType' => $this->idGearType,
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Get the value of idAnnonce
     */ 
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set the value of idAnnonce
     *
     * @return  self
     */ 
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get the value of titleAnnonce
     */ 
    public function getTitleAnnonce()
    {
        return $this->titleAnnonce;
    }

    /**
     * Set the value of titleAnnonce
     *
     * @return  self
     */ 
    public function setTitleAnnonce($titleAnnonce)
    {
        $this->titleAnnonce = $titleAnnonce;

        return $this;
    }

    /**
     * Get the value of idGarage
     */ 
    public function getIdGarage()
    {
        return $this->idGarage;
    }

    /**
     * Set the value of idGarage
     *
     * @return  self
     */ 
    public function setIdGarage($idGarage)
    {
        $this->idGarage = $idGarage;

        return $this;
    }

    /**
     * Get the value of decription
     */ 
    public function getDecription()
    {
        return $this->decription;
    }

    /**
     * Set the value of decription
     *
     * @return  self
     */ 
    public function setDecription($decription)
    {
        $this->decription = $decription;

        return $this;
    }

    /**
     * Get the value of kilometer
     */ 
    public function getKilometer()
    {
        return $this->kilometer;
    }

    /**
     * Set the value of kilometer
     *
     * @return  self
     */ 
    public function setKilometer($kilometer)
    {
        $this->kilometer = $kilometer;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of idMotor
     */ 
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of idMotor
     *
     * @return  self
     */ 
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get the value of idModel
     */ 
    public function getIdModel()
    {
        return $this->idModel;
    }

    /**
     * Set the value of idModel
     *
     * @return  self
     */ 
    public function setIdModel($idModel)
    {
        $this->idModel = $idModel;

        return $this;
    }

    /**
     * Get the value of idFinish
     */ 
    public function getIdFinish()
    {
        return $this->idFinish;
    }

    /**
     * Set the value of idFinish
     *
     * @return  self
     */ 
    public function setIdFinish($idFinish)
    {
        $this->idFinish = $idFinish;

        return $this;
    }


    /**
     * Get the value of yearOfCirculation
     */ 
    public function getYearOfCirculation()
    {
        return $this->yearOfCirculation;
    }

    /**
     * Set the value of yearOfCirculation
     *
     * @return  self
     */ 
    public function setYearOfCirculation($yearOfCirculation)
    {
        $this->yearOfCirculation = $yearOfCirculation;

        return $this;
    }

    /**
     * Get the value of creationDateAnnonce
     */ 
    public function getCreationDateAnnonce()
    {
        return $this->creationDateAnnonce;
    }

    /**
     * Set the value of creationDateAnnonce
     *
     * @return  self
     */ 
    public function setCreationDateAnnonce($creationDateAnnonce)
    {
        $this->creationDateAnnonce = $creationDateAnnonce;

        return $this;
    }

    /**
     * Get the value of dateSell
     */ 
    public function getDateSell()
    {
        return $this->dateSell;
    }

    /**
     * Set the value of dateSell
     *
     * @return  self
     */ 
    public function setDateSell($dateSell)
    {
        $this->dateSell = $dateSell;

        return $this;
    }

    /**
     * Get the value of idGearType
     */ 
    public function getIdGearType()
    {
        return $this->idGearType;
    }

    /**
     * Set the value of idGearType
     *
     * @return  self
     */ 
    public function setIdGearType($idGearType)
    {
        $this->idGearType = $idGearType;

        return $this;
    }

    /**
     * Get the value of idFuelType
     */ 
    public function getIdFuelType()
    {
        return $this->idFuelType;
    }

    /**
     * Set the value of idFuelType
     *
     * @return  self
     */ 
    public function setIdFuelType($idFuelType)
    {
        $this->idFuelType = $idFuelType;

        return $this;
    }
}