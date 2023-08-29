// script.js
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(index) {
  slides[currentSlide].classList.remove('active');
  slides[index].classList.add('active');
  currentSlide = index;
}

showSlide(currentSlide); // Mostra o primeiro slide

// Lógica para avançar o slide
function nextSlide() {
  const nextIndex = (currentSlide + 1) % slides.length;
  showSlide(nextIndex);
}

// Lógica para retroceder o slide
function prevSlide() {
  const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
  showSlide(prevIndex);
}

// Event listeners para os botões de navegação (se você quiser adicionar botões)
document.querySelector('.next-button').addEventListener('click', nextSlide);
document.querySelector('.prev-button').addEventListener('click', prevSlide);

function showSlide(slideIndex) {
  slides.forEach((slide, index) => {
    if (index === slideIndex) {
      slide.style.opacity = '1';
    } else {
      slide.style.opacity = '0';
    }
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

setInterval(nextSlide, 10000); // Troca de slide a cada 10 segundos
showSlide(currentSlide); // Mostrar o primeiro slide inicialmente
