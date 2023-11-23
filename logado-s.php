<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="shortcut icon" href="images/icon-astronauta.ico" />
    <link rel="stylesheet" href="/style.css" />

    <title>Astrosteam</title>
  </head>
  <body>
    <img
      src="images/starfall-gif-46.gif"
      alt="GIF animado"
      class="fundo-animado"
      loop
    />
    <header id="headerPHP">
  <script>
  function loadHeader2() {
    const headerContainer2 = document.getElementById("headerPHP");
    const xhr2 = new XMLHttpRequest();

    xhr2.open("GET", "headerLogado.php", true);

    xhr2.onload = function () {
      if (xhr2.status === 200) {
        headerContainer2.innerHTML = xhr2.responseText;
      }
    };

    xhr2.send();
  }

  
  document.addEventListener("DOMContentLoaded", loadHeader2);
  function redirectToBuyPage2() {
  window.location.href = "logado-buy.php";
}
</script>
  </header>
  <main>
      <div id="cartModal">
        <span id="closeCartModal" onclick="closeCartModal()">&times;</span>
        <h2>Jogos Selecionados</h2>
        <ul id="selectedGamesList"></ul>
        <button id="buyButton" onclick="redirectToBuyPage2()">Comprar</button>
      </div>
      <button id="buttonCart" onclick="openCartModal()">🛒</button>
      <div class="jogos">
        <div class="game-info" id="minecraft" data-video="videos/video-1.mp4">
          <a
            href="javascript:void(0);"
            onclick="openGameModal('minecraft', 'Minecraft', 'minecraft-image.jpg')"
          >
            <img src="images/img-jg-5.png" alt="Minecraft" class="game-icon" />
            <h2>Minecraft</h2>
          </a>
        </div>

        <div class="game-info" id="zelda" data-video="videos/video-2.mp4">
          <a
            href="javascript:void(0);"
            onclick="openGameModal('zelda', 'The Legend of Zelda', 'zelda-image.jpg')"
          >
            <img
              src="images/img-jg-4.png"
              alt="The Legend of Zelda"
              class="game-icon"
            />
            <h2>The Legend of Zelda</h2>
          </a>
        </div>

        <div class="game-info" id="fallout" data-video="videos/video-3.mp4">
          <a
            href="javascript:void(0);"
            onclick="openGameModal('fallout', 'Fallout 4', 'img-jg-6.jpg')"
          >
            <img src="images/img-jg-6.jpg" alt="Fallout 4" class="game-icon" />
            <h2>Fallout 4</h2>
          </a>
        </div>

        <div class="game-info" id="cod" data-video="videos/video-5.mp4">
          <a
            href="javascript:void(0);"
            onclick="openGameModal('cod', 'Call of Duty Infinity Warfare', 'img-jg-8.jpeg')"
          >
            <img
              src="images/img-jg-8.jpeg"
              alt="CoD Infinity Warfare"
              class="game-icon"
            />
            <h2>Call of Duty Infinity Warfare</h2>
          </a>
        </div>

        <div class="game-info" id="mario" data-video="videos/video-4.mp4">
          <a
            href="javascript:void(0);"
            onclick="openGameModal('mario', 'Super Mario Odyssey', 'img-jg-7.png')"
          >
            <img
              src="images/img-jg-7.png"
              alt="Super Mario Odyssey"
              class="game-icon"
            />
            <h2>Super Mario Odyssey</h2>
          </a>
        </div>
      </div>

      <div id="gameModal" class="modal">
        <div class="modal-content">
          <span class="close-button" onclick="closeGameModal()">&times;</span>
          <div class="modal-info">
            <h2 id="modal-title">Nome do Jogo</h2>
            <p>Descrição do jogo e outras informações.</p>
            <button class="buy-button" onclick="buyGame()">Comprar</button>
          </div>
          <div class="modal-image">
            <video controls id="game-video">
              <source src="caminho/para/seu/video.mp4" type="video/mp4" />
              Seu navegador não suporta o elemento de vídeo.
            </video>
          </div>
        </div>
      </div>
    </main>
    <div id="footerContainer">
      <footer>© Astrosteam</footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/script.js"></script>
  </body>
</html>
