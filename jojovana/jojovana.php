<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jojovana.</title>
  <link rel="stylesheet" href="styles.css">
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
            <li><a href="#produtos">Produtos</a></li>
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
    <section id="produtos">
      <h2 style="text-align: center;">Produtos</h2>
      <div class="gallery">
        <div class="product">
          <img src="jujutsu.jpg" alt="Desenho 1">
          <h3>Suguru Geto</h3>
          <p>Desenho de um personagem fictício de anime, Suguru Geto de Jujutsu Kaisen.</p>
          <div class="cuzinho">
            <button>Comprar</button>
            <span>$7,26</span>
          </div>
        </div>
        <div class="product">
          <img src="berserk.jpg" alt="Desenho 2">
          <h3>Guts</h3>
          <p>Situado em um mundo de fantasia sombria, Berserk, a história gira em torno de Guts, Griffith, o líder de um
            bando de mercenários chamado de "Bando do Falcão".</p>
          <div class="cuzinho">

            <button>Comprar</button>
            <span>$10,37</span>
          </div>
        </div>
        <div class="product">
          <img src="kimetsu.jpg" alt="Desenho 3">
          <h3>Tangerina Kamao</h3>
          <p>De uma série japonesa de mangá shōnen escrita e ilustrada por Koyoharu Gotōge.</p>
          <div class="cuzinho">
            <button>Comprar</button>
            <span>$7,26</span>
          </div>
        </div>
        <div class="product">
          <img src="vagabond.jpg" alt="Desenho 4">
          <h3>Musashi miyamoto</h3>
          <p>Vagabond é uma série de mangá escrita e ilustrada, que conta a história do samurai Miyamoto Musashi.</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$8,30</span>
            </h4>
          </div>
        </div>
        <div class="product">
          <img src="digital.jpg" alt="Desenho 5">
          <h3>Desenho Digital/Marceline</h3>
          <p>Desenho digital de uma personagem de um seriado da Cartoon Network, Marceline</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$10,37</span>
            </h4>
          </div>
        </div>
        <div class="product">
          <img src="sapatoes.jpg" alt="Desenho 6">
          <h3>Fanart/Marceline e Princesa Jujuba</h3>
          <p>Marceline e Princesa Jujuba, casal LGBT do seriado Hora de Aventura</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$5,18</span>
            </h4>
          </div>
        </div>
        <div class="product">
          <img src="cartoon.jpg" alt="Desenho 7">
          <h3>Desenho Cartoon Digital/Rosa Quartz</h3>
          <p>Personagem principal na trama do cartoon Steven Universe. Rose Quartz é a mãe do personagem principal do
            cartoon, Steven.</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$4,15</span>
            </h4>
          </div>
        </div>
        <div class="product">
          <img src="finn.jpg" alt="Desenho 8">
          <h3>Desenho Cartoon/Finn</h3>
          <p>um personagem e um dos dois protagonistas da série animada de televisão americana Adventure Time criada por
            Pendleton Ward.</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$5,18</span>
            </h4>
          </div>
        </div>
        <div class="product">
          <img src="realismo.jpg" alt="Desenho 9">
          <h3>Realismo/Desconhecido</h3>
          <p>No desenho realista, os objetos são desenhados sem linhas de contorno, como no mundo real.</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$20,74</span>
            </h4>
          </div>
        </div>
        <div class="product">
          <img src="Sem título.jpg" alt="Desenho 10">
          <h3>Arte Digital</h3>
          <p>O conceito de artes digitais engloba diversas manifestações artísticas realizadas por meio da ajuda dos
            meios eletrônicos, com destaque para os computadores, tablets, smartphones, entre outros.</p>
          <div class="cuzinho">
            <h4>
              <button>Comprar</button>
              <span>$20,74</span>
            </h4>
          </div>
        </div>
      </div>
    </section>
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
  
    <a id="scroll-to-top" class="scroll-to-top"  href="#header">↑</a>

  </main>
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

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scroll-to-top").style.display = "block";
  } else {
    document.getElementById("scroll-to-top").style.display = "none";
  }
}

document.getElementById("scroll-to-top").onclick = function() {
  document.body.scrollTop = 0; // Para navegadores que não suportam document.documentElement.scrollTop
  document.documentElement.scrollTop = 0; // Para navegadores que suportam document.documentElement.scrollTop
};

</script>

</body>

</html>
