# Convention de nommage php

## Nommage des variables :

        Utilisez des noms descriptifs : Choisissez des noms de variables qui décrivent clairement leur contenu ou leur objectif. Utilisez des noms significatifs et évocateurs pour améliorer la lisibilité de votre code. Par exemple, utilisez "$userName" pour stocker le nom d'utilisateur ou "$totalPrice" pour le prix total d'une commande.
        Utilisez des lettres minuscules : Privilégiez les lettres minuscules pour les noms de variables en PHP afin de maintenir une cohérence avec la syntaxe générale du langage.

## Nommage des fonctions :

        Utilisez des verbes d'action : Choisissez des noms de fonctions qui indiquent clairement l'action qu'elles effectuent. Utilisez des verbes d'action précis pour rendre vos fonctions plus compréhensibles. Par exemple, utilisez "getUserData()" pour récupérer les données d'utilisateur ou "calculateTotalPrice()" pour calculer le prix total d'une commande.
        Utilisez des lettres minuscules et la notation en camel case : Utilisez des lettres minuscules pour les noms de fonctions et la notation en camel case pour séparer les mots. Par exemple, utilisez "getUserData()" plutôt que "getuserdata()" ou "GetUserData()".

## Nommage des constantes :

        Utilisez des lettres majuscules : Les constantes en PHP sont généralement nommées en utilisant uniquement des lettres majuscules et des traits de soulignement ("_") pour séparer les mots. Par exemple, utilisez "MAX_VALUE" pour définir la valeur maximale d'une variable.

## Nommage des classes :

        Utilisez la notation en Pascal case : Les noms de classe en PHP suivent généralement la notation en Pascal case, où chaque mot commence par une lettre majuscule. Par exemple, utilisez "UserModel" plutôt que "userModel" ou "user_model".
        Utilisez des noms descriptifs et substantifs : Choisissez des noms de classe qui décrivent clairement l'entité ou l'objet qu'elles représentent. Utilisez des noms substantifs qui reflètent leur rôle et leur responsabilité. Par exemple, utilisez "UserModel" pour une classe qui gère les données d'utilisateur ou "ProductService" pour une classe qui fournit des fonctionnalités liées aux produits.

## Nommage des fichiers PHP :

### Utilisez des noms descriptifs

    Nommez vos fichiers PHP de manière à ce qu'ils décrivent leur contenu ou leur fonction. Utilisez des noms significatifs qui reflètent le but du fichier. Par exemple, si le fichier contient des fonctions pour la gestion des utilisateurs, vous pourriez l'appeler "user_management.php".

### Utilisez la notation en kebab case

    Utilisez la notation en kebab case pour les noms de fichiers PHP, où les mots sont séparés par des traits d'union ("-"). Par exemple, utilisez "user-management.php" plutôt que "userManagement.php" ou "UserManagement.php".

### Utilisez des lettres minuscules

    Privilégiez les lettres minuscules pour les noms de fichiers PHP afin de maintenir une cohérence et d'éviter toute confusion.

### Suivez une structure cohérente :

    Organisez vos fichiers PHP dans une structure de dossiers logique pour faciliter la gestion du code. Par exemple, vous pouvez avoir un dossier "includes" pour les fichiers d'inclusion, un dossier "classes" pour les classes PHP, etc.
    Nommez vos fichiers et dossiers de manière cohérente en utilisant une convention qui convient à votre projet. Par exemple, vous pouvez utiliser la notation en kebab case pour les noms de dossiers, tels que "user-management".

- index.php
- style.css
- includes/
  - user-management.php
  - database-functions.php
- classes/
  - UserModel.php
  - ProductService.php
