<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="realismo.css">
    <title>Animação</title>

    
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


 <!-- seta de voltar -->
  
 <a href="jojovana.php">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
</a>


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



    
<!-- produtos a mostra -->

<section id="produtos">
    <h2 style="text-align: center;">Produtos</h2>
    <div class="gallery">


<main>
  <div class="gallery">

    <?php
    $listarcliente = listarTodosRegistros('*', 'animacao', 'A');
    if ($listarcliente == 'Vazio') {
      echo '<h5 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado! <br> Aguardando Registro... </h5>';
    } else {
      foreach ($listarcliente as $itemRetornoLista) {
        $titulo = $itemRetornoLista->titulo;
        $img = $itemRetornoLista->img;
        $descricao = $itemRetornoLista->descricao;
        $preco = $itemRetornoLista->preco;
       
        ?>

        <div class="product">
          <img src="./assets/img/<?php echo $img ?>" alt="<?php echo $titulo ?>">
          <h3><?php echo $titulo ?></h3>
          <p><?php echo $descricao ?></p>
          <div class="cuzinho">
            <span>R$ <?php echo $preco ?></span>
            <button>&#128722;</button>

            
          </div>
        </div>

        <?php
      }
    }
    ?>
  </div>
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