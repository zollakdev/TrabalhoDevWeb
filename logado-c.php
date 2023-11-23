<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/style.css" />
    <link rel="shortcut icon" href="images/icon-astronauta.ico" />
    <title>Astrosteam</title>
</head>
<body>

<img src="images/starfall-gif-46.gif" alt="GIF animado" class="fundo-animado" loop />

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
    </script>
</header>

<main>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a
                class="nav-link active"
                id="home-tab"
                data-toggle="tab"
                href="#home"
                role="tab"
                aria-controls="home"
                aria-selected="true"
            >
                Início
            </a>
        </li>
        <li class="nav-item">
            <a
                class="nav-link"
                id="profile-tab"
                data-toggle="tab"
                href="#profile"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
            >
                Comunidade
            </a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div
          class="tab-pane fade show active"
          id="home"
          role="tabpanel"
          aria-labelledby="home-tab"
        >
          <h2>Bem-vindo à Página Inicial</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
            quam eu metus iaculis feugiat ut nec lorem.
          </p>
          <p>
            Sed vehicula, ipsum a tincidunt viverra, mi justo sollicitudin
            magna, nec ultricies urna dui sit amet arcu. Integer bibendum justo
            eget felis vehicula, ut ullamcorper elit vehicula.
          </p>
          <br />
          <h5>Notas de atulizações do site</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consequuntur dolore maxime rem eius corrupti commodi culpa expedita
            porro sapiente, minima sed, vero accusantium dolor reiciendis cumque
            repudiandae maiores ut distinctio.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consequuntur dolore maxime rem eius corrupti commodi culpa expedita
            porro sapiente, minima sed, vero accusantium dolor reiciendis cumque
            repudiandae maiores ut distinctio.
          </p>
        </div>

        <div
            class="tab-pane fade"
            id="profile"
            role="tabpanel"
            aria-labelledby="profile-tab"
        >
            <h2>Bem-vindo à Comunidade, <?php echo $_SESSION['nomeUsuario']; ?>!</h2>

            <div id="comments-container">
      </div>
            <form id="comment-form">
                <div class="form-group">
                  <br><br>
                    <input
                        type="text"
                        class="form-control"
                        id="comment"
                        name="comment"
                        placeholder="Seu comentário aqui"
                    />
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</main>

<div id="footerContainer">
    <footer>© Astrosteam</footer>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
    $(document).ready(function () {
        // Função para adicionar um comentário
        function addComment(username, message) {
            var commentHtml =
                '<div class="comment"><strong>' +
                username +
                ":</strong> " +
                message +
                "</div>";
            $("#comments-container").append(commentHtml);
        }

        function simulateConversation() {
            setInterval(function () {
                addComment("GABIGOLNOVASCO", "Quem é você?");
                addComment("PunkyTheLink", "Fala ae <?php echo $_SESSION['nomeUsuario']; ?> ");
            }, 10000); 
        }

      
        simulateConversation();

        $("#comment-form").submit(function (event) {
            event.preventDefault();
            var username = "<?php echo isset($_SESSION['nomeUsuario']) ? $_SESSION['nomeUsuario'] : 'NomeDoUsuario'; ?>";

            var message = $("#comment").val();
            addComment(username, message);

            $("#comment").val("");
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/script.js"></script>
</body>
</html>
