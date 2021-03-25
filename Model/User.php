<?php

namespace Model;

class User implements \JsonSerializable
{
    private $idUser;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $phone;
    private $siret;
    private $idRole;
    private $dateCreationUser;

    public function toArray()
    {
        return [
            'idUser' => $this->idUser,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'phone' => $this->phone,
            'siret' => $this->siret,
            'idRole' => $this->idRole,
            'dateCreationUser' => $this->dateCreationUser,
        ];
    }

    /**
     * Fonction implémentée pour l'interface JsonSerializable
     * Cette fonction détermine COMMENT représenter l'objet en JSON
     * Elle sera automatiquement appelée par la fonction json_encode
     * si la classe implémente l'interface JsonSerializable.
     *
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function hydrate(array $values)
    {
        foreach ($values as $key => $value){
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


      /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of siret
     */ 
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set the value of siret
     *
     * @return  self
     */ 
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get the value of idRole
     */ 
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set the value of idRole
     *
     * @return  self
     */ 
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get the value of dateCreationUser
     */ 
    public function getDateCreationUser()
    {
        return $this->dateCreationUser;
    }

    /**
     * Set the value of dateCreationUser
     *
     * @return  self
     */ 
    public function setDateCreationUser($dateCreationUser)
    {
        $this->dateCreationUser = $dateCreationUser;

        return $this;
    }

  
}