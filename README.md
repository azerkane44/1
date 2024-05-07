# Dossier projet
Voici le github contenant mon dossier projet

# Somaire
1. But du projet.
2. Les fonctionnalités désirées.
3. Les technologies utilisés.
4. Etape de création de l'administrateur dans le back-office
5. Comment executer le projet en locale


#  1: But du projet

Ce projet à pour but de créer  de créer une application web vitrine pour le Garage V. Parrot,
en mettant en avant la qualité des services délivrés par cette récente entreprise tel que la réparation et la vente de véhicule.

Cette apllication web devra etre fourni avec  l'intégration, le développement , le déploiement , un wireframe, des diagrames et une carte graphique contenant la palette de couleur et la police d'ecriture.

# 2: Les fonctionnalités desirées

#  US1. Se connecter
1. Un formulaire de connexion pour admin et employés avec e-mail et mot de passe securisé.
2. La création d'un compte admin pour le directeur Vincent.parrot.
3. Des comptes employés créer par l'admin et seulemnt par lui.

 # US2. Présenter les services
1. Afficher les services de maniére claire pour les utilisateurs et l'admin avec posibiliter pour l'administrateur de les modifiers depuis son espace admin.
2. Posibiliter pour l'administrateur de mofifer ses services.

 # US3. Définir les horaires d’ouverture
1. Les horaires d'ouverture et fermeture doivent etre présent dans le pied de chaque page.
2. L'administrateur doit pouvoir modifier ses horaires depuis son espace dedié.


#  US3. Exposer les voitures d'occasion
1. Exposer les voitures d'occasion avec des photos et des description.
2. Posibiliter pour les employés d'en ajouter depuis leur espace membre.

#  US4. Filtrer la liste des véhicules d’occasion
1. Ajouter des filtres pour les voitures d'occasion sans avoir à recharger la page

 #  US4. Permettre de contacter l'atelier
1. Les visiteurs doivent pouvoir contacter l'atelier
2. Via un formulaire en ligne ou par téléphone
3. les informations de contact doivent etre visible en bas de chaque voiture.

 #  US5. Recueillir les témoignages des clients
1. Les visiteurs doivent pouvoir laisser un témoignage avec nom, un commentaire et une note.
2. Les avis seront moderer par un emplyé du garage.
3. Une section spécifique doit etre attribuée pour les témoignage client.

# 3: Technologies Utilisées
Front-end:
    HTML 5
    CSS 3

Back-end:
    My sql
    PHP 8.2 sous PDO
    PHP mailer
    MariaDB

# 4: Etape de création de l'administrateur dans le back-office

1. Cliquer sur le bouton connexion
   L'administrateur devra se connecter via le bouton connexion présent dans le header.

2.Remplissage formulaire de connexion
L'administrateur devra entrée son e-mail deja créer et se connecter grace à cette email admin@gmail.com et se mot de passe admin1234.

3. Redirection vers l'espace d'administration et administration via le back-office.
Vincent Parrot se rediriger vers l'espace d'administration grace à ce compte admin d'ou ils pourra créer et bannir des membres, ajouter des services , et voir les memebres inscrit tous cela grace à différent bouton doté d'une description pour gérer les différentes fonctionnalités citée.

# 5. Comment executer le projet en locale


## Prérequis
- Wamp
- Phpmailer
- Php my admin
- Un éditeur de code

## Installation
1. Cloner le dépôt : `git clone https://github.com/nom-utilisateur/nom-projet.git`
2. créer un dossier dans C:\wamp64\www  "projet connexion " contenant un dossier images avec toute les images, et un dossier Phpmailer avec les documents du dossier tous 2 présents sur github.


 
## Base de données
1. Créer une base de donée "espaceadmin" avec les tables suivantes:
   - Table permettant l'ajout de voitures
   `id` INT(11) NOT NULL AUTO_INCREMENT,
	  `prix` DECIMAL(10,2) NOT NULL,
  	`image` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	  `annee` YEAR NOT NULL,
	  `kilometrage` INT(11) NOT NULL,
	  `marque` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	  `modele` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	  `carburant` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	  PRIMARY KEY (`id`) USING BTREE
 )
  ENGINE=InnoDB;
2. Table permettant la modification des horaires
   CREATE TABLE `horaires_footer` (
	  `id` INT(11) NOT NULL AUTO_INCREMENT,
	  `jour_semaine` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	  `horaire` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	  PRIMARY KEY (`id`) USING BTREE
  )
   ENGINE=InnoDB;
3. Table permettant de receuillir les membres inscrit
     CREATE TABLE `membre` (
	   `id` INT(11) NOT NULL AUTO_INCREMENT,
	   `email` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	   `password` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	    PRIMARY KEY (`id`) USING BTREE
  )
ENGINE=InnoDB ;
4.Table permettant l'ajout de service du garage :
  CREATE TABLE `servicetable` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`ServiceName` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb3_general_ci',
  PRIMARY KEY (`ID`) USING BTREE
 )
ENGINE=InnoDB
;


## Exécution
1. Installer mariaDB
2. Modifier les paramètres de session, modifier le nom ou l'IP de l'hote en "localhost", le nom d'uitlisateur en root et le mdp en 'root1234'
3. Inserer les requetes SQL via l'inviter de commande MySQL Client MariaDB
4.Installer Wamp pour visionner le site en local.
5. Mettre le fichier contenat le projet dans "C:\wamp64\www\projetconnexion"





    


