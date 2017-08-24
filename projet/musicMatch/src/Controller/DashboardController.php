<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

/**
 * Description of DashboardController
 *
 * @author Hello
 */
class DashboardController extends ControllerAbstract {
    
    public function userMusicDisplayAction($username){
        
        //var_dump($this->app['spotify.api']);

        $user = $this->app['user.repository']->findByUsername($username);
        $recommendations = null;
        if($user->getTags()){
            $recommendations = $this->app['spotify.api']->getRecommendations(
                [
                    //'seed_tracks' => ['1MDoll6jK4rrk2BcFRP5i7'],
                    'seed_genres' => $user->getTags()
                ]
            );
        }

        return $this->render('dashboard/home.html.twig',
            [
                'user' => $user,
                'recommendations' => $recommendations
            ]
        );
    }
}
