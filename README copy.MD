# Convention de nomage générles 

Ces présentes conventions ont pour objectif d'harmoniser les noms des fichiers, des fonctions ou classes utilisées au sein des projets web.

## Langue

### La langue employée pour tout texte rédigé au cours d’un projet est le français :

    les commentaires dans un fichier de code,
    les titres de commit (versionning),
    les instructions dans le fichier readme.md,
    toute documentation explicative ou technique.

### La langue anglaise demeure préconisée pour :

    L’architecture et les dossiers du projet (assets, layout, components, fonts)
    Le nom des fichiers (single-something.html, index.js)
    Les branches principales de versionning (main, develop), avec possibilités en français si besoin (recette)

## Union de mots

Les conventions d’usage pour lier les mots sont :

    under_score :
        Fonctions PHP
    kebab-case :
        fichiers pouvant se retrouver dans les URLs (ex : single-something.html)
        classes HTML/CSS
    PascalCase :
        noms de composants dans Vue/Nuxt (ex : ModalAccountMixins.js)
        classes PHP
    camelCase :
        variables et fonctions dans JavaScript (ex : dateFormat, getResellSwitchQty())
        méthodes PHP
    ALL_CAPS (SCREAMING_SNAKE_CASE) :
        constantes

## Synonymes

Si on privilégie l'anglais pour le code et malgré son apparente simplicité, il existe toujours des synonymes.

### Exemple à ne pas reproduire (coexistence de cancel/remove/delete) :


```html
<button class="cancelProduct" onclick="removeProduct(1337)">
  <svg id="remove" ...>
</button>
function removeProduct(id) {
   axios.delete('/api/product', id)
}
```

### Suggestions et raisons :

    Ajouter à une liste : add ou append
    Suppression complète de données : delete (car les méthodes REST utilisent DELETE)
    Retirer un élément d'une liste : remove
    Annulation d'action : cancel
    Ouverture/fermeture : open/close (alternativement : toggle)
    Récupération de données : get (existe en tant que méthode HTTP)
    Remplacement de données : set (écrase tout)
    Mise à jour de données : update (similaire à patch, peut remplacer certaines clés d'un objet mais pas toutes)
    Réinitialisation à l'état initial : reset
    Callback/gestionnaire : handle (ex : handleClick)
    Dénombrement : count (ex: pageCount)
    États : is ou has (ex : isOpened, hasItems)
    Précédent/suivant : prev/next

## Nommage pour code en attente

En phase de développement d'un projet, les notes de modifications et améliorations restant à réaliser dans le code (CSS, HTML, JavaScript) doivent être consignées et notées TODO: (et non @TODO) ou FIXME: selon leur fonction :

    TODO: Partie de code non finalisée, non mis en oeuvre (par exemple TODO: implémenter les données, <a href="TODO:">)
    FIXME: Partie de code à améliorer, à modifier pour être plus performant, plus maintenable, etc. (par exemple : FIXME: mieux gérer le responsive, FIXME: refactoring)

### L'extension **VSCode TODO Highlight**  permet de mettre en exergue les tags TODO: (en jaune par défaut) et FIXME: (en rose par défaut).

TODO Highlight propose également de lister l'ensemble des tags par fichier via ctrl/cmd + maj + p > List highlighted annotations (liste les tags dans le document en cours).


*En fin de phase de développement, avant la livraison du projet, il est fondamental de vérifier la présence indésirable de ces tags au sein du code. L'idéal étant qu'un projet soit livré sans aucun tag TODO:.*