<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 04/08/2017
 * Time: 16:08
 */

namespace Controller;


use Entity\User;
use Symfony\Component\HttpFoundation\Request;

class UserController extends ControllerAbstract
{
    public function registerAction(Request $request){

        $user = new  User();
        $errors = [];

        if($request->isMethod('POST')) {
            $user
                ->setLastname($request->request->get('lastname'))
                ->setFirstname($request->request->get('firstname'))
                ->setEmail($request->request->get('email'))
            ;


            if (empty($_POST['lastname'])) {
                $errors['lastname'] = 'le nom est obligatoire';
            } elseif (strlen($_POST['lastname']) > 100) {
                $errors['lastname'] = 'le nom ne doit pas dépasser 100 caractères';
            }

            if (empty($_POST['firstname'])) {
                $errors['firstname'] = 'le prénom est obligatoire';
            } elseif (strlen($_POST['lastname']) > 100) {
                $errors['firstname'] = 'le prénom ne doit pas dépasser 100 caractères';
            }

            if (empty($_POST['email'])) {
                $errors['email'] = 'l\' email est obligatoire';
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'l\' email n\'est pas valide';
            } elseif (!empty($this->app['user.repository']->findByEmail($_POST['email']))) {
                $errors['email'] = 'Cet email est deja utilisé';
            }

            if (empty($_POST['password'])) {
                $errors['password'] = 'le mot de passe est obligatoire';
            } elseif (!preg_match('/^[a-zA-Z0-9_-]{6,20}$/', $_POST['password'])) {
                $errors['password'] = 'le mot de passe doit faire entre 6 et 20 caractères et ne conteninir que des lettres, des chiffres, ou les caractères _ et -';
            }

            if (empty($_POST['password_confirm'])) {
                $errors['password_confirm'] = 'la confirmation mot de passe est obligatoire';
            } elseif ($_POST['password'] != $_POST['password_confirm']) {
                $errors['password_confirm'] = 'la confirmation n\'est pas identique au mot de passe';
            }

            if (empty($errors)) {
                $user->setPassword($this->app['user.manager']->encodePassword($request->request->get('password')));
                $this->app['user.repository']->save($user);

                return $this->redirectRoute('homepage');
            } else {
                $message = '<strong>Le formulaire contient des erreurs :</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }

        }

        return $this->render(
            'user/register.html.twig',
            [
                'user' => $user
            ]
        );
    }

    public function loginAction(Request $request){
        $email = '';

        if(!empty($_POST)){
            $email = $request->request->get('email');

            $user = $this->app['user.repository']->findByEmail($email);
            if(!is_null($user)){
                if($this->app['user.manager']->verifyPassword($request->request->get('password'), $user->getPassword())){
                    $this->app['user.manager']->login($user);

                    return $this->redirectRoute('homepage');
                };
            }

            $this->addFlashMessage('identification incorrecte', 'error');

        }

        return $this->render(
            'user/login.html.twig',
            [
                'email' => $email
            ]
        );
    }

    public function logoutAction(){
        $this->app['user.manager']->logout();

        return $this->redirectRoute('homepage');
    }
}

