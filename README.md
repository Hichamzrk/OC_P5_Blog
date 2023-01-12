![Screenshot](Branding.png)
## Presentation du projet

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f0c0b6e5d4f1456fa2c2afb7483aad9b)](https://app.codacy.com/manual/Hichamzrk/OC_P5_Blog?utm_source=github.com&utm_medium=referral&utm_content=Hichamzrk/OC_P5_Blog&utm_campaign=Badge_Grade_Dashboard)

- Blog en php orienté objet.
- Utilisation du modele MVC.
- Page d'accueil.
- Articles.
- Espace d'administration.
- Formulaire de contact.
- Merci à Benoit Gambier pour les ressources très instructive : https://www.youtube.com/channel/UCVPd3h_V_hGjMZ8jNMt939Q

## Pour commencer

Cloner le projet sur votre machine.

### Pré-requis

Ce qu'il est requis pour commencer avec votre projet : 

- Serveur local (Mamp, Lamp, wamp...).
- Editeur de texte (Sublime, Vs code, Atom...).

### Installation

Les étapes pour installer votre programme :

- Démarrer votre serveur local : `php -S 127.0.0.1:8000 -t ./Public/`
- Import du fichier sql : `mysqldump -u username -p database_name > data-dump.sql`
- Variable d'environnement de connexion à la base de donnée : /Core/Db/Db.php -> ligne 15. 

### Paramétrage du formulaire de contact

Changer les differentes informations : /Controller/MainController

- ligne 23 : Votre email
- ligne 24 : Le sujet
- ligne 25 : Le message
- ligne 26 : Le header

### Démarrage

- Lancer votre serveur local.
- Pointer le serveur local sur le dossier public : /Public
- Espace d'administration : (par defaut) -Email : Exemple@test.com ; -Mot de passe : 1234
- Enjoy 🎉
