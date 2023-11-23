<?php
session_start();
?>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/icon-astronauta.ico" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Astrosteam</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-3">
            <div class="logo">
              <a href="/logado.php">
                <img src="images/Background.png" alt="logo" />
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="/logado-s.php">Store</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/logado-c.php">Community</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sobreNos">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="supportLink" href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
          <div id="supportModal" class="modal">
          <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <p>Entre em contato conosco:</p>
            <a
              href="https://api.whatsapp.com/send?phone=SEUNUMERO"
              target="_blank"
            >
              <img src="images/icon-whatsapp.png" alt="WhatsApp" />
            </a>
            <a href="mailto:astrosteamtoken@gmail.com">
              <img src="images/icon-gmail.png" alt="Gmail" />
            </a>
          </div>
        </div>
          <div class="col-md-3">
            <div class="search">
              <input
                type="text"
                placeholder="Search..."
                class="form-control search-text"
                id="searchInput"
              />
              <button
                id="searchButton"
                class="btn btn-primary"
                onclick="searchDiv()"
              >
                &#128269;
              </button>
              <div>
            <?php
            if (isset($_SESSION['nomeUsuario']) && !empty($_SESSION['nomeUsuario'])) {
            echo '<div id="nomeUsuarioDiv">' . $_SESSION['nomeUsuario'] . '</div>';
            } else {
             echo '<a href="/login.html" id="in-ss" class="in-ss-text">Iniciar sessão</a>';
            }
            ?>
           
            </div>
            <a href="/logout.php" id="sair">Sair</a>

            </div>
          </div>
        </div>
      </div>
    </header>
    
  </body>
  <script>
    function openModal() {
  var modal = document.getElementById("supportModal");
  modal.style.display = "block";
}

// Função para fechar o modal
function closeModal() {
  var modal = document.getElementById("supportModal");
  modal.style.display = "none";
}
  document.querySelector('a[href="#sobreNos"]').addEventListener('click', function (e) {
    e.preventDefault();
    const targetSection = document.querySelector('#sobreNos');
    if (targetSection) {
      targetSection.scrollIntoView({
        behavior: 'smooth',
      });
    }
  });
</script>
</html>