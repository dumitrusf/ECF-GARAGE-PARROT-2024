Voici le document traduit en français avec le format Markdown demandé :

---

# Documentation Technique : Projet ECF Garage Parrot 2024
Ce document résume la mise en œuvre et la structure du Projet ECF Garage Parrot 2024, détaillant les technologies utilisées, l'approche adoptée pour le développement, et les ressources fournies pour la compréhension et l'exécution du projet.

## Liens Clés du Projet
**Repositorio GitHub :** Tout le code source du projet est disponible dans le répertoire public GitHub suivant : [ECF-GARAGE-PARROT-2024](https://github.com/dumitrusf/ECF-GARAGE-PARROT-2024.git).

- **Gestinn de Projet**:
  - Jira: [Jira](https://jira.external-share.com/issue/61a7014e-e7a8-4ae3-b0e1-daeb16dc338f)
  - Trello: [Trello](https://trello.com/invite/b/cAaOcbUM/ATTI5c5a9cbfb693f6633da54f49fc09807b76C5F7F2/needings-ecf-fev2024)

## Documentation Technique et Carte Graphique :
La documentation technique initiale et la carte graphique sont disponibles pour consultation sur [OneDrive](https://onedrive.live.com/?authkey=%21AL6oVzgF%5Fy5TJVw&cid=2C3D1E2234649594&id=2C3D1E2234649594%21206351&parId=2C3D1E2234649594%21184991&o=OneUp).

## Exécution en Local
Pour exécuter le projet dans un environnement local, l'installation d'outils fondamentaux tels que Composer, Symfony CLI, XAMPP et MySQL est requise. Malgré les défis rencontrés, en particulier avec la version LTS de Symfony (6.4.3) et la gestion des bases de données, des procédures claires et simples ont été établies pour configurer l'environnement de développement local. Les détails spécifiques et les étapes à suivre se trouvent dans le fichier readme.md inclus dans le répertoire du projet.

## Création d'un Administrateur pour le Back-Office
La création d'un administrateur pour le back-office est un aspect crucial du projet, destiné à faciliter la gestion du contenu et l'administration de l'application web. Bien que la mise en œuvre spécifique du back-office n'ait pas été complétée dans le cadre temporel du projet, les bases pour son développement futur ont été posées.

## Base de Données
Le projet comprend des scripts pour la création de la base de données, assurant une structure solide pour stocker et gérer les données nécessaires à l'application web. La décision de se concentrer sur des scripts de création manuels reflète un engagement envers les meilleures pratiques de développement, évitant la génération automatique de SQL à travers des interfaces graphiques pour répondre aux exigences du titre professionnel.

## Réflexions Finales
Tout au long du développement du projet ECF Garage Parrot 2024, plusieurs défis techniques ont été rencontrés, y compris des bugs et des problèmes liés à la configuration de l'environnement de développement et à l'intégration des technologies. Malgré ces obstacles, des progrès significatifs ont été réalisés, jetant les bases d'une application web évolutive et bien structurée. L'expérience acquise dans la résolution de problèmes et la gestion de projet sera inestimable pour le développement continu et l'amélioration du projet.

Pour plus d'informations et de détails sur la mise en œuvre et la structure du projet, les parties intéressées sont invitées à consulter le répertoire GitHub et la documentation technique fournie.

---
---

D'accord, voici la procédure mise à jour pour l'exécution locale du projet ECF Garage Parrot 2024, en tenant compte de tes précisions, et traduite en français :

---

# Procédure pour l'Exécution Locale du Projet ECF Garage Parrot 2024

Ce document fournit un guide étape par étape pour configurer et exécuter le projet ECF Garage Parrot 2024 dans un environnement de développement local.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé le logiciel suivant :

- PHP 8.2 ou supérieur
- Composer, le gestionnaire de dépendances pour PHP
- Symfony CLI, pour faciliter le développement avec Symfony
- XAMPP (ou tout autre serveur local de votre choix, comme MAMP ou LAMP) pour MySQL et Apache
- Git, pour cloner le répertoire du projet

## Configuration de l'Environnement

1. **Créer le Projet :**
   Ouvrez un terminal et naviguez jusqu'au répertoire où vous souhaitez héberger le projet. Exécutez la commande suivante pour créer le projet avec Composer :

   ```bash
   composer create-project symfony/website-skeleton . "6.4.*"
   ```

2. **Installer les Dépendances :**
   Accédez au répertoire du projet cloné et utilisez Composer pour installer les dépendances du projet :

   ```bash
   composer install
   ```

3. **Configurer le Fichier `.env.local` :**
   Pour configurer votre environnement de développement local, créez un fichier `.env.local` à la racine du projet. Ce fichier doit contenir les configurations spécifiques de votre environnement, telles que la chaîne de connexion à la base de données :

   ```
   DATABASE_URL=mysql://utilisateur:motdepasse@localhost:3306/nom_de_votre_base_de_données
   ```

   Remplacez `utilisateur`, `motdepasse`, et `nom_de_votre_base_de_données` par vos propres valeurs.

## Base de Données

1. **Créer la Base de Données :**
   Assurez-vous que votre serveur MySQL est opérationnel. Créez une nouvelle base de données qui correspond au nom que vous avez configuré dans votre fichier `.env.local`.

2. **Exécuter les Migrations :**
   Exécutez les migrations pour structurer votre base de données en exécutant la commande suivante dans le terminal :

   ```bash
   symfony console doctrine:migrations:migrate
   ```

## Exécution du Projet

Pour démarrer le serveur de développement de Symfony et accéder à l'application, exécutez :

```bash
symfony serve -d
```

Pour arrêter le serveur, utilisez :

```bash
symfony server:stop
```

Pour installer le certificat SSL local et permettre une connexion sécurisée, utilisez :

```bash
symfony server:ca:install
```

Ouvrez votre navigateur et naviguez jusqu'à `https://localhost:8000` pour voir l'application en action.

## Résolution des Problèmes

Si vous rencontrez des problèmes lors de la tentative d'exécution du projet, assurez-vous de vérifier que toutes les dépendances sont correctement installées et que la configuration dans `.env.local` est correcte et correspond à votre environnement local.

Pour plus de détails sur la configuration spécifique du projet et les étapes avancées, consultez le fichier `README.md` inclus dans le répertoire du projet.

---

Assurez-vous d'adapter les instructions spécifiques en fonction des besoins et configurations de votre projet.


