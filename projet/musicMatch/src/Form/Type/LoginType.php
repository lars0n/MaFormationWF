<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of LoginType
 *
 * @author Hello
 */
class LoginType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::class,
            [
                'label' => 'Adresse mail',
                'constraints' => [
                    new Assert\Email(['message' => 'email pas valide']),
                    new Assert\NotBlank(['message' => 'doit être rempli'])
                ]
            ]
        );
        $builder->add('password', PasswordType::class,
            [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'le mot de passe dout etre fournie']),
                    new Assert\Length(['min' => 6, 'minMessage' => 'le mot de passe doit faire 6 cartere min', 'max' => 12, 'maxMessage' => 'le mot de passe doit faire moins de 12 cartere'])
                ]
            ]
        );
        
        $builder->add('submit', SubmitType::class,[
                'label' => 'Se Connecter' 
            ]
        );
    }
}
