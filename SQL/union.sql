-- UNION permet de fusionner 2 résultats dans un meme liste (colonne)
-- par exemple : sur la BBD bibliotheque, nous voulaons fusionner tous les abonnes et les auteurs dans un mem résultat.

SELECT prenom AS 'liste personne physique' FROM abonne 
UNION 
SELECT auteur FROM livre;

-- UNION applique un DISTINCT par défault.
-- Pour avoir tous les résultats sans DISTINCT, nous pouvons utiliser UNION ALL 

SELECT prenom AS 'liste personne physique' FROM abonne 
UNION ALL
SELECT auteur FROM livre;