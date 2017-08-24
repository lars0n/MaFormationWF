<?php

class Validator {

    public $errors = [];
    public $post;

    public function __construct($post){
        $this->post = $post;
    }

    public function isEmpty($field, $errorMsg){
        if(empty($this->post[$field])) {
            $this->errors[] = $errorMsg;
        }
    }

    public function valideEmail($field, $errorMsg){
        if(!filter_var($this->post[$field], FILTER_VALIDATE_EMAIL)){
            $this->errors[] = 'l\'email n\'est pas valide';
        }
    }

    public function isValideLenght($field, $errorMsg, $min = 3, $max = 15){
        if(strlen($field) < $min || strlen($field) > $max) {
            $this->errors[] = $errorMsg;
        }
    }

    public function isValide(){
        if(empty($this->errors)){
            return true;
        }

        return false;
    }

    public function getErrors(){
        return $this->errors;
    }


}


/* $errors =[];

if(empty($_POST['nom'])){
    $errors[] = 'Le nom est obligateur';
}

if(empty($_POST['prenom'])){
    $errors[] = 'Le prenom est obligatoir';
} */

$validatot = new Validator($_POST);
$validatot->isEmpty('nom', 'Le nom est obligateur');
$validatot->isEmpty('prenom', 'Le prenom est obligateur');


$response = [];

$response['status'] = ($validatot->isValide()) ? 'ok' : 'ko';
$response['errors'] = $validatot->getErrors();

//var_dump($validatot->post);
//var_dump($validatot->errors);


echo json_encode($response);