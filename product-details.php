<?php

if (!isset($_GET['id'])) {
} else {
  require_once('actions/classes/Estabelecimento.class.php');
  $e = new Estabelecimento();
  $e->id = $_GET['id'];
  $dados = $e->ListarPorID()[0];
}
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Lugx Gaming - Product Detail</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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

/* CSS DO FORMULARIO */
/* Criar as variaveis com as cores */
:root {
    --amarelo: #ffcc00;
    --cinza: #cccccc;
}
 
/* Não exibir o input radio */
.estrelas input[type=radio] {
    display: none;
    
    
}
 
/* Criar as estrelas preenchidas de amarelo*/
.estrelas label i.opcao.fa:before {
    content: '\f005';
    color: var(--amarelo);
}
 
/* Atribuir o cinza nas estrelas, quando selecionar a estrela retirar o cinza*/
.estrelas input[type=radio]:checked~label i.fa:before {
    color: var(--cinza);
}
 
/* Personalizar a estrela preenchida */
.estrela-preenchida {
    color: var(--amarelo);
}
 
/* Personalizar a estrela vazia */
.estrela-vazia{
    color: var(--cinza);
}
</style>

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
              <li><a href="index.php" class="active">Início</a></li>
              <li><a href="shop.php">Estabelecimentos</a></li>
              <li><a href="contact.php">Entre em Contato</a></li>


            


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
            <li><a class="dropdown-item" href="#">Meu Estabelecimento</a></li>
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
          <h3><?= $dados['nome']; ?></h3>
          <span class="breadcrumb"><a href="#">Home</a> > <a href="#">Shop</a> > <?= $dados['nome']; ?></span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="fotos/<?= $dados['foto']; ?>" alt="" width="500px" height="500px">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4><?= $dados['nome']; ?></h4>
          <!-- <span class="price"><em>$28</em> $22</span> -->
          <p><?= $dados['descricao']; ?></p>
          <!-- <form id="qty" action="#">
            <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
            <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          </form> -->
          <ul>
            <!-- <li><span>Game ID:</span> COD MMII</li> -->
            <li><span>Categoria:</span><?= $dados['nome_categoria'] ?> </li>
            <!-- <li><span>Multi-tags:</span> <a href="#">War</a>, <a href="#">Battle</a>, <a href="#">Royal</a></li> -->
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Detalhes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Avaliações (3)</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>You can search for more templates on Google Search using keywords such as "templatemo digital marketing", "templatemo one-page", "templatemo gallery", etc. Please tell your friends about our website. If you need a variety of HTML templates, you may visit Tooplate and Too CSS websites.</p>
                  <br>
                  <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean shorts edison bulb poutine next level humblebrag la croix adaptogen. Hashtag poke literally locavore, beard marfa kogi bruh artisan succulents seitan tonx waistcoat chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of bitters asymmetrical gluten-free art party raw denim chillwave tousled try-hard succulents street art.</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p><!-- Inicio do formulário -->
   <form method="POST" action="processa.php">
 
 <div class="estrelas">

     <!-- Carrega o formulário definindo nenhuma estrela selecionada -->
     <input type="radio" name="estrela" id="vazio" value="" checked>

     <!-- Opção para selecionar 1 estrela -->
     <label for="estrela_um"><i class="opcao fa fs-2"></i></label>
     <input type="radio" name="estrela" id="estrela_um" id="vazio" value="1">

     <!-- Opção para selecionar 2 estrela -->
     <label for="estrela_dois"><i class="opcao fa fs-2"></i></label>
     <input type="radio" name="estrela" id="estrela_dois" id="vazio" value="2">

     <!-- Opção para selecionar 3 estrela -->
     <label for="estrela_tres"><i class="opcao fa fs-2"></i></label>
     <input type="radio" name="estrela" id="estrela_tres" id="vazio" value="3">

     <!-- Opção para selecionar 4 estrela -->
     <label for="estrela_quatro"><i class="opcao fa fs-2"></i></label>
     <input type="radio" name="estrela" id="estrela_quatro" id="vazio" value="4">

     <!-- Opção para selecionar 5 estrela -->
     <label for="estrela_cinco"><i class="opcao fa fs-2"></i></label>
     <input type="radio" name="estrela" id="estrela_cinco" id="vazio" value="5"><br><br>

     <!-- Campo para enviar a mensagem -->
     <textarea class="form-control border border-primary" name="mensagem" rows="4" cols="30" placeholder="Digite o seu comentário..."></textarea><br><br>

     <!-- Botão para enviar os dados do formulário --></p>
     <input type="submit" value="Enviar"><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Related Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-01.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-03.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-04.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Mercado Easy Company. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank"></a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</body>

</html>