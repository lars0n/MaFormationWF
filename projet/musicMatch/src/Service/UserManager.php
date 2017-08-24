<?php

namespace Service;

use Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UseManager
 *
 * @author Hello
 */
class UserManager {
    /**
     *
     * @var Session
     */
    private $session;
    
    /**
     * 
     * @param Session $session
     */
    public function __construct(Session $session) 
    {
        $this->session = $session;
    }
    
    /**
     * 
     * @param string $plainPassword
     * @return string
     */
    public function encodePassword($plainPassword)
    {
        return password_hash($plainPassword, PASSWORD_BCRYPT);
    }
    
    /**
     * 
     * @param string $plainPassword
     * @param string $encodePassword
     * @return bool
     */
    public function verifyPassword($plainPassword, $encodePassword)
    {
        return password_verify($plainPassword, $encodePassword);
    }
    
    /**
     * 
     * @param User $user
     */
    public function login(User $user)
    {
        // $_SESSION['user'] = $user;
        $this->session->set('user', $user);
    }
    
    /**
     * @return null
     */
    public function logout()
    {
        // unset($_SESSION['user']);
        $this->session->remove('user');
    }
    
    public function getUser()
    {
        return $this->session->get('user');
    }


    /**
     * 
     * @return bool
     */
    public function isAdmin()
    {
        return $this->session->has('user') && $this->session->get('user')->isAdmin();
    }
}
