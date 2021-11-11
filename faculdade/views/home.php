<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
    <header class="topo">
        <div class="icons-menu">
            <i id="btn-open-menu" class="fas fa-bars"></i>
            <i id="btn-close-menu" class="fas fa-times"></i>
        </div><!--icons-menu-->
        <div class="logo">
            <h1>Logo Here</h1>
        </div><!--logo-->
        <div class="close-search">
            <i class="fas fa-long-arrow-alt-left"></i>
        </div>   
        <div class="search">
            <form action="" method="get">
                <div class="inline">
                    <input class="form-control" type="text" placeholder="Pesquise um produto" aria-label="Pesquise um produto" aria-describedby="basic-addon2">
                    <button id="basic-addon2" class="btn" type="submit">Buscar</button>
                   
                </div>
            </form>
        </div><!--search-->
        <div class="login">
            <div class="icon-user">
                <i id="btn-search" style="font-size: 25px"  class="fas fa-search"></i>
               <a href="/faculdade/admin/home"> <i style="font-size: 25px;"class="fas fa-user-circle"></i></a>
               
            </div><!--icon-user-->
        </div><!--login-->
    </header><!--search-->
    <nav class="nav-tabs nav-bar bg-light">
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Feminino</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Blusas</a></li>
                  <li><a class="dropdown-item" href="#">Vestidos</a></li>
                  <li><a class="dropdown-item" href="#">Shorts</a></li>
                  
                </li>
            </ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Masculino</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Blusas</a></li>
                    <li><a class="dropdown-item" href="#">Camisetas</a></li>
                    <li><a class="dropdown-item" href="#">Polos</a></li>
                    <li><a class="dropdown-item" href="#">Regatas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Calçados</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Chinelos</a></li>
                    <li><a class="dropdown-item" href="#">Tênis</a></li>
                    <li><a class="dropdown-item" href="#"></a></li>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Conta</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Minha Conta</a></li>
                        <li><a class="dropdown-item" href="#">Meus pedidos</a></li>
                    </ul>
                </li>
            
        </ul>
    </nav><!--nav-bar-->
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="img/banner.jpg" alt=""></div>
              <div class="swiper-slide"><img src="img/banner2.jpg" alt=""></div>
              <div class="swiper-slide"><img src="img/banner3.jpg" alt=""></div>
              <div class="swiper-slide"><img src="img/banner4.jpg" alt=""></div>
              <div class="swiper-slide"><img src="img/banner5.jpg" alt=""></div>
                
            </div>
            <!-- Add Pagination -->
            <div style="color: var(--bs-yellow);" class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div style="color: var(--bs-yellow);" class="swiper-button-next"></div>
            <div style="color: var(--bs-yellow);" class="swiper-button-prev"></div>
          </div>
    </section><!--banner-->
    <section class="session-one">
        <div class="container-fluid">
            <header>
                <h2>Confira</h2>
            </header>
            <div class="flex">
                <article class="card-content">
                    <div>
                        <h1>Blusas Femininas</h1>
                    </div>
                    <div class="zoom">
                        <a href=""><img src="img/card-1.jpg" alt=""></a>
                    </div><!--zoom-->
                </article><!--card-content-->
                <article class="card-content">
                    <div>
                        <h1>Camisetas Masculinas</h1>
                    </div>
                    <div class="zoom">
                        <a href=""><img src="img/card-2.jpg" alt=""></a>
                    </div><!--zoom-->
                </article><!--card-content-->
                <article class="card-content">
                    <div>
                        <h1>Tênis Masculinos</h1>
                    </div>
                    <div class="zoom">
                        <a href=""><img src="img/card-3.jpg" alt=""></a>
                    </div><!--zoom-->
                </article><!--card-content-->
            </div><!--flex-->
        </div><!--container-->
    </section><!---session-->

<script src="js/controller/Site.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8debdb91c9.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>


</body>
</html>