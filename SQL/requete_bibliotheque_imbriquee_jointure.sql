-- Une valeur NULL se test avec IS
-- Voir les id des livres qui n'ont pas encore été rendu
    SELECT id_livre FROM emprunt WHERE date_rendu IS NULL;
-- Inverse => IS NOT 
    SELECT id_livre FROM emprunt WHERE date_rendu IS NOT NULL;

--# REQUETE IMBRIQUEE
-- nous voulons connaitre les titres des livres qui n'ont pas été rendu
    SELECT titre FROM livre WHERE id_livre in (SELECT id_livre FROM emprunt WHERE date_rendu IS NULL);

    --+-------------------------+
    --| titre                   |
    --+-------------------------+
    --| Une vie                 |
    --| Les Trois Mousquetaires |
    --+-------------------------+
--pour faire une requete imbriquée ou en jointure(voire plus bas) il faut obligatoirement un champ commun. sur la requete au dessus le champ en commun est id_livre

--Nous aimerons connaitre le n° (id) des livres que chloe a empruntée a la blibliotheque.
    SELECT id_livre FROM emprunt WHERE id_abonne IN (SELECT id_abonne FROM abonne WHERE prenom = 'Chloe');

    --+----------+
    --| id_livre |
    --+----------+
    --|      100 |
    --|      105 |
    --+----------+

-- EXERCICE - afficher les prenoms des abonnés ayant emprunté un livre le 19/12/2014

    SELECT prenom FROM abonne WHERE id_abonne in (SELECT id_abonne FROM emprunt WHERE date_sortie = '2014-12-19');

        --+-----------+
        --| prenom    |
        --+-----------+
        --| Guillaume |
        --| Chloe     |
        --| Laura     |
        --+-----------+

-- EXERCICE - Combien de livre Guillaume a emprunté à la bibliotheque.

    SELECT COUNT(*) AS 'livre emprunté' FROM emprunt WHERE id_abonne in (SELECT id_abonne FROM abonne WHERE prenom = 'Guillaume');

    --+----------------+
    --| livre emprunté |
    --+----------------+
    --|              2 |
    --+----------------+

--EXERCICE - afficher les prénoms des abonnées ayant déja emprunté un livre écrit alphonse daudet

    SELECT prenom FROM abonne WHERE id_abonne in 
        (SELECT id_abonne FROM emprunt WHERE id_livre in 
            (SELECT id_livre FROM livre WHERE auteur = 'ALPHONSE DAUDET'));

    --+--------+
    --| prenom |
    --+--------+
    --| Laura  |
    --+--------+

-- EXERCICE - Nous aimerions maintenant connaitre les titres des livres que Chloe n'a pas encore emprunté'

    SELECT titre FROM livre WHERE id_livre NOT IN (SELECT id_livre FROM emprunt WHERE id_abonne IN (SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));

    --+-----------------+
    --| titre           |
    --+-----------------+
    --| Bel-Ami         |
    --| Le pere Goriot  |
    --| Le Petit chose  |
    --| La Reine Margot |
    --+-----------------+

-- EXERCICE - Quels sont le ou les titres des livres que Chloe n'a pas encore rendu à la bibliotheque

    SELECT titre FROM livre WHERE id_livre IN 
        (SELECT id_livre FROM emprunt WHERE date_rendu IS NULL AND id_abonne IN 
            (SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));

    --+-------------------------+
    --| titre                   |
    --+-------------------------+
    --| Les Trois Mousquetaires |
    --+-------------------------+

--EXERCICE - QUI a emprunté le plus de livre a la bibliotheque

    SELECT prenom FROM abonne WHERE id_abonne = (SELECT id_abonne FROM emprunt GROUP BY id_abonne ORDER BY COUNT(*) DESC LIMIT 0, 1);

    SELECT id_abonne FROM emprunt GROUP BY id_abonne ORDER BY COUNT(*) DESC LIMIT 0, 1;

    SELECT abonne.prenom,  COUNT(*) AS 'Livre emprunté'
    FROM abonne, emprunt
    WHERE abonne.id_abonne = emprunt.id_abonne
    GROUP BY emprunt.id_abonne ORDER BY COUNT(*) desc LIMIT 0, 1;

----------------------------------------------------------------------------------

--# REQUETE EN JOINTURE
--# Une requete en jointure sera possible dans tous les cas.
--# Une requete imbriquée n'est possible que si les information que l'on récupère ne proviennent que d'une seul table.

--Nous aimerions connaitre les dates de sortie et les dates de rendu pour l'abonne guillaume
    SELECT abonne.prenom, emprunt.date_sortie, emprunt.date_rendu 
    FROM abonne, emprunt
    WHERE emprunt.id_abonne = abonne.id_abonne 
    AND abonne.prenom = 'Guillaume';

    SELECT a.prenom, e.date_sortie, e.date_rendu 
    FROM abonne a, emprunt e
    WHERE e.id_abonne = a.id_abonne 
    AND a.prenom = 'Guillaume';

-- premiere ligne => ce que l'on veut récupérer
-- deuxieme ligne => de quelle tables avons nous besoin
-- troisiemme ligne et les suivant => la ou les conditions + les eventuels GROUP BY / ORDER BY / etc..

-- EXERCICE - Nous Aimerions connaitres les dates de sortie et dates de rendu pour les livres écrits par alphonse daudet.

-----------------------------
-- date_sortie | date_rendu
-----------------------------
-- 2014-12-19  | 2014-12-22
------------------------------

 SELECT emprunt.date_sortie, emprunt.date_rendu FROM emprunt, livre WHERE emprunt.id_livre = livre.id_livre AND livre.auteur = 'ALPHONSE DAUDET';

 -- Exercice - Qui a emprunté le livre une vie sur l'année 2014;
 
    SELECT abonne.prenom 
    FROM abonne, emprunt, livre 
    WHERE abonne.id_abonne = emprunt.id_abonne 
    AND emprunt.id_livre = livre.id_livre 
    AND livre.titre = 'Une vie' 
    AND emprunt.date_sortie LIKE '2014%';

    --+-----------+
    --| prenom    |
    --+-----------+
    --| Guillaume |
    --| Chloe     |
    --+-----------+

-- EXERCICE - nous aimerions connaitre le nombre de livre(s) emprunté par chaque abonné

    SELECT abonne.prenom, COUNT(*) AS 'livre emprunte'
    FROM abonne, emprunt
    WHERE abonne.id_abonne = emprunt.id_abonne
    GROUP BY emprunt.id_abonne;

-- Moyen memo technique pour visualiser la table crée
    SELECT *
    FROM abonne, emprunt, livre
    WHERE abonne.id_abonne = emprunt.id_abonne
    AND livre.id_livre = emprunt.id_livre;

-- EXERCICE - qui a emprunté quoi et quand

    SELECT abonne.prenom, emprunt.date_sortie, livre.auteur , livre.titre
    FROM abonne, emprunt, livre
    WHERE abonne.id_abonne = emprunt.id_abonne
    AND livre.id_livre = emprunt.id_livre
    ORDER BY emprunt.date_sortie DESC;

--# Ajouter vous dans la table abonnée
INSERT INTO abonne (prenom) VALUES ('lahcen');

--# Si on fait la dernier requete select, la derniere insertion n'est pas present du fait de ne pas avoir encore d'emprunt. (abonne.id_abonne = emprunt.id_abonne)

--# Dans ce cas, afin de récupérer tout le contenu d'une table pour ensuite y joindre les information d'une autre selon la relation entre les tables => LEFT JOIN ou RIGHT JOIN

--# afficher les prenom plus les id_livre qu'ils ont emprunté
    SELECT abonne.prenom, emprunt.id_livre
    FROM abonne, emprunt
    WHERE abonne.id_abonne = emprunt.id_abonne

--# la meme requete sans correspondance exigée
SELECT a.prenom, e.id_livre
FROM abonne a
LEFT JOIN emprunt e ON a.id_abonne = e.id_abonne;

SELECT abonne.prenom, emprunt.id_livre
FROM abonne
LEFT JOIN emprunt ON abonne.id_abonne = emprunt.id_abonne;

---afficher tous les titres et joindre les id_abonne si le livre a deja ete emprunté

SELECT livre.titre, emprunt.id_abonne
FROM  emprunt, livre
WHERE livre.id_livre = emprunt.id_livre;

SELECT livre.titre, emprunt.id_abonne
FROM livre
LEFT JOIN emprunt ON livre.id_livre = emprunt.id_livre;
