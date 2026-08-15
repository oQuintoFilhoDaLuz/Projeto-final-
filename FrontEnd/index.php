<!--
=======================================================
ARQUIVO: index.php
DESCRIÇÃO: Página inicial da locadora Auto Drive, exibindo informações, carros, serviços e seções interativas.
ATOR: visitante (usuário não autenticado)
=======================================================
-->
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Locadora Auto Drive</title>
    <link rel="stylesheet" href="./Css/index_styl.css" />
    <link rel="stylesheet" href="./Css/modal_login.css" id="modal-style" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <!-- Cabeçalho principal com navegação -->
    <header>
      <a href="#home" class="logo" aria-label="Ir para o início">
        <div class="img-placeholder logo-placeholder">IMG01 - LOGO</div>
      </a>

      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">
        <li><a href="#home">Início</a></li>
        <li><a href="#about">Carros</a></li>
        <li><a href="#rent">Serviços</a></li>
        <li><a href="#contact">Contatos</a></li>
      </ul>

      <!-- Serviço de registro e login -->
      <div class="header-btn">
        <button class="sign-up" data-modal="register">Registrar</button>
        <button class="sign-in" data-modal="login">Entrar</button>
      </div>
    </header>

    <!-- Seção de destaque inicial -->
    <section class="home" id="home">
      <div class="text">
        <h1><span>Encontre o carro</span> perfeito para <br />suas viagens</h1>
        <p>
          Descubra opções incríveis de aluguel de veículos para tornar seu
          trajeto confortável e seguro.
        </p>
        <div class="home-actions">
          <a href="#about" class="btn-primary">Ver carros</a>
          <a href="#rent" class="btn-secondary">Conhecer serviços</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="img-placeholder hero-placeholder">IMG02 - DESTAQUE</div>
      </div>
    </section>

    <!-- Seção explicando como funciona o aluguel -->
    <section class="ride" id="ride">
      <div class="heading">
        <span>Como funciona</span>
        <h1>Alugue em passos fáceis</h1>
      </div>
      <div class="ride-container">
        <div class="box">
          <i class="bx bxs-map"></i>
          <h2>Escolha um local</h2>
          <p>
            Encontre o melhor lugar para começar sua jornada. Temos diversas
            opções para você escolher.
          </p>
        </div>

        <div class="box">
          <i class="bx bxs-calendar-check"></i>
          <h2>Escolha a data</h2>
          <p>
            Selecione a melhor data para o aluguel do seu carro. Planeje sua
            viagem com facilidade.
          </p>
        </div>

        <div class="box">
          <i class="bx bxs-car"></i>
          <h2>Reserve um carro</h2>
          <p>
            Garanta seu veículo ideal com apenas alguns cliques. Rápido, fácil
            e conveniente.
          </p>
        </div>
      </div>
    </section>

    <!-- Seção de carros disponíveis -->
    <section class="cars" id="about">
      <div class="heading">
        <span>Nossa frota</span>
        <h1>Carros para cada necessidade</h1>
      </div>
      <div class="cars-grid">
        <article class="car-card">
          <div class="img-placeholder">IMG03 - SEDAN</div>
          <h3>Sedan Executivo</h3>
          <p>Conforto para viagens urbanas e reuniões importantes.</p>
        </article>
        <article class="car-card">
          <div class="img-placeholder">IMG04 - SUV</div>
          <h3>SUV Família</h3>
          <p>Espaço, segurança e desempenho para trajetos longos.</p>
        </article>
        <article class="car-card">
          <div class="img-placeholder">IMG05 - ESPORTIVO</div>
          <h3>Esportivo Premium</h3>
          <p>Performance e estilo para uma experiência marcante.</p>
        </article>
      </div>
    </section>

    <!-- Seção de localização de veículos -->
    <section class="section__container location__container" id="rent">
      <div class="location__image">
        <div class="img-placeholder location-placeholder">IMG06 - LOCALIZAÇÃO</div>
      </div>
      <div class="location__content">
        <h2 class="section__header">ENCONTRE UM CARRO PERTO DE VOCÊ</h2>
        <p>
          Descubra o veículo perfeito para suas necessidades, onde quer que
          esteja. Nossa funcionalidade "Encontre um carro" permite que você
          busque e selecione facilmente entre nossa frota premium disponível
          próxima a você.
        </p>
        <div class="location__btn">
          <button class="btn">Encontrar Localização</button>
        </div>
      </div>
    </section>

    <!-- Rodapé com informações e contato -->
    <footer class="footer" id="contact">
      <div class="footer__container">
        <div class="footer__section about">
          <h3>Locadora Auto Drive</h3>
          <p>
            Conectamos você ao carro ideal com conforto, segurança e
            praticidade. Sua jornada começa com a gente.
          </p>
          <div class="footer__socials">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <div class="footer__section contact">
          <h4>Contato</h4>
          <p><i class="fas fa-envelope"></i> atendimento@autodrive.com</p>
          <p><i class="fas fa-phone"></i> (11) 99999-9999</p>
          <p>
            <i class="fas fa-map-marker-alt"></i> Av. Principal, 123 - São Paulo,
            SP
          </p>
        </div>
      </div>

      <div class="footer__bottom">
        <p>&copy; 2026 Locadora Auto Drive. Todos os direitos reservados.</p>
      </div>
    </footer>

    <!-- Modal dinâmico para login e registro -->
    <div id="modal-overlay" class="modal-overlay hidden">
      <div class="modal-content">
        <button id="modal-close" aria-label="Fechar modal">X</button>
        <iframe id="modal-iframe" src="" title="Janela de autenticação"></iframe>
      </div>
    </div>

    <!-- Script de comportamento geral da interface -->
    <script src="./js/main_index.js"></script>

    <!-- Script de abertura do modal de login e registro -->
    <script>
      document.querySelectorAll("[data-modal]").forEach((btn) => {
        btn.addEventListener("click", () => {
          const type = btn.getAttribute("data-modal");
          const modal = document.getElementById("modal-overlay");
          const iframe = document.getElementById("modal-iframe");
          const modalStyle = document.getElementById("modal-style");

          iframe.src = type === "login" ? "tela_login.php" : "tela_reg.php";
          modalStyle.href =
            type === "login" ? "./Css/modal_login.css" : "./Css/modal_reg.css";

          modal.classList.remove("hidden");
        });
      });

      document.getElementById("modal-close").addEventListener("click", () => {
        document.getElementById("modal-overlay").classList.add("hidden");
        document.getElementById("modal-iframe").src = "";
      });
    </script>

    <!-- Script de retorno do modal após autenticação -->
    <script>
      window.addEventListener("message", function (event) {
        if (event.data === "registro_sucesso") {
          document.getElementById("modal-overlay").classList.add("hidden");
          document.getElementById("modal-iframe").src = "";
          location.reload();
        }
        if (event.data && event.data.tipo === "login_sucesso") {
          document.getElementById("modal-overlay").classList.add("hidden");
          document.getElementById("modal-iframe").src = "";
          window.location.href = event.data.destino;
        }
      });
    </script>
  </body>
</html>
