

const carousel = document.querySelector(".carousel");
const firstImg = carousel.querySelectorAll("img")[0];
const arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false;
let isDragging = false;
let prevPageX;
let prevScrollLeft;
let positionDiff;

const showHideIcons = () => {
  // Affichage/masquage des icônes prev/next en fonction de la position du carrousel
  const scrollWidth = carousel.scrollWidth - carousel.clientWidth; // Obtenir la largeur maximale défilable
  arrowIcons[0].style.display = carousel.scrollLeft === 0 ? "none" : "block";
  arrowIcons[1].style.display = carousel.scrollLeft === scrollWidth ? "none" : "block";
};

arrowIcons.forEach(icon => {
  icon.addEventListener("click", () => {
    const firstImgWidth = firstImg.clientWidth + 13; // Obtenir la largeur de la première image et ajouter 21 de marge
    // Si l'icône cliquée est à gauche, soustrayez la largeur du carrousel à la valeur de la largeur de l'image, sinon ajoutez-la
    carousel.scrollLeft += icon.id === "left" ? -firstImgWidth : firstImgWidth;
    setTimeout(() => showHideIcons(), 60); // Appeler showHideIcons après 60ms
  });
});

const autoSlide = () => {
  // S'il n'y a plus d'images à faire défiler, retournez
  if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

  positionDiff = Math.abs(positionDiff); // Rendre la valeur de positionDiff positive
  const firstImgWidth = firstImg.clientWidth + 13;
  // Obtenir la valeur de différence à ajouter ou soustraire à la gauche du carrousel pour centrer l'image du milieu
  const valDifference = firstImgWidth - positionDiff;

  if (carousel.scrollLeft > prevScrollLeft) { // Si l'utilisateur fait défiler vers la droite
    return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
  }
  // Si l'utilisateur fait défiler vers la gauche
  carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
};

const dragStart = (e) => {
  // Mettre à jour les variables globales lors de l'événement de clic souris/touch
  isDragStart = true;
  prevPageX = e.pageX || e.touches[0].pageX;
  prevScrollLeft = carousel.scrollLeft;
};

const dragging = (e) => {
  // Faire défiler les images/carrousel vers la gauche en fonction de la position du pointeur de la souris
  if (!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carousel.classList.add("dragging");
  positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
  carousel.scrollLeft = prevScrollLeft - positionDiff;
  showHideIcons();
};

const dragStop = () => {
  isDragStart = false;
  carousel.classList.remove("dragging");

  if (!isDragging) return;
  isDragging = false;
  autoSlide();
};

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
