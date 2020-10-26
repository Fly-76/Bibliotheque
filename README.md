# Projet AFPA - S17 : Application de gestion d'une bibliothèque

## Objectif : 
L'application bibliothèque met en oeuvre le développement de la partie backend d’une application web ou web mobile.

## Compétences mises en oeuvre : 
- Maquettage d'une application
- Création et gestion d'une base de données
- Développement des composants d’accès aux données
- Utilistion des jointures SQL
- Utilisation des transactions SQL
- Utilisation du design pattern MVC
- Utilisation de la POO
- Prise en compte de la sécurité liées aux failles standards (faille XSS et injection SQL)

## Description : 
-  l’application est accessible aux seuls employés des bibliothèques

L’application permet :
- Afficher la liste des livres contenus dans le catalogue ainsi que leur statut (disponible ou prêté)
- Ajouter un livre au catalogue
- Supprimer un livre du catalogue s’il n’est pas emprunté
- Pouvoir accéder à la fiche descriptive de chaque livre enregistré en BDD
- Pouvoir modifier le statut de chaque livre de disponible à prêté et de prêté à disponible. 

Quand un livre est prêté  :
le/la bibliothécaire indique le numéro d’identification unique de l’utilisateur afin de savoir qui a emprunté quoi.
Quand on revient sur la fiche descriptive du livre,
celle-ci indique maintenant les informations du livre ainsi que celles de l’utilisateur qui l’a emprunté.

- Afficher la liste de tous les utilisateurs enregistrés dans le système, ainsi que leurs informations personnelles,
les livres qu’ils ont éventuellement empruntés quand on clique sur leur fiche personnelle.
