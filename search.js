console.log("code initialisé"); // Un petit test pour vérifier que le code fonctionne

function liveSearch() {
  
  let cards = document.querySelectorAll(".card"); // Nous sélectionnons tous les éléments avec la classe "cards" et les assignons à la variable 'cards'. Cela nous permettra d'effectuer la recherche uniquement sur les cartes qui ont cette classe.

  let search_query = document.getElementById("searchbox").value; // Nous récupérons la valeur de la recherche à partir de l'élément ayant l'ID "searchbox" et l'assignons à la variable 'search_query'.
  console.log(search_query); // Nous vérifions la valeur entrée dans la barre de recherche en affichant cette valeur dans la console.

  for (var i = 0; i < cards.length; i++) { // Cette boucle parcourt chaque carte (élément avec la classe "cards") en fonction de la longueur du tableau cards.length.
    // Si le texte se trouve dans la carte
    if (
      cards[i].innerText
        .toLowerCase()
        // et que le texte correspond à la requête de recherche
        .includes(search_query.toLowerCase())
    ) {
      // nous supprimons la classe ".is-hidden".
      cards[i].classList.remove("is-hidden");
    } else {
      // Sinon, nous ajoutons la classe.
      cards[i].classList.add("is-hidden");
    }
  }
}

console.log("fin"); // Un petit test pour vérifier si le code a été exécuté jusqu'à la fin.
