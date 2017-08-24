<?php
//05-heritage/instance_sans_héritage.php

class A
{
    /**
     * @return string
     */
    public function direBonjour(){
        return "Bonjour !";
    }
}

//------------------
class C{}
//-----------------
class B extends C // B hertite de C... donc ne peut pas hériter de A
{
    public $maVariable; // contient un objet de la classe A

    /**
     * B constructor.
     */
    public function __construct(){
        $this -> maVariable = new A;
    }
}

//-------------------

$b = new B;
echo $b -> maVariable -> direBonjour();
// echo objet_de_la_class_A -> direBonjour();

/*
Commentaires :
    Nous avons un objet dans un objet.

    l'interet d'avoir une instance sans héritage (récupérer un objet dans la propriété d'une classe) est de pouvoir hériter d'une classe mère d'un coté tout en ayant la possibilité de récupére les éléments d'une autre classe en même temps
*/