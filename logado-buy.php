<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/icon-astronauta.ico" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <title>Astrosteam</title>
  </head>
  <body>
    <img
      src="images/starfall-gif-46.gif"
      alt="GIF animado"
      class="fundo-animado"
      loop
    />
    <header id="headerPHP"></header>
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
</script>
    <main>
      <div>
        <h1 id="compra">Seus Jogos Selecionados</h1>
        <ul id="selectedGamesList"></ul>
        <p id="totalPrice">Total: $0.00</p>
        <button id="confirmCompra" onclick="confirmPurchase() ">Comprar</button>
      </div>
      <div id="imageRot">
        <img src="/images/img-jg-5.png" alt="" class="rotating-image" />
        <img src="/images/img-jg-4.png" alt="" class="rotating-image" />
      </div>
    </main>
    <div id="footerContainer">
      <footer>© Astrosteam</footer>
    </div>
    <img
      src="images/starfall-gif-46.gif"
      alt="GIF animado"
      class="fundo-animado"
      loop
    />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/script.js"></script>
    <script src="/compra.js"></script>
  </body>
</html>
