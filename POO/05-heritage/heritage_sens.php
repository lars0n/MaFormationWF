<?php
//05-heritage/heritage_sens.php

// transivité : si B hérite de A et que C hérite de B, alors C hérite de A. 

class A
{
    public function test(){
        return 'test';
    }
}

class B extends A
{
    public function test2(){
        return 'test2';
    }
}

class C extends B
{
    public function test3(){
        return 'test3';
    }
}

//------------------------------------

$c = new C;

echo $c -> test();  // Méthode de A accessible par C (heritage indirect)
echo $c -> test2(); // Méthode de B accessible par C (heritage)
echo $c -> test3(); // Méthode de C accessible par C 

var_dump(get_class_methods($c)); // Nous retourne test, test2, test3...

/*
Commentaire :
    Transitivité:
        Si Bhérite de A...
            Et que C hérite de B...
                Alors C hérite de A (indirectement)
    ---> Les méthodes protected de A sont également accessible dans C
    (pourtant l'héritage est indirect).

    l'héritage n'est pas :
        -> reflexif : Class D extends D : Ce n'est pas possible, une classe ne peutpas hériter d'elle même.
        -> Symétrique (réciproque) : Ce n'est pas parce que Classe E extends F, que F extends E automatiquement.
        -> Cyclique : Si X extends Y, alors il est impossible que Y extends X
        -> multiple : Classe N extends O,M : en PHP ce n'est pas possible. pas d'héritage multiple en PHP, mais cela existe dans d'autre langages.

    une Classe peut avoir un nombre d'infini d'héritiers.
*/