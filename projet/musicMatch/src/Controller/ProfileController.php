<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ProfilController
 *
 * @author Hello
 */
class ProfileController extends ControllerAbstract {
    
    public function displayProfileAction($username){
        $profile = $this->app['user.repository']->findByUsername($username);
    
        return $this->render('user/profile.html.twig',
            [
                'profile' => $profile
            ]);
    }
    
    public function editProfileAction($username, Request $request){
        $profile = $this->app['user.repository']->findByUsername($username);

        $errors = [];
        if($request->isMethod('POST')){
            $data = [
                'pseudo' => $request->request->get('pseudo'),
                'email' => $request->request->get('email'),
            ];

            if(empty($request->request->get('pseudo'))){
                $errors['pseudo'] = 'le peudo ne peut etre vide';
            }

            if(empty($request->request->get('email'))){
                $errors['email'] = 'le email ne peut etre vide';
            }

            if(!empty($request->request->get('mdp'))){
                $hashMdp = $this->app['user.manager']->encodePassword($request->request->get('mdp'));
                $data['mdp'] = $hashMdp;
            }

            if(!empty($_FILES['picture']['name'])){

                $errors['picture'] = $this->app['validator']->validate($request->files->get('picture'), new Assert\Image());

                if(count($errors['picture']) > 0 ){
                    echo $errors['picture'] = 'Ce fichier n\'est pas une image valide.';
                }else{
                    unset($errors['picture']);
                    copy($_FILES['picture']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $request->getBasePath() . '/photo/' . $_FILES['picture']['name']);
                    $data['picture'] = $_FILES['picture']['name'];
                }
            }

            $tags = explode(', ', $request->request->get('tags'));


            //dump($tags);

            if (empty($errors)) {

                $this->app['user.repository']->save($profile, $data);
                $this->app['profile.repository']->saveTag($tags, $profile->getId());
                //return $this->redirectRoute('homepage');
            } else {
                $message = '<strong>Le formulaire contient des erreurs :</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
                dump($errors);
            }
        }

        return $this->render('user/edit.html.twig',
            [
                'profile' => $profile
            ]);
    }
}
