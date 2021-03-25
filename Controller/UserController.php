<?php

namespace Controller;

use Component\Database\DataAccessLayer;
use Component\Http\Request;
use Model\User;

class UserController {

    private $request;
    private $dal;

    public function __construct(Request $request)
    {
        $this->dal = new DataAccessLayer();
        $this->request = $request;
    }

    
    public function getAllUsers()
    {

        $data = $this->dal->selectAllUsers();

        header('Content-Type: Application/json');
        echo json_encode($data);
    }    

}