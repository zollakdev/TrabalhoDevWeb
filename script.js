// Função para carregar o header
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

document.addEventListener("DOMContentLoaded", loadHeader);

// Função para abrir o modal
function openModal() {
  var modal = document.getElementById("supportModal");
  modal.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("supportModal");
  modal.style.display = "none";
}

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
    gameInfos.forEach(function (gameInfo) {
      var gameTitle = gameInfo.querySelector("h2").textContent.toLowerCase();

      if (gameTitle.includes(searchTerm.toLowerCase())) {
        gameInfo.style.display = "block";

        gameInfo.scrollIntoView({ behavior: "smooth" });
      } else {
        gameInfo.style.display = "none";
      }
    });
  } else {
    gameInfos.forEach(function (gameInfo) {
      gameInfo.style.display = "block";
    });
  }
}

// funcao carrossel
document.addEventListener("DOMContentLoaded", function () {
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

  startCarousel(2);

  setInterval(nextSlide, 10000);
});

var nomeUsuario = "Nome do Usuário";

// Função para atualizar o cabeçalho com o ícone e o nome do usuário
function atualizarHeader() {
  var userIcon = document.getElementById("userIcon");
  var userName = document.getElementById("userName");

  userIcon.src = "user-icon.png";

  userName.textContent = nomeUsuario;
}

atualizarHeader();

function openGameModal(gameId, gameName) {
  var gameInfo = document.getElementById(gameId);
  var videoSrc = gameInfo.getAttribute("data-video");

  document.getElementById("modal-title").textContent = gameName;
  document.getElementById("game-video").setAttribute("src", videoSrc);

  var modal = document.getElementById("gameModal");
  modal.style.display = "block";
}

function closeGameModal() {
  var modal = document.getElementById("gameModal");
  modal.style.display = "none";
  var video = document.getElementById("game-video");
  video.setAttribute("src", "");
}

document
  .querySelector('a[href="#sobreNos"]')
  .addEventListener("click", function (e) {
    e.preventDefault();
    const targetSection = document.querySelector("#sobreNos");
    if (targetSection) {
      targetSection.scrollIntoView({
        behavior: "smooth",
      });
    }
  });

function loadFooter() {
  const footerContainer = document.getElementById("footerContainer");
  const xhr = new XMLHttpRequest();

  xhr.open("GET", "footer.html", true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      footerContainer.innerHTML = xhr.responseText;
    }
  };

  xhr.send();
}

document.addEventListener("DOMContentLoaded", loadFooter);

var selectedGames = [];
var buyButton;

function addToCart(gameName, gamePrice) {
  selectedGames = selectedGames || [];

  var existingGameIndex = selectedGames.findIndex(function (game) {
    return game.name === gameName;
  });

  if (existingGameIndex === -1) {
    selectedGames.push({ name: gameName, price: gamePrice });
  } else {
    selectedGames.splice(existingGameIndex, 1);
  }

  updateCartModal();
}
function buyGame() {
  alert("jogo adicionado ao carrinho!");

  if (!buyButton) {
    addToCart("Minecraft", 19.99);
    buyButton = true;
  } else {
    addToCart("The Legend of Zelda", 29.99);
  }
}

function updateCartModal() {
  var selectedGamesList = document.getElementById("selectedGamesList");

  if (selectedGamesList) {
    selectedGamesList.innerHTML = "";

    selectedGames.forEach(function (game) {
      var listItem = document.createElement("li");
      listItem.textContent = game.name + " - $" + game.price.toFixed(2);
      selectedGamesList.appendChild(listItem);
    });
  } else {
    console.error("Elemento com o ID selectedGamesList não encontrado.");
  }
}

function closeCartModal() {
  var cartModal = document.getElementById("cartModal");
  if (cartModal) {
    cartModal.style.display = "none";
  } else {
    console.error("Elemento com o ID cartModal não encontrado.");
  }
}

function openCartModal() {
  var cartModal = document.getElementById("cartModal");
  if (cartModal) {
    cartModal.style.display = "block";
  } else {
    console.error("Elemento com o ID cartModal não encontrado.");
  }
}

function redirectToBuyPage() {
  window.location.href = "comprar.html";
}
