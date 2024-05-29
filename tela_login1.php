<?php 

require_once('actions/classes/Usuario.class.php');
 
$usuario = new Usuario();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

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


  #formCadastro {
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
            <h4 class="text-center mb-4">Simples, Rápido, Easy</h4>
            <div class="text-center">
            </div>
          </div>
          <div class="card border border-light-subtle rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">


              <form id="formLogin" action="validalogin.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                  <div id="emailHelp" class="form-text">Seu e-mail cadastrado no sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <div class="form-group">
                  <button type="submit" id="btnEntrar"
                    class="form-control btn btn-primary rounded px-3">Entrar</button>
                </div>
                <div class="mb-3 mt-3">
                  <p class="text-center">Não possui conta no sistema? <a href="#" id="btnCadastroToggle">Cadastre-se</a>
                  </p>
                </div>
              </form>




              <!-- Formulário de cadastro -->

              <form id="formCadastro" action="actions/cadastrar_usuario.php" method="POST">
                <div class="mb-3">
                  <label for="nomeCad" class="form-label">Nome Completo:</label>
                  <input type="text" class="form-control" id="nomeCad" aria-describedby="nomeCadHelp" name="nome">
                  <div id="nomeCadHelp" class="form-text">Como você deseja ser chamado(a).</div>
                </div>
                <div class="mb-3">
                  <label for="emailCad" class="form-label">Email</label>
                  <input type="text" class="form-control" id="emailCad" aria-describedby="emailCadHelp" name="email">
                  <div id="emailCadHelp" class="form-text">E-mail que será utilizado para acessar o sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="senhaCad" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senhaCad" name="senha">
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_tipo" id="exampleRadios1"
                      value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Estabelecimento
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_tipo" id="exampleRadios2"
                      value="2">
                    <label class="form-check-label" for="exampleRadios2">
                      Cliente
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3"
                    id="btnCadastrar">Cadastrar</button>
                </div>



                <div class="mb-3 mt-3">
                  <p class="text-center">Já possui conta? <a href="#" id="btn-login">Entrar</a></p>
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
        <p>Copyright © 2024 Mercado Easy. &nbsp;&nbsp; <a rel="nofollow"></p>
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
    $("#btnCadastroToggle").click(function () {
      $("#formLogin").hide();
      $("#formCadastro").fadeIn();
      $("#titulo").text('Cadastro');
    });
    $("#btnLoginToggle").click(function () {
      $("#formCadastro").hide();
      $("#formLogin").fadeIn();
      $("#titulo").text('Login');
    });

  </script>



</body>

</html>