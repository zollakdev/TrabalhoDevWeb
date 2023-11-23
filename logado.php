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
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <link rel="stylesheet" href="/style.css" />
    <title>Astrosteam</title>
  </head>
  <body>
    <header id="headerPHP">
    <script>
    function loadHeader2() {
      const headerContainer2 = document.getElementById("headerPHP");
      const xhr2 = new XMLHttpRequest();

      xhr2.open("GET", "headerLogado.php", true);

      xhr2.onload = function () {
        if (xhr2.status === 200) {
          headerContainer2.innerHTML = xhr2.responseText;
        
      var supportLink = document.getElementById("supportLink");
      supportLink.addEventListener("click", openModal);

      var closeModalButton = document.getElementById("closeModal");
      closeModalButton.addEventListener("click", closeModal);
    };
  }

      xhr2.send();
    }
  

    
    document.addEventListener("DOMContentLoaded", loadHeader2);
  </script>
    </header>
    <main>
      

      <div class="carousel">
        <button id="prevBtn" class="carousel-btn"><</button>
        <div class="carousel-container">
          <div class="carousel-item active">
            <img src="images/img-jg-1.jpg" alt="Imagem 1" class="img-fluid" />
          </div>
          <div class="carousel-item">
            <img src="images/img-jg-2.jpg" alt="Imagem 2" class="img-fluid" />
          </div>
          <div class="carousel-item">
            <img src="images/img-jg-3.jpg" alt="Imagem 3" class="img-fluid" />
          </div>
        </div>
        <button id="nextBtn" class="carousel-btn">></button>
      </div>
      <div id="sobreNos" class="sobre-nos">
  <div class="about">
  <h2>Sobre nós:</h2>
    <p>
    <em><strong>**Sobre a Astrosteam: Sua Jornada no Universo dos Jogos Online**</strong> </em> <br> <br>

 <h3> Bem-vindo à Astrosteam, o seu destino definitivo para explorar o vasto universo dos jogos online. Aqui na Astrosteam, acreditamos que os jogos transcendem a simples diversão; eles criam experiências memoráveis, desafios envolventes e conexões duradouras entre jogadores apaixonados. Em nosso reino digital, a adrenalina é constante, a diversão é interminável, e as possibilidades são infinitas.</h3> <br> <br>

<h6> **O Que Nos Define:** <br>

1. **Variedade Incrível:**
   Explore um extenso catálogo de jogos dos mais diversos gêneros, desde emocionantes jogos de ação e aventura até estratégias envolventes e simulações imersivas. Na Astrosteam, garantimos que há algo para todos, independentemente de seus gostos e preferências.
<br> <br>
2. **Comunidade Vibrante:**
   Junte-se a uma comunidade de jogadores apaixonados e compartilhe sua paixão por jogos. Nossa plataforma é mais do que uma loja; é um ponto de encontro para jogadores trocarem experiências, dicas e participarem de eventos especiais que tornam a jornada de cada jogador única.
<br> <br>
3. **Ofertas Exclusivas:**
   Desfrute de ofertas exclusivas e promoções emocionantes que tornam sua experiência de jogo ainda mais acessível e emocionante. Na Astrosteam, buscamos constantemente maneiras de recompensar nossos jogadores leais e proporcionar oportunidades para que todos possam descobrir novos títulos.
<br> <br>
4. **Plataforma Amigável:**
   Nossa interface intuitiva e amigável facilita a navegação pelos nossos jogos, tornando a descoberta de novos mundos virtuais uma jornada emocionante. A Astrosteam está comprometida em proporcionar uma experiência de usuário excepcional, desde a seleção do jogo até o momento em que você entra no jogo.
<br> <br>
5. **Inovação Constante:**
   Estamos sempre evoluindo para acompanhar as últimas tendências e tecnologias no mundo dos jogos online. Mantenha-se atualizado com as últimas novidades, atualizações e lançamentos que transformam a Astrosteam em um universo em constante expansão.
<br> <br>
Na Astrosteam, acreditamos que cada clique é uma oportunidade de embarcar em uma nova aventura, uma nova história ou uma nova conquista. Junte-se a nós enquanto exploramos os limites do entretenimento digital e celebramos a magia dos jogos online. Sua jornada começa aqui, na Astrosteam.
</h6>  
</p>
  </div>
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
  </body>
</html>
