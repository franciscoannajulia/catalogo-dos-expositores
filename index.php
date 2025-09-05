<!doctype html>
<html lang="en">

<head>
    <!--Multipurpose: Modelo grátis por FreeHTML5.co Autor: https://freehtml5.co Facebook: https://facebook.com/fh5co Twitter: https://twitter.com/fh5co -->
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Título do documento -->
    <title>Catálogo dos Expositores</title>
    <!-- Folhas de estilo e fontes -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700" rel="stylesheet">
    <!-- Plugins de Folhas de estilo -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Folhas de estilo -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Folhas de estilo -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--Glyphicon-->
    <link rel="stylesheet" href="assets/css/glyphicon.css">
    <!--Carrossel
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
        margin: auto;
    }
      /*-----------------------------------
    1 - Anuncio
------------------------------------*/
  .responsive {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 85%;
  }
    </style>
</head>

<body>
    <!-- Loader Inicio -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader Fim -->
    <!-- Início do cabeçalho e Menu -->
    <?php include ("menu.php")?>
    <!-- Fim do cabeçalho e Menu -->
    <!--Carrossel  Teste Inicio-->
    <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets\images\img_fundo\fundo.jpg" alt="" height="20%">
              </div>
              <div class="carousel-item">
                <img src="assets\images\img_fundo\carrossel2.jpg" alt="" height="20%">
              </div>
              <div class="carousel-item">
                <img src="assets\images\img_fundo\fundo.jpg" alt="" height="20%">
              </div>
            </div>
            
            <!-- Left and right controls-->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
    </div>
    <!--Fim Carrossel-->
    <!-- Call To Action Start -->
  
        
        <?php
         include ("includeF.php") ;
         ?>
        
    </section>
    <!-- Call To Action End -->
    <!-- Início dos serviços (Postagens) -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h6>2020</h6>
                <h1 class="title-blue">Catálogo dos Expositores</h1>
            </div>
            <div class="container">
                <div class="row">
                <!--<iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=fun86j3cb" width="100%" height="480" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen></iframe>-->
                
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <div class="media-body">
                            <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoExpofruit.jpg">
                                <h5>Evento Um</h5>
                                A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                            </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <div class="media-body">
                            <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoExpofruit.jpg">
                                    <h5>Evento Dois</h5>
                                A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                            </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <div class="media-body">
                                    <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoExpofruit.jpg">
                                    <h5>Evento Três</h5>
                                A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                            </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <div class="media-body">
                            <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoBahia.jpg">
                                    <h5>Evento Quatro</h5>
                                A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                            </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <div class="media-body">
                            <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoBahia.jpg">
                                    <h5>Evento Cinco</h5>
                                A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                            </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <div class="media-body">
                            <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoBahia.jpg">
                                    <h5>Evento Seis</h5>
                                A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                            </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim dos serviços (Postagens) -->
    <!--anuncio-->
    <?php include ("includeAnuncio.php"); ?> 
     <!--fim anuncio-->
    <!-- Mais das Postagens Inicio -->
    <section class="services">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                                <div class="media-body">
                                <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoFemagri.jpg">
                                        <h5>Evento Sete</h5>
                                    A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                                </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                <div class="media-body">
                                <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoFemagri.jpg">
                                        <h5>Evento Oito</h5>
                                    A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                                </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                                <div class="media-body">
                                <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogoFemagri.jpg">
                                        <h5>Evento Nove</h5>
                                    A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                                </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Fim de Mais Postagens -->
        <!--anuncio-->
      <?php include ("includeAnuncio_blocos.php"); ?>
        <!--fim anuncio-->
            <!-- Mais das Postagens Inicio -->
    <section class="services">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                                <div class="media-body">
                                        <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogExpoZebu.jpg">
                                        <h5>Evento Dez</h5>
                                    A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                                </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                <div class="media-body">
                                        <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogExpoZebu.jpg">
                                        <h5>Evento Onze</h5>
                                    A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                                </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                                <div class="media-body">
                                        <img class="medidacatalago" src="assets\images\img_catalago\CpCatalogExpoZebu.jpg">
                                        <h5>Evento Doze</h5>
                                    A Agrishow é considerada uma das três principais feiras de tecnologia agrícola do mundo e a maior e mais importante na América Latina, vitrine das mais avançadas tendências e inovações tecnológicas para o agronegócio.
                                </br><button type="" class="btn btn-primary">Ver Catálogo</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Fim de Mais Postagens -->
    <!-- Início das Parcerias -->
    <?php include ("parcerias.php"); ?>
    <!-- Fim das Parcerias -->
    <!-- Apelo à ação 2 Inicio -->
        <?php include ("anunciar.php"); ?>   
    <!-- Apelo à ação 2 Fim  -->
    <!-- Footer Incio -->
    <?php include ("footer.php"); ?>
    <!-- FooterFim -->
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assets/js/main.js"></script>
    <!--Botão Subir-->
    <script>
    var mybutton = document.getElementById("myBtn");
    //Quando o usuário rolar 20 px da parte superior do documento, mostre o botão
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
    }
    //Quando o usuário clicar no botão, role para a parte superior do documento
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>