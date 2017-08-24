<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 01/08/2017
 * Time: 10:33
 */

namespace Controller;


use Silex\Application;


class BibliothequeController
{


    public function abonnesAction(Application $app) {
        $abonnes = $app['db']->fetchAll("SELECT * FROM abonne");

        return $app['twig']->render('bibliotheque/abonnes.html.twig', ['abonnes' => $abonnes]);
    }

    public function abonneDetailAction(Application $app, $id){
        $abonne = $app['db']->fetchAssoc("SELECT * FROM abonne WHERE id_abonne = ?", [$id]);
        return $app['twig']->render('bibliotheque/abonne.html.twig', ['abonne' => $abonne]);
    }

    public function abonneAjoutAction(Application $app){

        if(!empty($_POST)){
            $app['db']->insert(
                'abonne',
                [
                    'prenom' => $_POST['prenom']
                ] // tableau des valeurs a insérer (les clés sont les noms des champs en bdd)
            );

            return $app->redirect(
                $app['url_generator']->generate('abonnes')
            );// redirection vers une route
        }

        return $app['twig']->render('bibliotheque/abonne_ajout.html.twig');
    }

    public function abonneModifAction(Application $app, $id){
        $abonne = $app['db']->fetchAssoc("SELECT * FROM abonne WHERE id_abonne = ?", [$id]);

        if(empty($abonne)){
            // pour jeter une 404
            $app->abort(404, "Aucun abonné avec l\'id : $id" );
        }

        if(!empty($_POST)){
            $app['db']->update(
                'abonne',
                [
                    'prenom' => $_POST['prenom']
                ], // tableau des valeurs à modifier (les clés sont les noms des champs en bdd
                [
                    'id_abonne' => $id
                ]// tableau pour la clause WHERE (ici WHERE id_abonne = $id)
            );

            return $app->redirect(
                $app['url_generator']->generate('abonnes')
            );// redirection vers une route
        }

        return $app['twig']->render('bibliotheque/abonne_modif.html.twig', ['abonne' => $abonne ]);
    }

    public function  abonneSupprimerAction(Application $app, $id){
        $app['db']->delete(
            'abonne',// nom de la table
            [
                'id_abonne' => $id
            ]// clause WHERE
        );

        return $app->redirect(
            $app['url_generator']->generate('abonnes')
        );// redirection vers une route
    }

    /*
     * créer une page qui liste les emprunts avec
     * - id de l'emprunt
     * - prénom de l'abonné
     * -auteur et titre du livre
     * -date sortie et rendu au format français
     * -si non rendu case vide
     */

    public function empruntsAction(Application $app){

        $emprunts = $app['db']->fetchAll("
          SELECT * FROM emprunt
          LEFT JOIN livre 
          ON emprunt.id_livre = livre.id_livre
          LEFT JOIN abonne
          ON emprunt.id_abonne = abonne.id_abonne"
        );

        return $app['twig']->render('bibliotheque/emprunts.html.twig', ['emprunts' => $emprunts]);
    }
}