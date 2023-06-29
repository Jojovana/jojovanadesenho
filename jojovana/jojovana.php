<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jojovana.</title>
  <link rel="stylesheet" href="styles.css">
  <?php

  include_once './config/constantes.php';
  include_once './config/conexao.php';
  include_once './func/funcoes.php';


  ?>
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
            <li><a href="jojovana.php #Pastas">Pastas</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="jojovana.php #contato">Contato</a></li>
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





  <section id="produtos">
    <h2 style="text-align: center;">Pastas</h2>
    <div class="gallery">





<main>
  <div class="gallery">
    <?php
    $listarcliente = listarTodosRegistros('*', 'produto', 'A');
    if ($listarcliente == 'Vazio') {
      echo '<h5 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado! <br> Aguardando Registro... </h5>';
    } else {
      foreach ($listarcliente as $itemRetornoLista) {
        $titulo = $itemRetornoLista->titulo;
        $img = $itemRetornoLista->img;
        $descricao = $itemRetornoLista->descricao;
        $link = $itemRetornoLista->link;
        ?>

        <div class="product">
          <img src="./assets/img/<?php echo $img ?>" alt="<?php echo $titulo ?>">
          <h3><?php echo $titulo ?></h3>
         
          <div class="cuzinho">
            <span> <p><?php echo $descricao ?></p></span>
            <a href="<?php echo $link?>"><button  class="aa">Ver</button></a>
            
          </div>
        </div>

        <?php
      }
    }
    ?>
  </div>
</main>



      <div class="linha">s</div>
      <main>

        <section id="contato">
          <h2>Contato</h2>
          <form>
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="mensagem">Mensagem:</label>
              <textarea id="mensagem" placeholder="Digite seu pedido"></textarea>
            </div>
            <button type="submit">Enviar</button>
          </form>
        </section>




      </main>

      <a id="scroll-to-top" class="scroll-to-top" href="#header">↑</a>

      <footer>
        <p>&copy; 2023 VendadeDesenhos. Todos os direitos reservados.</p>
      </footer>








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