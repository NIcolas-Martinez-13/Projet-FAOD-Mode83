# Convention de nomage html

## Utilisez des noms descriptifs 
    Nommez les éléments HTML de manière à ce qu'ils décrivent leur contenu ou leur fonction. Évitez d'utiliser des noms génériques tels que "div1"  ou "element2". Par exemple, au lieu d'utiliser

``` html
    <div id="div1">
```
    utilisez

``` html
    <div id="header">
```
    si l'élément représente l'en-tête du site.


## Utilisez des noms en minuscules 

     Utilisez des lettres minuscules pour les noms d'éléments HTML. Les noms d'éléments HTML sont insensibles à la casse, mais il est préférable de rester cohérent et d'utiliser des minuscules pour éviter toute confusion.

## Utilisez des traits d'union pour les noms composés 

    Si vous avez besoin d'utiliser des noms composés pour vos éléments HTML, utilisez des traits d'union pour les séparer. Par exemple, 
``` html
<div id="main-content">
```  
     est préférable à 
```html 
    <div id="main_content">.
```

## Évitez les noms génériques 
    Essayez de nommer vos éléments HTML en fonction de leur contenu ou de leur fonction spécifique. Par exemple, au lieu d'utiliser 
    
``` html 
<div id="text"> 
 ```

    pour un paragraphe de texte, utilisez plutôt 
 ```html
 <p id="introduction">
 ``` 
    si le paragraphe est une introduction.


## Utilisez des noms courts et significatifs 
     Essayez de trouver un équilibre entre des noms courts et des noms qui restent significatifs. Des noms trop courts peuvent manquer de clarté, tandis que des noms trop longs peuvent être fastidieux à taper et à lire.

## Titre de la page

    Le titre de page, différent à chaque page, d'une longueur maximum de 55 caractères (SEO), est systématiquement renseigné via un élément 
``` html
<title> dans le <head>
```

## Meta "Viewport"

    Pour une adaptation du site web vers les terminaux mobiles, l’élément <meta name="ewport"> est ajouté dans la partie <head>.
```html
<meta name="viewport" content="width=device-width, initial-scale=1" />
```

## Sémantique globale

    Les éléments HTML5 
``` html 
    <header>, <article>, <main>, <footer>, <aside>, <section> et <nav> sont privilégiés aux éléments neutres <div> 
```
     si leur fonction s’y prête.
    
### La structure globale préconisée est celle-ci :

```html
<body> : corps de page et du site web

<div id="layout-page"> : sous-conteneur optionnel. Par exemple si body ne suffit pas

<div class="layout-inner"> : sous-conteneur optionnel. Par exemple pour centrer plusieurs blocs de la même manière

<main id="main" role="main"> : conteneur général du contenu principal, typiquement ce qui n'est pas dans header et footer

<header id="header" role="banner"> : entête global, comportant souvent la navigation et des éléments qui se retrouvent en commun sur (quasiment) toutes les pages

<footer id="footer" role="contentinfo"> : pied de page global comportant des éléments qui se retrouvent en commun sur (quasiment) toutes les pages

<aside class="aside" role="complementary"> : barre latérale globale. Note : <aside> doit pouvoir être extrait de la page sans poser de problème, en clair ne pas y placer la navigation par exemple.

<nav id="navigation" role="navigation"> : navigation principale

<form id="search" role="search"> : recherche principale
```

## Niveaux de titres

    Chaque page doit comprendre un élément de titre de premier niveau <h1> et la structure des autres niveaux doit suivre un ordre logique (h1 à h6).



