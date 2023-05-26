# Convention de nommage JS 

## Utilisez des noms descriptifs 

    Nommez vos variables, fonctions et objets de manière à ce qu'ils décrivent clairement leur objectif et leur fonction. Utilisez des noms significatifs qui reflètent l'intention de votre code. Par exemple, utilisez getUserData pour une fonction qui récupère les données d'utilisateur.

## Utilisez la notation en camel case 

    Utilisez la notation en camel case pour les noms composés, où chaque mot commence par une lettre majuscule, à l'exception du premier. Par exemple, utilisez getUserData plutôt que get_user_data ou getuserdata.

## Utilisez des noms en minuscules pour les variables et les fonctions 

    Conservez les noms de variables et de fonctions en minuscules pour différencier les identificateurs des objets ou des classes. Par exemple, utilisez userCount pour une variable et getUserData pour une fonction.

## Utilisez des noms en Pascal case pour les classes et les constructeurs 

    Utilisez la notation en Pascal case pour les noms de classes et de constructeurs, où chaque mot commence par une lettre majuscule. Par exemple, utilisez User pour une classe et UserModel pour un constructeur.

## Utilisez des préfixes ou des suffixes pour indiquer le type d'élément 

    Vous pouvez utiliser des préfixes ou des suffixes pour indiquer le type d'élément ou sa portée. Par exemple, utilisez isReady pour une variable booléenne, handleClick pour une fonction de gestion d'événement, ou userDataCache pour une variable de mise en cache de données d'utilisateur.

## Évitez les noms génériques 

    Essayez d'éviter les noms génériques tels que data, value, ou temp. Utilisez des noms plus spécifiques et significatifs qui reflètent le contexte et l'intention de votre code.

## Suivez une structure cohérente 

    Maintenez une cohérence dans la convention de nommage tout au long de votre code JavaScript. Cela facilite la lecture et la compréhension de votre code par vous-même et par d'autres développeurs.

Voici un exemple d'application de cette convention de nommage :

```javascript
function getUserData() {
  var userCount = 0;
  var isReady = false;

  function handleClick() {
    // code here
  }

  // code here
}

class UserModel {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  getFormattedName() {
    // code here
  }
}
```

## Nommage de fichier JS 

### Utilisez des noms descriptifs 

    Nommez vos fichiers JavaScript de manière à ce qu'ils décrivent leur contenu ou leur fonction. Utilisez des noms significatifs qui reflètent le but du fichier. Par exemple, si le fichier contient des fonctions utilitaires, vous pourriez l'appeler "utilities.js".

### Utilisez des lettres minuscules 

    Utilisez des lettres minuscules pour les noms de fichiers JavaScript. Comme pour les autres types de fichiers, il est préférable de rester cohérent et d'utiliser des minuscules pour éviter toute confusion.

### Utilisez des traits d'union pour les espaces 

    Si vous souhaitez séparer les mots dans un nom de fichier, utilisez des traits d'union ("-") à la place des espaces. Par exemple, utilisez "data-processing.js" plutôt que "data processing.js".

### Utilisez l'extension ".js" 

    Pour indiquer que le fichier est un fichier JavaScript, utilisez l'extension ".js" à la fin du nom de fichier. Cela aide à identifier facilement les fichiers JavaScript parmi d'autres types de fichiers.

### Suivez une structure cohérente 

    Si votre projet utilise une structure de dossiers pour organiser les fichiers JavaScript, essayez de suivre une convention de nommage cohérente à l'intérieur de ces dossiers. Par exemple, vous pouvez avoir un dossier "js" contenant des fichiers tels que "utilities.js", "main.js", "form-validation.js", etc.

Voici un exemple de structure de fichiers avec cette convention de nommage :

- index.html
- style.css
- js/
  - main.js
  - utilities.js
  - form-validation.js
