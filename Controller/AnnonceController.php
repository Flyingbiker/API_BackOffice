<?php

namespace Controller;

use Component\Database\DataAccessLayer;
use Component\Http\Request;
use Model\Annonce;

class AnnonceController {

    private $request;
    private $dal;

    public function __construct(Request $request)
    {
        $this->dal = new DataAccessLayer();
        $this->request = $request;
    }

    
    public function getAllAnnonces()
    {

        $data = $this->dal->selectAllAnnonces();

        header('Content-Type: Application/json');
        echo json_encode($data);
    }    

}