<?php 

require_once('actions/classes/UsuarioE.class.php');
 
$usuarioe = new UsuarioE();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>MercadoEasy</title>

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
              <a href="index.php">
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
                  <label for="nomecad" class="form-label">Nome Completo:</label>
                  <input type="text" class="form-control" id="nomecad" aria-describedby="nomecadHelp" name="nome">
                  <div id="nomecadHelp" class="form-text">Como você deseja ser chamado(a).</div>
                </div>
                <div class="mb-3">
                  <label for="emailcad" class="form-label">Email</label>
                  <input type="text" class="form-control" id="emailcad" aria-describedby="emailcadHelp" name="email">
                  <div id="emailcadHelp" class="form-text">E-mail que será utilizado para acessar o sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="telefonecad" class="form-label">Telefone</label>
                  <input type="text" class="form-control" id="telefonecad" aria-describedby="telefonecadHelp" name="telefone">
                  <div id="telefonecadHelp" class="form-text">Telefone que será utilizado para contato.</div>
                </div>
                <div class="mb-3">
                  <label for="enderecocad" class="form-label">Endereço</label>
                  <input type="text" class="form-control" id="enderecocad" aria-describedby="enderecocadHelp" name="endereco">
                  <div id="enderecocadHelp" class="form-text">Endereço que será utilizado para localização no sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="numerocad" class="form-label">número</label>
                  <input type="text" class="form-control" id="numerocad" aria-describedby="numerocadHelp" name="numero">
                  <div id="numerocadHelp" class="form-text">número que será utilizado para localização no sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="cidadecad" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidadecad" aria-describedby="cidadecadHelp" name="cidade">
                  <div id="cidadecadHelp" class="form-text">Utilizado para localização no sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="estadocad" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadocad" aria-describedby="estadocadHelp" name="estado">
                  <div id="estadocadHelp" class="form-text">Utilizado para localização no sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="cepcad" class="form-label">CEP</label>
                  <input type="text" class="form-control" id="cepcad" aria-describedby="cepcadHelp" name="cep">
                  <div id="cepcadHelp" class="form-text">Utilizado para localização no sistema.</div>
                </div>
                <div class="mb-3">
                  <label for="complementocad" class="form-label">Complemento</label>
                  <input type="text" class="form-control" id="complementocad" aria-describedby="complementocadHelp" name="complemento">
                  <div id="complementocadHelp" class="form-text">Utilizado para localização no sistema.</div>
                </div>
                
                <div class="mb-3">
                  <label for="senhacad" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senhacad" name="senha">
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
                  <p class="text-center">Já possui conta? <a href="tela_login1.php" id="btn-login">Entrar</a></p>
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