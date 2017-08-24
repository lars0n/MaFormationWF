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
 * Description of RegisterType
 *
 * @author Hello
 */
class RegisterType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'username',
            TextType::class,
            [
                'label' => 'Identifiant',
                'constraints' =>
                    [
                        new Assert\NotBlank(['message' => 'le champs doit etre remplie']),
                        new Assert\Length(['min' => 3, 'max' => 12, 'minMessage' => 'le pseudo doit faire 3 cartere min', 'maxMessage' => 'le pseudo doit faire moins de 12 cartere'])
                    ]
            ]
          );

        $builder->add('password', PasswordType::class,
            [
                'constraints' =>
                [
                    new Assert\NotBlank(['message' => 'mot de passe requis']),
                    new Assert\Length(['min' => 6, 'minMessage' => 'le mot de passe doit faire 6 cartere min', 'max' => 12, 'maxMessage' => 'le mot de passe doit faire moins de 12 cartere'])
                ]
            ]
        );

        $builder->add('email', EmailType::class,
            [
                'constraints' =>
                    [
                        new Assert\Email(['message' => 'email pas valide']),
                        new Assert\NotBlank(['message' => 'doit être rempli'])
                    ]
            ]
        );
        
        $builder->add('submit', SubmitType::class,[
                'label' => 'S\'inscrire' 
            ]
        );
    }

}
