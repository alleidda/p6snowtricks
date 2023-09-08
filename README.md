# p6snowtricks
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/e47117bb7fe045e3b114cb7332b8a781)](https://app.codacy.com/gh/alleidda/p6snowtricks/dashboard?utm_source=gh&utm_medium=referral&utm_content=&utm_campaign=Badge_grade)

Création d'un site communautaire de partage de figures de snowboard en utilisant le framework Symfony, dans le cadre de la formation OpenClassroom Développeur d'application - PHP / Symfony.

Installation 

Clonez le repository Github

Installer les dépendances

composer install
Lancer les containers

docker-compose up -d
Entrer dans le container php afin de lancer les commandes pour la BDD
docker exec -it [le nom du container php] bash

Dans le container lancer la commande suivante pour migrer les tables dans la base de données
php bin/console doctrine:migrations:migrate

Pour charger les fixtures (pour des tests) utilisez la commande:
php bin/console doctrine:fixtures:load

Quitter le container

exit

login: admin@demo.fr

mdp: admin01

Les mails seront captés par le container Maildev, pour s'y rendre il faut rentrer l'adresse http://127.0.0.1:1080/

