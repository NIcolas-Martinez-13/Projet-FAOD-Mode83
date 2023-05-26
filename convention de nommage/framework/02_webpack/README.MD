# Conventions de nommage pour WEBPACK 
 
## Qu'est ce que c'est ? 

    Webpack est un puissant outil de build et de bundling pour les applications web. Il est principalement utilisé pour regrouper, transformer et optimiser les ressources web telles que les fichiers JavaScript, CSS, images, etc. Il permet également de gérer les dépendances entre les modules de votre application.

Voici une explication des principaux concepts et fonctionnalités de Webpack :

    Modules :
    Webpack traite votre application comme un graphe de dépendances où chaque fichier est considéré comme un module. Les modules peuvent dépendre les uns des autres, ce qui permet de charger uniquement les parties nécessaires de votre code lorsque cela est nécessaire. Vous pouvez utiliser la syntaxe import et export pour déclarer les dépendances entre les modules.

    Entrée (Entry) :
    L'entrée spécifie le point d'entrée de votre application, c'est-à-dire le fichier JavaScript principal à partir duquel Webpack commence à construire le graphe de dépendances. Vous pouvez définir plusieurs points d'entrée si vous avez plusieurs bundles à générer.

    Sortie (Output) :
    La sortie spécifie où Webpack doit générer les bundles résultants. Vous pouvez définir le nom du fichier de sortie, le chemin de sortie et d'autres options. Webpack génère des bundles optimisés, concaténant et minifiant les ressources de votre application.

    Chargeurs (Loaders) :
    Les chargeurs permettent à Webpack de traiter des types de fichiers autres que JavaScript. Par exemple, vous pouvez utiliser des chargeurs pour transpiler du code TypeScript en JavaScript, convertir du code SASS en CSS, ou compresser des images. Les chargeurs sont définis dans la configuration de Webpack et sont appliqués aux fichiers lors de la construction du bundle.

    Plugins :
    Les plugins sont des modules supplémentaires qui étendent les fonctionnalités de Webpack. Ils peuvent être utilisés pour effectuer des tâches telles que l'optimisation, la gestion des ressources, la génération de rapports, etc. Les plugins sont configurés dans le fichier de configuration de Webpack et peuvent être personnalisés selon les besoins de votre application.

    Mode de construction (Build Mode) :
    Webpack prend en charge différents modes de construction : développement (development) et production (production). Le mode de construction influence le comportement de Webpack, tel que l'activation/désactivation de l'optimisation, la génération de source maps, etc.

    Configuration :
    Webpack utilise un fichier de configuration (webpack.config.js) pour définir la manière dont votre application doit être construite. Dans ce fichier, vous pouvez spécifier les entrées, les sorties, les chargeurs, les plugins et d'autres options spécifiques à votre projet. La configuration de Webpack est hautement personnalisable et peut être adaptée aux besoins de votre application.

Avec Webpack, vous pouvez simplifier le processus de gestion des dépendances, d'optimisation des ressources et de création de bundles pour votre application web. Il offre une flexibilité et une extensibilité importantes grâce à ses fonctionnalités avancées.


## Installation de javascript 
Pour installer Webpack, vous devez suivre les étapes suivantes :

    Assurez-vous d'avoir Node.js installé : Webpack est un outil basé sur Node.js, donc vous devez vérifier si Node.js est déjà installé sur votre système. 
    
    Ouvrez votre terminal et exécutez la commande suivante pour vérifier la version de Node.js :
```css
node --version
```
    Si Node.js est déjà installé, vous verrez la version affichée. Si Node.js n'est pas installé, vous devrez l'installer avant de pouvoir utiliser Webpack.

    Initialisez votre projet : Accédez au répertoire racine de votre projet dans votre terminal et exécutez la commande suivante pour initialiser votre projet Node.js :

```csharp
npm init
```

    Cela va créer un fichier package.json qui contiendra les dépendances et les informations de configuration de votre projet.

    Installez Webpack : Dans votre terminal, exécutez la commande suivante pour installer Webpack en tant que dépendance de développement de votre projet :
```css
npm install webpack --save-dev
```

    Cela va installer Webpack localement dans votre projet et l'ajouter à la section devDependencies de votre fichier package.json.

    Configuration de Webpack : Créez un fichier de configuration pour Webpack appelé webpack.config.js à la racine de votre projet. Ce fichier contiendra la configuration de Webpack. Vous pouvez personnaliser cette configuration en fonction des besoins de votre projet. Voici un exemple de configuration de base :

```javascript
const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
};
```

    Cette configuration spécifie que le point d'entrée de votre application est src/index.js et le bundle résultant sera généré dans le répertoire dist avec le nom bundle.js.

    Utilisation de Webpack : Vous pouvez maintenant utiliser Webpack en exécutant la commande suivante dans votre terminal :

    npx webpack

    Cela va lancer le processus de build de Webpack en utilisant la configuration spécifiée dans webpack.config.js. Webpack va créer le bundle et le placer dans le répertoire de sortie spécifié.  

## SASS ET WEBPACK ? 

    Oui, Sass et Webpack sont souvent utilisés ensemble dans les projets web. En fait, Webpack peut être configuré pour compiler les fichiers Sass en CSS à l'aide de loaders appropriés.

### Voici comment vous pouvez utiliser Sass avec Webpack :

#### Installer les dépendances :
    Assurez-vous d'avoir installé Webpack et Sass dans votre projet, comme expliqué précédemment :
```css
npm install webpack sass sass-loader --save-dev
```
    Cela installe Webpack, Sass et sass-loader en tant que dépendances de développement dans votre projet.

#### Configurer Webpack pour Sass :
    Ajoutez les règles nécessaires dans votre configuration Webpack (webpack.config.js) pour traiter les fichiers Sass à l'aide du sass-loader. Par exemple :

```js

const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          'style-loader',
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
};
```

    Cette configuration indique à Webpack d'utiliser le sass-loader pour traiter les fichiers avec l'extension .scss. Les loaders style-loader, css-loader et sass-loader sont utilisés successivement pour charger les fichiers Sass, les convertir en CSS et les injecter dans le DOM.

#### Utiliser Sass dans votre projet :
    Vous pouvez maintenant importer des fichiers Sass dans vos fichiers JavaScript ou HTML. Par exemple, dans votre fichier JavaScript principal (index.js), vous pouvez importer un fichier Sass comme suit :
```js
    import './styles.scss';
```

    Assurez-vous que le fichier Sass que vous importez a l'extension .scss.

#### Exécuter Webpack pour construire le projet :
    Lancez la commande suivante dans votre terminal pour exécuter Webpack et générer le bundle :

    npx webpack

    Webpack va maintenant compiler les fichiers Sass en CSS et générer le bundle avec les styles appliqués.