-- ceci est un commentaire sur une ligne -- 

-- Pour créer une base de donées --
CREATE DATABASE wf3_entreprise;

-- Pour voir toute les BDD sur le serveur toujours un s a la fin de l'argument --
SHOW DATABASES; 

-- Pour utiliser une BDD --
USE nom_de_la_bdd;
USE wf3_entreprise;

-- Pour effacer une BDD --
DROP DATABASE nom_de_la_bdd;

-- Pour effacer une table --
DROP TABLE nom_de_la_table;

-- Vider une table sans l'effacer --
TRUNCATE nom_de_la_table;

-- Pour observer la structure d'une table --
DESC nom_de_la_table;

-- # REQUETES SELECTION (question) ----------------

-- récuperation de toutes les données de la table employes ---------
SELECT i-employes, nom, prenom, sexe, service, date_embauche, salaire FROM employes;

-- il est possible d'afficher tout le contenu d'une table avec le caractère universel * --
SELECT * FROM employes;

-- uniquement les pronoms et les noms --
SELECT prenom, nom FROM employes;

-- afficher tous les services --
SELECT service FROM employes;

-- idem mais sans répétition --
SELECT DISTINCT service FROM employes;

-- affichage des infos des employes du service informatique -- 
SELECT nom, prenom, service FROM employes WHERE service = 'informatique';

-- BETWEEN
-- afficher les employes ayant été recruté entre 2010 et aujourd'hui
SELECT * FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND NOW()

-- la date du jour
SELECT CURDATE();

-- LIKE
-- Affichage des employes avec un prenom dont la première lettre commence par 's'
SELECT prenom FROM employes WHERE prenom LIKE 's%';
-- prenom finisant pas 'ie'
SELECT prenom FROM employes WHERE prenom LIKE '%ie';
-- prenom contenant un trait d'union
SELECT prenom FROM employes WHERE prenom LIKE '%-%';

-- la liste des employes avec un salaire supérieur à 3000
SELECT nom, prenom, service, salaire FROM employes WHERE salaire > 3000;
-- opérateur de comparaison > ... < ... = .. != ... >= ... <=

-- Pour récupérer les infos avec un ordre 
SELECT prenom FROM employes ORDER BY prenom; 
SELECT prenom FROM employes ORDER BY prenom ASC; -- ASC  ascendant valeur par default
-- l'inverse
SELECT prenom FROM employes ORDER BY prenom DESC; -- DESC descendant

SELECT prenom, salaire FROM employes ORDER BY salaire ASC;
-- pour un deuxieme classement
SELECT prenom, salaire FROM employes ORDER BY salaire ASC, prenom ASC;

-- LIMIT
-- affichage des employes 3par 3
SELECT prenom, nom FROM employes LIMIT 0, 3;
SELECT prenom, nom FROM employes LIMIT 3, 3;
SELECT prenom, nom FROM employes LIMIT 6, 3;
-- avec limit la premiere valeur est la position de départ et la deuxieme valeur représente le nombre de ligne a récupérer.

-- le salaire annuel des employes
SELECT prenom, salaire * 12 FROM employes;
SELECT prenom, salaire * 12 AS 'Salaire annuel' FROM employes;
-- AS => Alias

-- SUM()
SELECT SUM(salaire*12) AS 'Masse salarial' FROM employes;

-- AVG()
-- le salaire moyen
SELECT AVG(salaire) AS "salaire moyen" FROM employes;
-- ROUND() -- arrondi
SELECT ROUND(AVG(salaire)) AS "salaire moyen" FROM employes;
-- avec deux décimales
SELECT ROUND(AVG(salaire), 2) AS "salaire moyen" FROM employes;

-- COUNT()
-- affichage du nombre de femme dans la table employes
SELECT COUNT(*) AS 'Nombre de femme employé' FROM employes WHERE sexe = 'f';

-- MIN()
SELECT MIN(salaire) FROM employes;
-- MAX()
SELECT MAX(salaire) FROM employes;

-- afficher le nom, prenom de l'employes ayant le salaire le plus petit.
-- /!\ la requete suivant est fausse
SELECT nom, prenom, MIN(salaire) FROM employes;
-- en effet, le MIN() bloque la requete car MIN() ne peut renvoyer qu'une seule ligne.
--Du coup on récupère le premier nom, prenom de la table et le salaire minimum qui ne correspond pas forcement au nom, prénom.
-- Pour avoir la bonne information, dans ce cas précis nous pouvons utiliser ORDER BY avec LIMIT
SELECT nom, prenom, salire FROM employes ORDER BY salaire LIMIT 0,1;

--+--------+--------+---------+
--| nom    | prenom | salaire |
--+--------+--------+---------+
--| Cottet | Julien |    1390 |
--+--------+--------+---------+

-- requete imbriquée
SELECT nom, prenom, salaire FROM employes WHERE salaire = (SELECT MIN(salaire) FROM employes);

-- IN
SELECT nom, prenom, service FROM employes WHERE service IN ('informatique', 'comptabilite');
-- IN permet de faire uhne comparaison sur plusieurs valeurs
-- avec = comparaison sur une seul valeur

--NOT IN -- exclusion
SELECT nom, prenom, service FROM employes WHERE service NOT IN ('informatique', 'comptabilite');
-- NOT IN (plusieurs valeurs)
-- != (une seul valeur)

-- Requete avec plusieurs conditions
-- les employes du service commerciale gagnant moins de 2000 euros
SELECT * FROM employes WHERE service='commerciale' AND salaire <= 2000;

-- les employes du service production ayant un salaire de 1900 ou 2300 
SELECT * FROM employes WHERE service = 'production' AND salaire = 1900 OR Salaire = 2300;
-- /!\ attention la requete au dessus est fausse. sans les parenthèse, le OR crée une une incohérence . la derniere condition ne se retrouve pas lié au service = 'production'
-- pour éviter, il faut mettre les parenthèse.
SELECT * FROM employes WHERE service = 'production' AND (salaire = 1900 OR Salaire = 2300);

-- GROUP BY
-- le nombre d'employes par service
SELECT service, COUNT(*) FROM employes GROUP BY service;

-- pour mettre une ou des conditions avec un group by
-- HAVING
-- meme requete qu'au dessus avec une condition si la valeur du COUNT(*) est supérieur à 2
SELECT service, COUNT(*) FROM employes GROUP BY service HAVING COUNT(*) > 2;
-- le nombre d'employe (femme uniquement) par service
SELECT service, COUNT(*) FROM employes WHERE sexe='f' GROUP BY service;

-- GROUP BY permet de tregrouper des information
-- HAVING permet de mettre une condition sur le GROUP BY

-- # REQUETE INSERTION (enregistrement)
INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES (NULL, 'Lahcen', 'Ait', 'm' ,'informatique', '2017-06-14', 2100);
SELECT * FROM employes;

--si nous donnons tous les champs dans le meme ordre que la table, il n'est pas necessaire de préciser les champs
INSERT INTO employes VALUES (NULL, 'Lahcen', 'Ait', 'm' ,'informatique', '2017-06-14', 2100);
SELECT * FROM employes;

-- si l'on fait une insertion sans remplire tous les champs nous somme obligé de préciser les champs
INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) 
VALUES ('Lahcen', 'Ait', 'm' ,'informatique', '2017-06-14', 2100);
SELECT * FROM employes;

--# REQUETE UPDATE (modification)
UPDATE employes SET salaire = 1391 WHERE id_employes = '699';
-- pour une modification d'une entrée précise, il faut priviligier la condition sur la clé primaire de la table (ici id_employes)
UPDATE employes SET salaire = 1400 WHERE id_employes = '699';

--# REQUETE DELETE (suppression)
SELECT * FROM employes;
DELETE FROM employes WHERE id_employes = 992;

DELETE FROM employes WHERE id_employes = 992 AND service = 'informatique';

DELETE FROM employes; -- equivalent à TRUNCATE employes;