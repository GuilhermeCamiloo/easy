<?php



require_once("actions/classes/Categoria.class.php");
$c = new Categoria();
$lista_categorias = $c->Listar();

require_once('actions/classes/Estabelecimento.class.php');
$e = new Estabelecimento();
$estabelecimento = $e->ListarTudo();


session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Lugx Gaming - Shop Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->

<!-- CSS -->

<style>

.nav-link {
    display: flex !important;
    justify-content: center;
    align-items: center;
    padding: 0px; /* ajuste o valor conforme necessário */
    
}


.dropdown-item {
    display: flex !important;
    justify-content: center;
    align-items: center;
    padding: 0px; /* ajuste o valor conforme necessário */
    margin-top: 5px;
    
}

.dropdown-item2 {
    display: flex !important;
    justify-content: center;
    align-items: center;
    padding: 0px; /* ajuste o valor conforme necessário */
    margin: 0px;
    height: 10px;
    width: 5% !important;
  
}

</style>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/Logosvg.svg" alt="" style="width: 158px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">Início</a></li>
              <li><a href="shop.php" class="active">Estabelecimentos</a></li>
              <li><a href="contact.php">Entre em Contato</a></li>

              <?php if (!isset($_SESSION['usuario'])) { ?>

                <li><a href="tela_login1.php" id="btn-login">Login</a></li>

              <?php } elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['id_tipo'] == 2) { ?>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="btn-login" aria-expanded="false">
                    Minha Conta
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Meus Dados</a></li>
                    <li><a class="dropdown-item" id="avaliações" href="#">Minhas Avaliações</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" id="sair" href="sair.php"><i class="bi bi-arrow-bar-left"></i> Sair</a></li>

                  </ul>
                </li>



              <?php } elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['id_tipo'] == 1) { ?>


                <li class="nav-item dropdown menu-azul">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="btn-login" aria-expanded="false">
                    Meu Estabelecimento
                  </a>



                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="estabelecimento_cadastro.php">Meu Cadastro </a></li>
                    <li><a class="dropdown-item" href="meu_estabelecimento.php">Meu Estabelecimento</a></li>
                    <li><a class="dropdown-item" href="#">Minhas Avaliações</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="sair.php"><i class="bi bi-box-arrow-left"></i></a></li>



                  </ul>
                </li>
              <?php } ?>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Estabelecimentos</h3>
          <span class="breadcrumb"><a href="index.php">Inicio</a> > Estabelecimentos</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Melhores Avaliados</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Mais Visitados</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Recem Inaugurados</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Com Promoções</a>
        </li>
      </ul>
      <div class="row trending-box">
        <?php foreach ($estabelecimento as $e) { ?>
          <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv str rac">
            <div class="item">
              <div class="thumb">
                <a href="product-details.php?id=<?= $e['estabelecimento_id']; ?>"><img src="fotos/<?= $e['foto']; ?>" alt="" width="300px" height="300px"></a>
              </div>
              <div class="down-content">
                <span class="category"><?= $e['nome_categoria'] ?></span>
                <h4><?= $e['nome'] ?></h4>
                <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>CCopyright © 2024 Mercado Easy Company.&nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank"></a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
  </svg>

</body>

</html>