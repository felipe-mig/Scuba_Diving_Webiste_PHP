// Source Code: https://codepen.io/kostastepetes/pen/BaQJGVM?anon=true&view=pen

//Gallery
const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    removeActiveClasses();
    card.classList.add("active");
  });
});

function removeActiveClasses() {
    cards.forEach(card => {
        card.classList.remove('active')
    })
}

