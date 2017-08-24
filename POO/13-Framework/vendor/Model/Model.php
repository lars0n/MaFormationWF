<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 27/07/2017
 * Time: 14:16
 */

namespace Model;


use Manager\PDOManager;
use PDO;

class Model
{
    private $db; // Contiendra notre objet pdo;

    // Fonction pour récupérer l'objet PDO:
    public function getDb(){
        $this->db = PDOManager::getInstance() ->getPdo();
        return $this->db;
    }

    //Méthode pour récupérer le nom de la table lors des requêtes génériques
    public function getTableName(){
        // get_called_class() : Me retourne le nom de la classe dans laquelle je suis
        // ArticleModel ===> Model\ArticleModel ======> article
        // MembreModel   ===> Model\MembreModel  ======> membre

        $table = strtolower(str_replace(array('Model\\', 'Model'),'', get_called_class()));
        // La ligne ci-dessus va transformer 'Model\ArticleModel' en 'article' et stocker ça dans $table.

        return $table;
        //return 'article'; // pour test
    }

    // REQUETES GENERIQUES :

    // Requete pour récupérer toutes les infos d'une table :
    public function findAll() {
        $requete = "SELECT * FROM " . $this -> getTableName();
        //$requete = "SELECT * FROM article ";
        //$requete = "SELECT * FROM membre";

        $resultat = $this->getDb()->query($requete);
        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'ENTITY\\' . ucfirst($this->getTableName()));
        // new Entity\Article
        // setFetchMode() est une fonction de PDOStatement.
        // cela permet d'instancier un objet (dans notre cas Entity\Article par exemple), de prendre les resultats de la requête et d'affecter à chauqe propriété de l'objet les valeurs trouvées dans le champs correspopndant dans la BDD.
        // Pour que cela fonctionne il faut ABSOLUMENT que les propriété des entités correspondent aux champs dans la BDD.

        $donnees = $resultat -> fetchAll();

        if(!$donnees){
            return false;
        }else {
            return $donnees;
        }
    }

    // Requete pour récupérer un enregistrement d'une table (par son id)
    public function find($id){
        $requete = "SELECT * FROM " . $this->getTableName() . " WHERE id_" . $this->getTableName() . " = :id ";

        $resultat = $this->getDb()->prepare($requete);
        $resultat->bindParam(':id', $id, PDO::PARAM_INT);
        $resultat->execute();

        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'ENTITY\\' . ucfirst($this->getTableName()));

        $donnees = $resultat -> fetch();

        if(!$donnees){
            return false;
        }else {
            return $donnees;
        }
    }

    // Requete pour supprimer un enregistrement d'une table (par son id)
    public function delete($id){
        $requete = "DELETE FROM " . $this->getTableName() . " WHERE id_" . $this->getTableName() . " = :id";

        $resultat = $this->getDb()->prepare($requete);
        $resultat->bindParam(':id', $id, PDO::PARAM_INT);
        return $resultat->execute();

    }

    // Requete pour modifier un enregistrement d'une table (par son id)
    public function update($id, $infos){
        $newValues = '';
        $a = 0;
        foreach ($infos as $key => $value){
            if($a == 0){
                $newValues .= " $key = :$key ";
            }else{
                $newValues .= ", $key = :$key ";
            }
            $a++;
        }

        $requete = "UPDATE " . $this->getTableName() . " SET " . $newValues . " WHERE id_" . $this->getTableName() . " = :id";

        $resultat = $this->getDb()->prepare($requete);
        $infos['id'] = $id;

        return $resultat->execute($infos);
    }

    // Requete pour Insérer un enregistrement d'une table
    public function register($infos){
        $requete = 'INSERT INTO ' . $this->getTableName() . ' (' . implode(',', array_keys($infos)) . ') VALUES (' . ":" . implode(', :', array_keys($infos)) . ') ';
        //$requete = 'INSERT INTO article (titre, description, prix) VALUES (:titre, :descritpion, :prix)'

        $resultat = $this->getDb()->prepare($requete);

        if($resultat -> execute($infos)){
            return $this->getDb()->lastInsertId();
        }else {
            return false;
        }

    }
}