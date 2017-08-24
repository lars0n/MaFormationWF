<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 07/08/2017
 * Time: 09:57
 */

namespace Service;

use Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;

class UserManager
{

    private $session;

    /**
     * UserManager constructor.
     * @param $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @param $plainPassword
     * @return bool|string
     */
    public function encodePassword($plainPassword){
        return password_hash($plainPassword, PASSWORD_BCRYPT);
    }

    /**
     * @param $plainPassword
     * @param $encodedPassword
     * @return bool
     */
    public function verifyPassword($plainPassword, $encodedPassword){
        return password_verify($plainPassword, $encodedPassword);
    }

    public function login(User $user){
        $this->session->set('user', $user);
    }

    public function logout(){
        $this->session->remove('user');
    }

    /**
     * @return User|null
     */
    public function getUser(){
        return $this->session->get('user');
    }

    public function getUserName(){
        if($this->session->has('user')){
            return $this->session->get('user')->getFullName();
        }

        return '';
    }

    public function isAdmin(){
        return $this->session->has('user') && $this->session->get('user')->isAdmin();
    }

}