<?php

namespace Controller;

use Entity\User;
use Form\Type\LoginType;
use Form\Type\RegisterType;
use Symfony\Component\HttpFoundation\Request;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author Hello
 */
class UserController extends ControllerAbstract{
    
    public function registerAction(Request $request){
        
        $user = new User;
        
        $registerform = $this->app['form.factory']->create(RegisterType::class, $user);
        $registerform->handleRequest($request);

        if ($registerform->isSubmitted() && $registerform->isValid()) {



            /*
             * verifie si l'utilisateur existe deja ou non avant de l'enregistrer en bdd
             */

            //dump($this->app['user.repository']->findByUsername($user->getUsername()));

            if(
                !$this->app['user.repository']->findByUsername($user->getUsername())&&
                !$this->app['user.repository']->findByEmail($user->getEmail())
            ){
                $passHash = $this->app['user.manager']->encodePassword($user->getPassword());


                $this->app['user.repository']->save($user,
                   [
                       'pseudo' => $user->getUsername(),
                       'mdp' => $passHash,
                       'email' => $user->getEmail(),
                       'register_date' => date('Y-m-d H:i:s'),
                       'role' => 'ROLE_USER'
                   ]
                );

                // redirect somewhere
                return $this->redirectRoute('display', ['username' => $user->getUsername()]);
            }

            $this->addFlashMessage('le pseudo ou l\' email sont déja pris', 'error');
        }

        
        $registerFormView = $registerform->createView();
   
        return $this->render('user/register.html.twig',[
            'registerForm' => $registerFormView
        ]);
    }
    
    public function loginAction(Request $request){
        
        $currentUser = new User;
        
        $loginForm = $this->app['form.factory']->create(LoginType::class, $currentUser);
        $loginForm->handleRequest($request);
        if($loginForm->isValid()){
            $user = $this->app['user.repository']->findByEmail($currentUser->getEmail());
            if(!is_null($user)){
                if($this->app['user.manager']->verifyPassword($currentUser->getPassword(), $user->getPassword()))
                {
                    $this->app['user.manager']->login($user);

                    return $this->redirectRoute('dashboardDisplay', ['username' => $user->getUsername()]);
                }
            }
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
        
        return $this->render('user/login.html.twig', 
            [
                'loginForm' => $loginForm->createView(),
            ] 
        );
    }
}
