--# 1 - Qui Conduit la voiture 503

SELECT conducteur.prenom, conducteur.nom, vehicule.modele 
FROM conducteur, association_vehicule_conducteur, vehicule 
WHERE conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur
AND vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
AND vehicule.id_vehicule = 503;

--+----------+--------+--------+
--| prenom   | nom    | modele |
--+----------+--------+--------+
--| Philippe | Pandre | Cls    |
--+----------+--------+--------+

--# 2 - Qui conduit quoi
-- conducteur.*, vehicule.*
SELECT conducteur.prenom, conducteur.nom, vehicule.marque, vehicule.modele, vehicule.immatriculation 
FROM conducteur, association_vehicule_conducteur, vehicule 
WHERE conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur
AND vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule;

    --+----------+-----------+------------+--------+-----------------+
    --| prenom   | nom       | marque     | modele | immatriculation |
    --+----------+-----------+------------+--------+-----------------+
    --| Julien   | Avigny    | Peugeot    | 807    | AB-355-CA       |
    --| Morgane  | Alamia    | Citroen    | C8     | CE-122-AE       |
    --| Philippe | Pandre    | Mercedes   | Cls    | FG-953-HI       |
    --| Philippe | Pandre    | Peugeot    | 807    | AB-355-CA       |
    --| Amelie   | Blondelle | Volkswagen | Touran | SO-322-NV       |
    --+----------+-----------+------------+--------+-----------------+

--# 3 - Ajouter vous dans la table conducteur, ensuite, affichez tous les conducteurs (meme ceux qui ne sont pas présent sur la table association_vehicule_conducteur) Ainsi que les vehicules qu'ils conduisent si c'est le cas.

INSERT INTO conducteur (prenom, nom) VALUES ('Lahcen', 'AIT');

SELECT conducteur.prenom, conducteur.nom, vehicule.marque, vehicule.modele, vehicule.immatriculation 
FROM conducteur 
LEFT JOIN association_vehicule_conducteur
ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur 
LEFT JOIN vehicule
ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule;

--+----------+-----------+------------+--------+-----------------+
--| prenom   | nom       | marque     | modele | immatriculation |
--+----------+-----------+------------+--------+-----------------+
--| Julien   | Avigny    | Peugeot    | 807    | AB-355-CA       |
--| Morgane  | Alamia    | Citroen    | C8     | CE-122-AE       |
--| Philippe | Pandre    | Mercedes   | Cls    | FG-953-HI       |
--| Amelie   | Blondelle | Volkswagen | Touran | SO-322-NV       |
--| Philippe | Pandre    | Peugeot    | 807    | AB-355-CA       |
--| Alex     | Richy     | NULL       | NULL   | NULL            |
--| Lahcen   | AIT       | NULL       | NULL   | NULL            |
--+----------+-----------+------------+--------+-----------------+

--# 4 - Ajouter un nouveau véhicule sur la table vehicule. Ensuite, affichez tous les véhicule (meme ceux qui ne sont pas présent sur la table association_vehicule_conducteur) ainsi que les conducteur si c'est le cas.

INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES ('Renault', 'Clio 4', 'noir', 'FR-130-FR');

SELECT vehicule.marque, vehicule.modele, vehicule.immatriculation, conducteur.prenom, conducteur.nom 
FROM conducteur 
RIGHT JOIN association_vehicule_conducteur
ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur 
RIGHT JOIN vehicule
ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule;

--+----------+-----------+------------+---------+-----------------+
--| prenom   | nom       | marque     | modele  | immatriculation |
--+----------+-----------+------------+---------+-----------------+
--| Julien   | Avigny    | Peugeot    | 807     | AB-355-CA       |
--| Philippe | Pandre    | Peugeot    | 807     | AB-355-CA       |
--| Morgane  | Alamia    | Citroen    | C8      | CE-122-AE       |
--| Philippe | Pandre    | Mercedes   | Cls     | FG-953-HI       |
--| Amelie   | Blondelle | Volkswagen | Touran  | SO-322-NV       |
--| NULL     | NULL      | Skoda      | Octavia | PB-631-TK       |
--| NULL     | NULL      | Volkswagen | Passat  | XN-973-MM       |
--| NULL     | NULL      | Renault    | Clio 4  | FR-130-FR       |
--+----------+-----------+------------+---------+-----------------+

--# 5 - affichez tous les vehicules et tous les conducteurs sans exception qu'ils soient présent sur association_vehicule_conducteur ou pas.

--AVEC LEFT
SELECT conducteur.prenom, conducteur.nom, vehicule.marque, vehicule.modele, vehicule.immatriculation 
FROM conducteur 
LEFT JOIN association_vehicule_conducteur
ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur 
LEFT JOIN vehicule
ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
UNION ALL 
SELECT conducteur.prenom, conducteur.nom, vehicule.marque, vehicule.modele, vehicule.immatriculation 
FROM  vehicule
LEFT JOIN association_vehicule_conducteur
ON  vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
LEFT JOIN conducteur
ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur;

-- AVEC LEFT + RIGHT
SELECT conducteur.prenom, conducteur.nom, vehicule.marque, vehicule.modele, vehicule.immatriculation 
FROM conducteur 
LEFT JOIN association_vehicule_conducteur
ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur 
LEFT JOIN vehicule
ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
UNION
SELECT conducteur.prenom, conducteur.nom, vehicule.marque, vehicule.modele, vehicule.immatriculation 
FROM conducteur 
RIGHT JOIN association_vehicule_conducteur
ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur 
RIGHT JOIN vehicule
ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule;