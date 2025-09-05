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
    <link rel="stylesheet" href="../assets/css/loader/loaders.css">
    <link rel="stylesheet" href="../assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/aos/aos.css">
    <link rel="stylesheet" href="../assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="../assets/css/lightgallery.min.css">
    <!-- Template Folhas de estilo -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Responsive Folhas de estilo -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!--Glyphicon-->
    <link rel="stylesheet" href="../assets/css/glyphicon.css">
    <!--Carrossel
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
       

    }
    </style>
</head>
<body>
    <!-- Loader Inicio -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center">
          <input name="input" type="text">
        </div>
    </div>
    <!-- Loader Fim -->
    <!-- Início do cabeçalho e Menu -->
    <?php include ("../menu.php")?>
    <!-- Fim do cabeçalho e Menu -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><p></p>
    <!-- Início dos serviços (Postagens) -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Página em Branco</h1>
            </div>
            <div class="container">
                       
            </div>
        </div>
    </section>


		<form action="" method="get">
        
        
        Digite o nome da Feira<input name="" type="text">
        Digite o Estado<input name="" type="text">
        Digite a Cidade<input name="" type="text">
        Digite o tema da feira<input name="" type="text">
        
        <input name="" type="submit" value="Cadastrar">
        
        
		</form>


    
<!-- Fim dos serviços (Postagens) -->
            <!--botao subir-->
            <button onclick="topFunction()" id="myBtn" title="Go to top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
            </button>
        <!-- Foot Note Fim -->
        <div class="foot-note">
            <div class="container">
                <div
                    class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
                    <p class="mb-0" data-aos="fade-right" data-aos-offset="0">&copy; 2019 Catálogo dos Expositores.  Desenvolvido por <a href="#">Anna Júlia Francisco</a> e <a href="#">Rodrigo Béo</a>.</br> Design por <a href="https://freehtml5.co/multipurpose" target="_blank" class="fh5-link">FreeHTML5.co</a>.</p>
                    <p class="mb-0" data-aos="fade-left" data-aos-offset="0"><a href="#">Política de Privacidade</a></p>
                </div>
            </div>
        </div> 
        <!-- Foot Note Fim -->
    </footer>
    <!-- FooterFim -->
    <!--jQuery-->
    <script src="../assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/loaders.css.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/swiper.min.js"></script>
    <script src="../assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="../assets/js/main.js"></script>
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