<?php

require_once("actions/classes/Categoria.class.php");
$c = new Categoria();
$lista_categorias = $c->Listar();

if ($_GET["searchKeyword"] != ""){
    require_once('actions/classes/Estabelecimento.class.php');
    $e = new Estabelecimento();
    $e->nome = $_GET["searchKeyword"];
    $estabelecimento = $e->Buscar();
}else{
    $estabelecimento = [];
}






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
    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
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
                            <li><a href="tela_login1.php">Login</a></li>
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
                        <li><a class="is_active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
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
                <p>Copyright © 2024 Mercado Easy Company.&nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank"></a></p>
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

</body>

</html>