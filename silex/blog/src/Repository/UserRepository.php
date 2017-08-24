<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 04/08/2017
 * Time: 16:02
 */

namespace Repository;


use Entity\User;

class UserRepository extends RepositoryAbstract
{
    protected function getTable()
    {
        return 'user';
    }

    public function findByEmail($email){
        $dbUser = $this->db->fetchAssoc(
            "SELECT * FROM user WHERE email = :email",
            [
                ':email' => $email
            ]
        );

        if(!empty($dbUser)){
            return $this->buildEntity($dbUser);
        }
    }

    public function save(User $user){
        // les données à enregistrer en bdd
        $data = [
            'lastname' => $user->getLastname(),
            'firstname' => $user->getFirstname(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
        ];

        // si la user a un id, on est en update
        // sinon en insert
        $where = !empty($user->getId())? ['id' => $user->getId()] : null ;

        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);

        // on set l'id quand on est en insert
        if (empty($user->getId())){
            $user->setId($this->db->lastInsertId());
        }
    }

    private function buildEntity(array $data){
        $user = new User();

        $user
            ->setId($data['id'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setRole($data['role'])
        ;

        return $user;
    }
}