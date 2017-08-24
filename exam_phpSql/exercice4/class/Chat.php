<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 08/08/2017
 * Time: 15:32
 */

class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

    /**
     * Chat constructor.
     * @param $prenom
     * @param $age
     * @param $couleur
     * @param $sexe
     * @param $race
     */
    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setCouleur($couleur);
        $this->setSexe($sexe);
        $this->setRace($race);
    }


    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     * @return Chat
     */
    public function setPrenom($prenom)
    {
        if(strlen($prenom) >= 3 && strlen($prenom) <= 20){
            $this->prenom = $prenom;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Chat
     */
    public function setAge($age)
    {
        $this->age = (int) $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     * @return Chat
     */
    public function setCouleur($couleur)
    {
        if(strlen($couleur) >= 3 && strlen($couleur) <= 10){
            $this->couleur = $couleur;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     * @return Chat
     */
    public function setSexe($sexe)
    {
        if($sexe == 'male' || $sexe == 'femelle'){
            $this->sexe = $sexe;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param mixed $race
     * @return Chat
     */
    public function setRace($race)
    {
        if(strlen($race) >= 3 && strlen($race) <= 20){
            $this->race = $race;
        }
        return  $this;
    }

    public function getInfos(){
        $table = "<tr><td>" . $this->getPrenom() . "</td><td>" . $this->getAge() . "</td><td>" . $this->getCouleur() . "</td><td>" . $this->getSexe() . "</td><td>" . $this->getRace() . "</td></tr>";
        echo $table;
    }

}