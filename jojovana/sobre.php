<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre</title>
  <link rel="stylesheet" href="sobre.css">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

  <header>
    <!-- Cabeçalho -->
    <div class="header-content">
      <div class="header-left">
        <a href="jojovana.php" class="title">
          <h1>Jojovana.</h1>
        </a>
      </div>
      <div class="header-right">
        <!-- Menu de navegação -->
        <nav>
          <ul>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="jojovana.php">Produtos</a></li>
            <li><a href="#contato">Contato</a></li>
            <li> <button class="bo" onclick="openModal()">Login</button></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>

      <h2>Login</h2>

      <form>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Entrar">
      </form>
    </div>
  </div>




  <main>
    <section id="sobre">
      <h2>Sobre</h2>
      <p>Bem-vindo à nossa loja online de desenhos. Aqui você encontrará uma variedade de desenhos originais disponíveis
        para compra. Nossos artistas talentosos criam obras de arte únicas que certamente encantarão você.</p>

    </section>
  </main>
  </header>

  <main>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="titulo text-center">
          <h2>Sobre a Jojovana.</h2>
          <p>Um pouco sobre a Empresa.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;"
            data-aos="fade-up" data-aos-delay="150">

          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p>
                Nossa missão é oferecer desenhos de alta qualidade, que cativem e encantem nossos clientes, transmitindo
                emoções e contando histórias por meio de traços habilidosos e criativos.
              </p>

              <p>Para alcançar esse objetivo, estabelecemos metas claras e ambiciosas:
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Qualidade Excepcional: Nosso foco principal é a qualidade dos
                  desenhos que oferecemos.</li>
                <br>
                <li><i class="bi bi-check2-all"></i> Variedade de Produtos: Buscamos oferecer uma ampla gama de produtos
                  para atender diferentes gostos e preferências.</li>
                <br>
                <li><i class="bi bi-check2-all"></i> Atendimento ao Cliente Excepcional: Valorizamos a satisfação dos
                  nossos clientes e nos esforçamos para proporcionar uma experiência de atendimento excepcional.</li>
              </ul>
              <p>
                A Jojovana está comprometida em se tornar uma empresa líder no mercado de desenhos, oferecendo
                qualidade, variedade e um excelente atendimento ao cliente.
                Com nossas metas bem definidas e uma abordagem focada no crescimento,
                estamos confiantes de que alcançaremos o sucesso desejado, estabelecendo um nome reconhecido e
                respeitado no ramo do desenho.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>
  <a id="scroll-to-top" class="scroll-to-top" href="#header">↑</a>


  <footer>
    <p>&copy; 2023 VendadeDesenhos. Todos os direitos reservados.</p>
  </footer>

<!-- modal botao login -->
  <script>
    // Função para abrir o modal
    function openModal() {
      document.getElementById("loginModal").style.display = "block";
    }

    // Função para fechar o modal
    function closeModal() {
      document.getElementById("loginModal").style.display = "none";
    }
  </script>

  <!-- botao -->
  <script>

    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll-to-top").style.display = "block";
      } else {
        document.getElementById("scroll-to-top").style.display = "none";
      }
    }

    document.getElementById("scroll-to-top").onclick = function () {
      document.body.scrollTop = 0; // Para navegadores que não suportam document.documentElement.scrollTop
      document.documentElement.scrollTop = 0; // Para navegadores que suportam document.documentElement.scrollTop
    };

  </script>


</body>

</html>