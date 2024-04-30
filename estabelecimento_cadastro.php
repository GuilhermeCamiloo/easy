<?php

session_start();
if(!isset($_SESSION['usuario'])){
  echo "Falha! Você precisa estar logado(a).";
  die();
}


require_once('actions/classes/Usuario.class.php');
$usuario = new Usuario();

require_once("actions/classes/Categoria.class.php");
$c = new Categoria();
$lista_categorias = $c->Listar();

require_once('actions/classes/Estabelecimento.class.php');
$estabelecimento = new Estabelecimento();



?>


<!DOCTYPE html>
<html lang="en">

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
  <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<style>
  #rodape {
    min-height: 10px;
    border-radius: 0px;
  }


  #id_usuario {
    display: none;
  }
</style>


<body>

  <!-- Login 10 - Bootstrap Brain Component -->
  <section class="bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="mb-5">
            <div class="text-center mb-4">
              <a href="#!">
                <img src="assets/images/Logosvg.svg" alt="BootstrapBrain Logo" width="175" height="57">
              </a>
            </div>
            <h4 class="text-center mb-4">Cadastre seu Estabelecimento abaixo</h4>
            <div class="text-center">
            </div>
          </div>
          <div class="card border border-light-subtle rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">

              <!-- Formulário de cadastro -->

              <form id="formCadastro" action="actions/cadastrar_estabelecimento.php" method="POST" enctype="multipart/form-data">


                <div class="mb-3">
                  <label for="nome2Cad" class="form-label">Nome: </label>
                  <input type="text" class="form-control" id="nome" name="nome">
                </div>


                <div class="mb-3">
                  <label for="nomeCad" class="form-label">Categoria: </label>


                  <select class="form-control" id="categoriaProduto" name="id_categoria">
                    <?php foreach ($lista_categorias as $cat) {
                        if ($cat['id'] == $dados['id_categoria']) { ?>
                            <option selected value="<?= $cat['id']; ?>"><?= $cat['nome']; ?></option>
                        <?php  } else { ?>
                            <option value="<?= $cat['id']; ?>"><?= $cat['nome']; ?></option>
                    <?php }
                    } ?>
                </select>
                  
                </div>

                <div class="mb-3">
                  <label for="senhaCad" class="form-label">Descricao:</label>
                  <input type="text" class="form-control" id="descricao" name="descricao">
                </div>

                <div class="mb-3">
                  <label for="fotoProduto">Foto</label>
                  <input type="file" class="form-control-file" id="foto" name="foto">
                </div>



                <div class="mb-3">
                  <label for="emailCad" class="form-label"></label>
                  <input type="text" class="form-control" id="id_usuario" aria-describedby="emailCadHelp" name="id_usuario">
                </div>


                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3" id="btnCadastrar">Cadastrar</button>
                </div>

              </form>

            </div>
          </div>
        </div>





      </div>
    </div>



  </section>

  <footer class="col-lg-12  min-vh-1 fixed-bottom" id="rodape">
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2028 Mercado Easy. &nbsp;&nbsp; <a rel="nofollow"></p>
      </div>
    </div>
    </div>
  </footer>



  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-10/assets/css/login-10.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Alternar entre formulários login x cadastro:
    $("#btnCadastroToggle").click(function() {
      $("#formLogin").hide();
      $("#formCadastro").fadeIn();
      $("#titulo").text('Cadastro');
    });
  </script>



</body>

</html>