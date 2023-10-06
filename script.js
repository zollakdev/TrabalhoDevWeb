// Função para carregar o header usando JavaScript
function loadHeader() {
  const headerContainer = document.getElementById("headerContainer");
  const xhr = new XMLHttpRequest();

  xhr.open("GET", "header.html", true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      headerContainer.innerHTML = xhr.responseText;

      // Após carregar o header, você pode vincular os eventos aqui
      var supportLink = document.getElementById("supportLink");
      supportLink.addEventListener("click", openModal);

      var closeModalButton = document.getElementById("closeModal");
      closeModalButton.addEventListener("click", closeModal);
    }
  };

  xhr.send();
}

// Carregue o header quando a página for carregada
document.addEventListener("DOMContentLoaded", loadHeader);

// Função para abrir o modal
function openModal() {
  var modal = document.getElementById("supportModal");
  modal.style.display = "block";
}

// Função para fechar o modal
function closeModal() {
  var modal = document.getElementById("supportModal");
  modal.style.display = "none";
}

// Associando eventos aos elementos (após o modal ter sido carregado)
document.addEventListener("DOMContentLoaded", function () {
  var supportLink = document.getElementById("supportLink");
  supportLink.addEventListener("click", openModal);

  var closeModalButton = document.getElementById("closeModal");
  closeModalButton.addEventListener("click", closeModal);
});

function searchDiv() {
  var searchTerm = document.querySelector("#searchInput").value;
  var gameInfos = document.querySelectorAll(".game-info");

  if (searchTerm.trim() !== "") {
    // Itera por todas as divs com a classe "game-info"
    gameInfos.forEach(function (gameInfo) {
      var gameTitle = gameInfo.querySelector("h2").textContent.toLowerCase();

      // Verifica se o termo de pesquisa corresponde ao título do jogo (ignorando maiúsculas e minúsculas)
      if (gameTitle.includes(searchTerm.toLowerCase())) {
        gameInfo.style.display = "block";

        // Rola a página até o item correspondente
        gameInfo.scrollIntoView({ behavior: "smooth" });
      } else {
        gameInfo.style.display = "none";
      }
    });
  } else {
    // Se o campo de pesquisa estiver vazio, exibe todos os jogos
    gameInfos.forEach(function (gameInfo) {
      gameInfo.style.display = "block";
    });
  }
}

document.addEventListener("DOMContentLoaded", function () {
  // Variáveis para controle do carrossel
  const carouselItems = document.querySelectorAll(".carousel-item");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  let currentIndex = 0;

  function showSlide(index) {
    carouselItems.forEach((item, i) => {
      item.classList.remove("active");
      if (i === index) {
        item.classList.add("active");
      }
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % carouselItems.length;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex =
      (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    showSlide(currentIndex);
  }

  function startCarousel(initialIndex) {
    currentIndex = initialIndex;
    showSlide(currentIndex);
  }

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  // Chama a função startCarousel para começar no índice desejado (por exemplo, 2 para a terceira imagem)
  startCarousel(2);

  // Troca de slide automaticamente a cada 5 segundos
  setInterval(nextSlide, 10000);
});
