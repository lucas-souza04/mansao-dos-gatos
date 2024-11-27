document.addEventListener("DOMContentLoaded", function() {
    console.log("Página inicial carregada!");
});

function toggleRadio(radio) {
    if (radio.checked) {
      setTimeout(() => radio.checked = false, 0);
    }
  }
  