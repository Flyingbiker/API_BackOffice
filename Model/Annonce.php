<?php

namespace Model;

class Annonce implements \JsonSerializable
{
    private $idAnnonce;
    private $titleAnnonce;
    private $nameGarage;
    private $decription;
    private $kilometer;
    private $color;
    private $price;
    private $motor;
    private $fuelType;
    private $model;
    private $brand;
    private $finish;
    private $yearOfCirculation;
    private $creationDateAnnonce;
    private $dateSell;
    private $gearType;

    public function toArray()
    {
        return [
            'idAnnonce' => $this->idAnnonce,
            'titleAnnonce' => $this->titleAnnonce,
            'nameGarage' => $this->nameGarage,
            'decription' => $this->decription,
            'kilometer' => $this->kilometer,
            'color' => $this->color,
            'price' => $this->price,
            'motor' => $this->motor,
            'fuelType' => $this->fuelType,
            'model' => $this->model,
            'brand' => $this->brand,
            'finish' => $this->finish,
            'yearOfCirculation' => $this->yearOfCirculation,
            'creationDateAnnonce' => $this->creationDateAnnonce,
            'dateSell' => $this->dateSell,
            'gearType' => $this->gearType,
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
     * Get the value of nameGarage
     */ 
    public function getNameGarage()
    {
        return $this->nameGarage;
    }

    /**
     * Set the value of nameGarage
     *
     * @return  self
     */ 
    public function setNameGarage($nameGarage)
    {
        $this->nameGarage = $nameGarage;

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
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of finish
     */ 
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set the value of finish
     *
     * @return  self
     */ 
    public function setFinish($finish)
    {
        $this->finish = $finish;

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
     * Get the value of gearType
     */ 
    public function getGearType()
    {
        return $this->gearType;
    }

    /**
     * Set the value of gearType
     *
     * @return  self
     */ 
    public function setGearType($gearType)
    {
        $this->gearType = $gearType;

        return $this;
    }

    /**
     * Get the value of fuelType
     */ 
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Set the value of fuelType
     *
     * @return  self
     */ 
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }
}