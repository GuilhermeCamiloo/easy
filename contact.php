<?php

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mercado Easy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
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
              <li><a href="shop.php">Estabelecimentos</a></li>
              <li><a href="contact.php" class="active">Entre em Contato</a></li>

  <?php if(!isset($_SESSION['usuario'])) { ?>

              <li><a href="tela_login1.php" id="btn-login">Login</a></li>

    <?php }elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']['id_tipo'] == 2){ ?>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="btn-login" aria-expanded="false">
            Minha Conta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Meus Dados</a></li>
            <li><a class="dropdown-item" id="avaliações" href="#">Minhas Avaliações</a></li>           
            <li><hr class="dropdown-divider"></li>
            <li ><a class="dropdown-item" id="sair" href="sair.php"><i class="bi bi-arrow-bar-left"></i> Sair</a></li>
           
          </ul>
        </li>



      <?php }elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']['id_tipo'] == 1){ ?>


        <li class="nav-item dropdown menu-azul">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="btn-login" aria-expanded="false">
            Meu Estabelecimento
          </a>
          
          

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="estabelecimento_cadastro.php">Meu Cadastro </a></li>
            <li><a class="dropdown-item" href="meu_estabelecimento.php">Meu Estabelecimento</a></li>
            <li><a class="dropdown-item" href="#">Minhas Avaliações</a></li>
            <li><hr class="dropdown-divider"></li>
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
          <h3>Contate-nos</h3>
          <span class="breadcrumb"><a href="#">Início</a>  >  Contate-nos</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contate-nos</h6>
              <h2>Seja Bem-Vindo!</h2>
            </div>
            <p>Nossa empresa sempre presa pelo compromisso com os nossos clientes e comerciantes, que encontram aqui tudo o que precisam para encontrar o comércio que melhor lhe atendam ou captar clientes para aumentar a relevância de seu próprio negócio.</p>
            <ul>
              <li><span>Endereço</span> R. Suíça, 1255 - Santana</li>
              <li><span>Telefone</span> +55 3636-0101</li>
              <li><span>Email</span> MercadoEasy@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14699.590794402222!2d-45.455479397200804!3d-22.917143867961755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccefdec6e70eef%3A0xa6fed360282c1ca7!2sSenac%20Pindamonhangaba!5e0!3m2!1spt-BR!2sbr!4v1716937159298!5m2!1spt-BR!2sbr" width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu Nome..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu Sobrenome..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu E-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="sugestao" id="sugestao" placeholder="Sugestão..." autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="mensagem" id="mensagem" placeholder="Deixe sua Mensagem..."></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Envie uma nova mensagem</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Mercado Easy Company. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank"></a></p>
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