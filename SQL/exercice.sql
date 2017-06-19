--# EXERCICES

-- 01 - Afficher la profession de l'employes ayant l'identifiant 547

    SELECT prenom, service FROM employes WHERE id_employes = 547;

    --+---------+------------+
    --| prenom  | service    |
    --+---------+------------+
    --| Melanie | commercial |
    --+---------+------------+

-- 02 - Afficher la date d'embauche d'Amandine

    SELECT prenom, date_embauche FROM employes WHERE prenom = 'Amandine';

    --+----------+---------------+
    --| prenom   | date_embauche |
    --+----------+---------------+
    --| Amandine | 2010-01-23    |
    --+----------+---------------+

-- 03 - afficher le nom de famille de Guillaume

    SELECT prenom, nom FROM employes WHERE prenom = 'Guillaume';

    --+-----------+--------+
    --| prenom    | nom    |
    --+-----------+--------+
    --| Guillaume | Miller |
    --+-----------+--------+

-- 04 - Afficher le nombre d'employes ayant un identifiant commencent par le chiffre 5

    SELECT COUNT(*) AS "Nombre d'employé" FROM employes WHERE id_employes LIKE '5%';

    --+------------------+
    --| Nombre d'employé |
    --+------------------+
    --|                3 |
    --+------------------+

-- 05 - Afficher le nombre de commerciaux

    SELECT COUNT(*) AS "Nombre de commerciaux" FROM employes WHERE service = 'commercial';

    --+-----------------------+
    --| Nombre de commerciaux |
    --+-----------------------+
    --|                     6 |
    --+-----------------------+

-- 06 - Afficher le salaire moyen des informaticiens (arrondi en entier)

    SELECT ROUND(AVG(salaire)) FROM employes WHERE service = 'informatique';
    --+---------------------+
    --| ROUND(AVG(salaire)) |
    --+---------------------+
    --|                2013 |
    --+---------------------+

-- 07 - Afficher les 5 premiers employes après les avoir classé par ordre alphabetique du nom

    SELECT * FROM employes ORDER BY nom LIMIT 0, 5;

--+-------------+---------+----------+------+--------------+---------------+---------+
--| id_employes | prenom  | nom      | sexe | service      | date_embauche | salaire |
--+-------------+---------+----------+------+--------------+---------------+---------+
--|         991 | Lahcen  | Ait      | m    | informatique | 2017-06-14    |    2100 |
--|         592 | Laura   | Blanchet | f    | direction    | 2005-06-09    |    4500 |
--|         854 | Daniel  | Chevel   | m    | informatique | 2011-09-28    |    1700 |
--|         547 | Melanie | Collier  | f    | commercial   | 2004-09-08    |    3100 |
--|         699 | Julien  | Cottet   | m    | secretariat  | 2007-01-18    |    1400 |
--+-------------+---------+----------+------+--------------+---------------+---------+

-- 08 - Afficher le cout des commerciaux sur une années

    SELECT sum(salaire*12) FROM employes WHERE service = 'commercial';

    --+-----------------+
    --| sum(salaire*12) |
    --+-----------------+
    --|          184200 |
    --+-----------------+

-- 09 - Afficher le salaire moyen par service (service + salaire moyen)

    SELECT service, ROUND(AVG(salaire)) AS "Salaire moyen" FROM employes GROUP BY service;

    --+---------------+---------------+
    --| service       | Salaire moyen |
    --+---------------+---------------+
    --| assistant     |          1775 |
    --| commercial    |          2558 |
    --| communication |          1500 |
    --| comptabilite  |          1900 |
    --| direction     |          4750 |
    --| informatique  |          2013 |
    --| juridique     |          3200 |
    --| production    |          2225 |
    --| secretariat   |          1500 |
    --+---------------+---------------+ 

-- 10 - Affichjer le nombre de recrutement sur l'année 2010 (avec un alias si possible)

    SELECT COUNT(date_embauche) AS "nbr d'embauche en 2010" FROM employes WHERE date_embauche LIKE '2010-%';
    SELECT COUNT(date_embauche) AS "nbr d'embauche en 2010" FROM employes WHERE date_embauche BETWEEN "2010-01-01" AND "2010-12-31";
    SELECT COUNT(date_embauche) AS "nbr d'embauche en 2010" FROM employes WHERE date_embauche >= "2010-01-01" AND date_embauche <= "2010-12-31";

    --+------------------------+
    --| nbr d'embauche en 2010 |
    --+------------------------+
    --|                      2 |
    --+------------------------+

-- 11 - afficher le salaire moyen appliqué sur les recrutement de la periode allant de 2005 a 2007;

    SELECT ROUND(AVG(salaire)) FROM employes WHERE date_embauche BETWEEN "2005-01-01" AND "2007-12-31";

    --+--------------+
    --| AVG(salaire) |
    --+--------------+
    --|          2625|
    --+--------------+

-- 12 - Afficher le nombre de service différent

    SELECT COUNT(DISTINCT service) FROM employes;

    --+-------------------------+
    --| COUNT(DISTINCT service) |
    --+-------------------------+
    --|                       9 |
    --+-------------------------+ 

-- 13 - Afficher tous les employes sauf ceux des services production et secretariat

    SELECT * FROM employes WHERE service NOT IN ('production', 'secretariat');

-- 14 - Afficher le nombre d'homme et de femme (sexe + nombre)

    SELECT sexe, COUNT(*) AS "Nombre" FROM employes GROUP BY sexe;

    --+------+--------+
    --| sexe | Nombre |
    --+------+--------+
    --| m    |     12 |
    --| f    |      9 |
    --+------+--------+

-- 15 - Afficher les commerciaux ayant été recruté avant 2005 de sexe masculin et gagnant un salaire supérieur à 2500

    SELECT * 
    FROM employes 
    WHERE service = "commercial" 
    AND date_embauche < "2005-01-01" 
    AND sexe = "m" 
    AND salaire > 2500;

    --++-------------+--------+--------+------+------------+---------------+---------+
    --| id_employes | prenom | nom    | sexe | service    | date_embauche | salaire |
    --+-------------+--------+--------+------+------------+---------------+---------+
    --|         415 | Thomas | Winter | m    | commercial | 2000-05-03    |    3650 |
    --+-------------+--------+--------+------+------------+---------------+---------+

-- 16 - Qui a été embauché en dernier

    SELECT * FROM employes ORDER BY date_embauche DESC LIMIT 0,1;

    --+-------------+--------+-----+------+--------------+---------------+---------+
    --| id_employes | prenom | nom | sexe | service      | date_embauche | salaire |
    --+-------------+--------+-----+------+--------------+---------------+---------+
    --|         991 | Lahcen | Ait | m    | informatique | 2017-06-14    |    2100 |
    --+-------------+--------+-----+------+--------------+---------------+---------+

-- 17 - Afficher les information de l'employé du service commercial ayant le salaire le plus elevé

    SELECT * FROM employes WHERE salaire = (SELECT MAX(salaire) FROM employes WHERE service = "commercial");
    -- Bonne réponse (plus precis)
    SELECT * FROM employes WHERE service = "commercial" AND salaire = (SELECT MAX(salaire) FROM employes WHERE service = "commercial");
    -- GROUP BY
    SELECT * FROM employes WHERE service = "commercial" ORDER BY salaire DESC LIMIT 0, 1;

    --+-------------+--------+--------+------+------------+---------------+---------+
    --| id_employes | prenom | nom    | sexe | service    | date_embauche | salaire |
    --+-------------+--------+--------+------+------------+---------------+---------+
    --|         415 | Thomas | Winter | m    | commercial | 2000-05-03    |    3550 |
    --+-------------+--------+--------+------+------------+---------------+---------+
-- 18 - Afficher le prénom de l'employé de service informatique ayant ete embauche en premier

    SELECT prenom, date_embauche, service FROM employes WHERE service = "informatique" ORDER BY date_embauche LIMIT 0, 1;

-- 19 - Augmenter le salaire de employé de 100 euros
    UPDATE employes SET salaire = (salaire + 100);

-- 20 - Supprimer les employes du service secretariat uniquement.

    DELETE FROM employes WHERE service = 'secretariat';
