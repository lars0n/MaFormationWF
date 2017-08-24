<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;


/**
 * Description of User
 *
 * @author Hello
 */
class User {
    
    private $id;
    
    private $username;
    
    private $password;
    
    private $email;
    
    private $role;
    
    private $registerDate;
    
    private $picture;
    
    // Tableau de tags
    private $tags = [];
    

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }     

    public function getPassword() {
        return $this->password;
    }
    
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }
    
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function getRegisterDate() {
        return $this->registerDate;
    }
    
    public function setRegisterDate($registerDate) {
        $this->registerDate = $registerDate;
        return $this;
    }
    
        public function getPicture() {
        return $this->picture;
    }
    
    public function setPicture($picture) {
        $this->picture = $picture;
        return $this;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags($tags) {
        $this->tags = $tags;
        return $this;
    }

}
