<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que seja doce - Doces caseiros</title>
    <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body>
    <header>
      <nav>
        <div class="content flex">
        <div class="logo-header flex"><img src="images/logo-doces-caseiros.png">
        <h1>Que seja Doce</h1></div>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?pagina=produtos.php">Produtos</a></li>
          <li><a href="index.php?pagina=quemsomos.php">Quem somos</a></li>
          <li><a href="index.php?pagina=contato.php">Contato</a></li>
        </ul>
        </div>
      </nav>
      
    </header>
    <main>
      <?php
      if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
        $pagina = $_GET["pagina"];
        include ($pagina);
      } else {
        ?>
        <section>
          <div class="content">
                <!-- Masthead Avatar Image-->
                <img class="logo-banner" src="images/logo-doces-caseiros.png" alt="..." />
                <!-- Masthead Heading-->
                <div class="icon"><i class="fas fa-star"></i></div>
                <h1 class="titulo">Doces caseiros</h1>    
                <div class="divider">
                    <div><hr></div>
                    <p class="sub-titulo">Tradição - Variedade - Qualidade</p>
                    <div><hr></div>
                </div>
                <div class="link-podutos">
                    <a href="index.php?pagina=produtos.php">Confira nossos produtos!</a>
                </div>
            </div>
          </section>
            <?php
      }
    ?>
      
    </main>
    <footer>
      <div class="content">
      <ul class="rodape">
        <li>Aluno: Marcos Tadeu Santos Resende</li>
        <li>Matrícula: RA 1947151-5</li>
        <li>Faculdade: Unicesumar</li>
        <li>Curso: Sistemas para internet</li>
        <li>Disciplina: Programação Back-end I</li>
      </ul>
      </div>
    </footer>
  </body>
</html>