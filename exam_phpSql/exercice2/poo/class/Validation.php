<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 08/08/2017
 * Time: 16:18
 */


class Validation {

    public $errors = [];
    public $post;

    public function __construct($post){
        $this->post = $post;
    }

    public function isEmpty($field, $errorMsg){
        if(isset($this->post[$field]) && empty($this->post[$field])) {
            $this->errors[] = $errorMsg;
        }
    }

    public function valideEmail($field, $errorMsg){
        if(isset($this->post[$field]) && !filter_var($this->post[$field], FILTER_VALIDATE_EMAIL)){
            $this->errors[] = 'l\'email n\'est pas valide';
        }
    }

    public function isValideLenght($field, $errorMsg, $min = 3, $max = null){
        if(isset($this->post[$field]) && (strlen($field) < $min || strlen($field) > $max)) {
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