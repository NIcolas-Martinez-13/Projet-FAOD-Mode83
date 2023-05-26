# Convention de nommage pour sass 

    Le framework SASS est une extension de CSS qui ajoute des fonctionnalités supplémentaires et une syntaxe plus avancée. Il permet de créer des feuilles de style CSS de manière plus efficace, modulaire et maintenable. SASS se compile ensuite en CSS standard qui peut être utilisé par les navigateurs web.

## Voici quelques fonctionnalités clés de SASS :

### Variables :
    SASS permet de déclarer des variables pour stocker des valeurs réutilisables dans vos styles. Vous pouvez définir une variable et l'utiliser ensuite dans vos règles CSS. Par exemple :
``` scss
 $primary-color: #FF0000;

.header {
  background-color: $primary-color;
}
```
    Ici, la variable $primary-color est définie avec la valeur #FF0000. Elle est ensuite utilisée pour définir la couleur de fond de l'élément .header.

### Nesting (Imbrication) :
    SASS permet d'imbriquer les sélecteurs CSS pour éviter la répétition et faciliter la lecture du code. Par exemple :

``` SCSS
.container {
  padding: 20px;

  h1 {
    font-size: 24px;
    color: #333;
  }

  p {
    line-height: 1.5;
  }
}
```

    Dans cet exemple, les styles des éléments h1 et p sont imbriqués à l'intérieur de la classe .container. Cela permet de mieux organiser et structurer le code.

### Mixins :
    Les mixins permettent de définir des blocs de styles réutilisables. Cela permet d'éviter la duplication de code. Par exemple :
    
```SCSS 
@mixin button-style {
  display: inline-block;
  padding: 10px 20px;
  background-color: $primary-color;
  color: #FFF;
}

.button {
  @include button-style;
```

    Ici, le mixin button-style définit un ensemble de styles pour un bouton. En utilisant l'instruction @include, vous pouvez réutiliser ces styles dans la classe .button.

### Importation :
    SASS permet d'importer des fichiers SASS dans d'autres fichiers. Cela permet de diviser votre code en fichiers modulaires et de les importer au besoin. Par exemple :

```scss
// main.scss
@import 'variables';
@import 'header';
@import 'footer';

// variables.scss
$primary-color: #FF0000;

// header.scss
.header {
  background-color: $primary-color;
}

// footer.scss
.footer {
  background-color: $primary-color;
}
```

    Ici, le fichier main.scss importe les fichiers variables.scss, header.scss et footer.scss. Cela permet de maintenir des fichiers CSS plus petits et de mieux organiser votre code.

## Installation SASS 

### Installation de Node.js

Pour installer Node.js quel que soit votre OS c'est très simple.

Vous pouvez utiliser un exécutable en le téléchargeant ici. 

[https://nodejs.org/en/download]

### Installation de git

    Créez un nouveau dossier, puis faites npm init dans le dossier. Cela créera un fichier package.json. 

#### Le fichier package.json permet de :

    - Lister les paquets utilisés par votre projet qui sont appelés ses dépendances. En effet, sans ces paquets, votre projet ne fonctionne pas, il est donc bien dépendant de celles-ci.

    - Spécifier précisément quelles versions des dépendances peuvent être installées.

    - Permettre aux développeurs d'installer toutes les dépendances de votre projet en une commande. 

### Installation de la dépendance : sass

    Pour installer une nouvelle dépendance dans un projet qui a un package.jon, il suffit d'utiliser npm et de faire :

```
npm install nom
```

Ces paquets seront installés dans le dossier node_modules et seront ajoutés comme dépendance dans le fichier package.json : 

```json
{
  "name": "my_package",
  "version": "1.0.0",
  "dependencies": {
    "ma_dependance": "^1.0.0",
  }
}
```

Pour installer sass il suffit donc de faire : 

``` 
npm i sass
```

### Le fichier package-lock.json

    Vous remarquerez que lorsque vous installez une dépendance avec npm i un fichier package-lock.json est créé.

    Pour s'assurer que l'arbre des dépendances (vos dépendances ont elles-mêmes des dépendances résultant en un arbre immense de dépendances) installé soit le même entre deux npm i avec le même package.json, npm crée un fichier package-lock.json qui est une image figée de l'arbre de toutes les dépendances (et des dépendances de vos dépendances etc), de votre projet. 

#### Premier script

Dans notre fichier package.json, vous remarquez qu'il y a une entrée scripts. 

Ces scripts peuvent être lancés en faisant 
```
npm run nom-du-script. 
```
```json
{
  "name": "sass",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "sass": "sass -w scss:css"
  },
  "keywords": [],
  "author": "",
  "license": "ISC",
  "dependencies": {
    "sass": "^1.32.11"
  }
}
```

    sass permet de lancer la librairie sass.

    --watch ou -w : permet d'indiquer le dossier ou les fichiers contenant les fichiers Sass qui vont être suivis et converti en CSS automatiquement. 

    --output ou -o : permet d'indiquer le dossier où seront mis les fichiers CSS convertis depuis le Sass. 

Nous pouvons ensuite lancer le script en faisant npm run sass. 

Si vous exécutez la commande dans le terminal, vous verrez qu'il reste bloqué. C'est tout à fait normal car il est en mode watch : il attend que des fichiers soient modifiés dans le dossier sass pour les compiler à chaque fois.

    Pour couper l'exécution vous pouvez faire Ctrl + c. 

#### Création de dossiers et fichiers pour tester

    Dans le dossier, créez un dossier scss pour les fichiers Sass et un dossier css pour les fichiers css.

Créez un fichier index.html et placez-y le template ! : 

```html 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Sass/title>
  </head>
  <body>
  </body>
</html>
```

Ensuite, dans le dossier scss créez un fichier style.scss et nous allons écrire notre premier code Sass : 

```css

body {
  background: red;
  height: 100vh;
}
```
Vous pouvez ensuite lancer le script avec npm run sass puis sauvegarder le fichier.

Vous pourrez observer qu'un fichier a été créé automatiquement en CSS dans le dossier css !

Remarquez déjà deux choses : l'extension des fichiers Sass est .scss et le code CSS fonctionne en Sass. 