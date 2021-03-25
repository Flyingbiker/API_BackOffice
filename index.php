<?php

use Component\Http\Exception\HttpException;
use Component\Http\Request;
use Controller\AnnonceController;
use Controller\UserController;

require 'autoload.php';

$request = new Request();

$controller = $request->_get('controller');

try {

    switch ($controller) {        
        case 'allUsers' :
            $userController = new UserController($request);
            $userController->getAllUsers();            
            break;
        
        case 'allAnnonces' : 
            $annonceController = new AnnonceController($request);
            $annonceController->getAllAnnonces();
            break;

        default : 
            throw new HttpException('Le controller dans l\'URL n\'existe pas !');
    }

} catch (HttpException $e) {
    $e->getMessage();
} catch (\Exception $e) {
    $e->getMessage();
}