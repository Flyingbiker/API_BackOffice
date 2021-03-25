<?php

namespace Component\Database;


use Model\User;
use Model\Annonce;

class DataAccessLayer
{
    private $host = 'localhost'; 
    private $db = 'business_case';
    private $user = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
    private $port = '3308';
    private $pdo;


    /**
     * DataAccessLayer constructor.
     * @throws DatabaseNotConnectedException
     */
    public function __construct()
    {
        $dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s;port=%s",
            $this->host, $this->db, $this->charset, $this->port);

        try {
            // une exception peut être jetée
            $this->pdo = new \PDO($dsn, $this->user, $this->password);
        } catch (\PDOException $e) { // j'attrape l'exception de PDO
            // je jete une nouvelle exception personnalisée
            throw new DatabaseNotConnectedException("Erreur de connexion à la bdd");
        }

        // si exception, le code qui suit n'est pas exécuté
    }

    public function getPdo(): \PDO
    {
        return $this->pdo;
    }

    /**
     * @return array|User[]
     */
    public function selectAllUsers(): array
    {
        /** @var \PDOStatement $stmt */
        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();

        $users = [];
        while ($row = $stmt->fetch()) {
            $user = new User();
            $user->setIdUser($row['id_user']);
            $user->setFirstName($row['first_name']);
            $user->setLastName($row['last_name']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setPhone($row['phone']);
            $user->setSiret($row['siret']);
            $user->setIdRole($row['id_role']);
            $user->setDateCreationUser($row['date_creation_user']);
            $users[] = $user;
        }

        return $users;
    }

    /**
     * @return array|Annonce[]
     */
    public function selectAllAnnonces() : array
    {
        /** @var \PDOStatement $stmt */
        $stmt = $this->pdo->prepare('SELECT * FROM annonce_template');
        $stmt->execute();

        $annonces = [];
        while ($row = $stmt->fetch()){            
            $annonce = new Annonce();
            $annonce->setIdAnnonce($row['id_annonce']);
            $annonce->setTitleAnnonce($row['title_annonce']);
            $annonce->setIdGarage($row['Name_Garage']);
            $annonce->setDecription($row['description']);
            $annonce->setKilometer($row['kilometer']);
            $annonce->setColor($row['color']);
            $annonce->setPrice($row['price']);
            $annonce->setMotor($row['motor']);
            $annonce->setIdFuelType($row['Fuel_Type']);
            $annonce->setIdModel($row['Model']);
            $annonce->setIdFinish($row['Finition']);
            $annonce->setYearOfCirculation($row['year_of_circulation']);
            $annonce->setCreationDateAnnonce($row['creation_date_annonce']);
            $annonce->setDateSell($row['date_sell']);
            $annonce->setIdGearType($row['Type_Boite']);

            $annonces[] = $annonce;
        }

        return $annonces;
    }
}