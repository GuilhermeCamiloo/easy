<?php

session_start();
if(!isset($_SESSION['usuario'])){
  echo "Falha! Você precisa estar logado(a).";
  die();
}

require_once("actions/classes/Categoria.class.php");
$c = new Categoria();
$lista_categorias = $c->Listar();

require_once('actions/classes/Estabelecimento.class.php');
$e = new Estabelecimento();
$e->id_usuario = $_SESSION['usuario']['id'];
$estabelecimento = $e->ListarPorUsuario();


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Lugx Gaming Shop HTML5 Template</title>

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

.container1{

text-align: center;


}

.título{
color: white ;
margin-bottom: 2%;
}

.center-image{

    justify-content: center;
    
}

.texto{


  text-align: center;
  justify-content: center;
    
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

   <div class="main-banner">
    <div class="container1">
      <div class="row">
        <div class="col-lg-12 align-self-center">
          <div class="caption header-text">
            <h1 class="título">Meus Estabelecimentos</h1>          
          </div>
        </div>
        <div class="container mt-5">
       
        <div class="row mb-3">
            <div class="col d-flex justify-content-end">
              
                        
                <a class="btn btn-success mx-1" href="estabelecimento_cadastro.php"><i class="bi bi-plus-circle"></i></a>
            </div>
        </div>
        <table class="table table-striped table-hover ">
            <thead>
 
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estabelecimento as $e) { ?>
                    <tr>
                        
                        <th ><img src="fotos/<?= $e['foto']; ?>" width="200px" height="200px"></th>
                        <th class="p-5"><?= $e['nome']; ?></th>
                        <th class="texto p-5 col-4"><?= $e['descricao']; ?></th>
                        <th class="p-5"><?= $e['nome_categoria']; ?></th>
                        
                       
                        <td class="p-5"><a href="actions/editar.php?id=<?= $e['estabelecimento_id']; ?>">Editar</a> | <a
                        href="actions/apagar_produto.php?id=<?= $e['estabelecimento_id']; ?>">Excluir</a></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
 
    <!-- Modal de Cadastro -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="actions/cadastrar_produto.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCadastroLabel">Cadastro de Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
 
                        <div class="form-group">
                            <label for="nomeProduto">Nome</label>
                            <input type="text" class="form-control" id="nomeProduto" name="nome"
                                placeholder="Digite o nome do produto">
                        </div>
                        <div class="form-group">
                            <label for="fotoProduto">Foto</label>
                            <input type="file" class="form-control-file" id="fotoProduto" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="descricaoProduto">Descrição</label>
                            <textarea class="form-control" id="descricaoProduto" rows="3" name="descricao"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoriaProduto">Categoria</label>
                            <select class="form-control" id="categoriaProduto" name="id_categoria">
 
                                <?php foreach ($lista_categorias as $cat) { ?>
 
                                    <option value="<?= $cat['id']; ?>"><?= $cat['nome']; ?></option>
 
                                <?php } ?>
 
                            </select> <br>
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning" data-toggle="modal"
                                        data-target="#modalAddCategoria">Adicionar Categoria</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estoqueProduto">Estoque</label>
                            <input type="number" class="form-control" id="estoqueProduto"
                                placeholder="Digite a quantidade em estoque" name="estoque">
                        </div>
                        <div class="form-group">
                            <label for="precoProduto">Preço</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" class="form-control" id="precoProduto" placeholder="Digite o preço"
                                    name="preco">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="modalAddCategoria" tabindex="-1" role="dialog" aria-labelledby="modalAddCategoriaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form action="actions/cadastrar_categoria.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAddCategoriaLabel">Adicionar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nomeCategoria">Nome da Categoria</label>
                            <input type="text" class="form-control" id="nomeCategoria"
                                placeholder="Digite o nome da categoria" name="categoria">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
<!--  
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Entrega Rápida</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Apoio ao Cliente</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Retorno Rápido</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Previas Visuais</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Estabelecimentos</h6>
            <h2>Estabelecimentos Populares</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php?id="><img src="fotos/" alt="" width="300px" height="300px"></a>
            </div>
            <div class="down-content">
              <span class="category"></span>
              <h4></h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
       
      </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Most Played</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-01.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-02.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-03.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-04.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-05.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-06.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categoriaas</h6>
            <h2>Categorias Populares</h2>
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
  </div>

  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Planos | Clientes</h6> <br>

                  <h6 class="list-group-item bi bi-check-lg text-black"> Cupons de desconto </h6> <br>
                  <h6 class="list-group-item bi bi-check-lg text-black"> Acessibilidade para compras </h6><br>
                  <h6 class="list-group-item bi bi-check-lg text-black "> Receba cashback de suas compras </h6><br>
                  <h6 class="list-group-item bi bi-check-lg text-black"> E muitos outros beneficios.</h6>

                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop.html">Adquirir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading ">
                  <h6>Planos | estabelecimentos</h6><br>

                  <h6 class="list-group-item bi bi-check-lg text-black"> Serviços personalizados para sua empresa</h6> <br>
                  <h6 class="list-group-item bi bi-check-lg text-black"> Prioridade em suportes</h6><br>
                  <h6 class="list-group-item bi bi-check-lg text-black "> Visibilidade aumentada para seus estabelecimentos</h6><br>
                  <h6 class="list-group-item bi bi-check-lg text-black"> E muitos outros beneficios.</h6>


                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <button type="submit">Adquirir</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
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