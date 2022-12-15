console.clear();

const blocs = document.querySelectorAll(".bloc");
const form = document.querySelector(".section-temps");

// Fonction qui va toggle, ici toggle est une closure function
const toggle = (() => {
  // Bloc courant pour le masquer si on reclique dessus
  let currentBloc = null;

  return ({ target }) => {
    if (target === currentBloc) {
      // Meme bloc donc on reset l'état
      currentBloc = null;
      form.classList.add("hidden");
      return;
    }
    currentBloc = target;
    form.classList.remove("hidden");
  };
})();

blocs.forEach((bloc) => bloc.addEventListener("click", toggle));



const hiddenButtons = document.querySelectorAll("button");

hiddenButtons.forEach(button => {
  button.addEventListener("click", (e) => {
    const nextButton = e.target.nextElementSibling;
    nextButton.style.display = "block";
  })
})