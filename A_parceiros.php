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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <style>
    /* Make the image fully responsive */
    .page-info-section{
		background-image: url(assets/images/page-bg/02.jpg);
		background-repeat:no-repeat;
    }
    /*-----------------------------------
    IMPORTANTE NAO TIRAR - Cabeçalho paginas (sem ser index)
    ------------------------------------*/
    .page-info-section {
        height: 443px;
    }
    .set-bg {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }
    .site-breadcrumb {
        padding-top: 20%;
    }

    .site-breadcrumb a,
    .site-breadcrumb span {
        display: inline-block;
        margin-right: 2%;
        padding-right: 10px;
        font-weight: 600;
        font-size: 18px;
    }

    .site-breadcrumb a {
        color: #fff;
        position: relative;
    }

    .site-breadcrumb a:after {
        position: absolute;
        content: "/";
        right: -6px;
        top: 0;
        color: #fff;
    }

    .site-breadcrumb span {
        color: #208fef;
    }

    @media (min-width: 1200px) {
        .ccontainer {
            max-width: 1180px;
            margin-left: 5%;
        }
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
	<div class="page-info-section set-bg">
		<div class="ccontainer">
			<div class="site-breadcrumb">
				<a href="index.php">Início</a>
				<a href="#">Apresentação</a>
				<span>Parceiros</span>
			</div>
		</div>
	</div>    
    <!-- Início dos serviços (Postagens) -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Parceiros</h1>            
                </div>
            <div class="container"> 
                <hr>
                    <h2>Mensagem do IBCE &nbsp;&nbsp;<img src="assets/images/img_parceiro/ibce.jpg" width="40" height="50"></h2>
                    <div class="row">
                    <div class="col-9">
                    <p><div class="parceiro_text text-justify">O Agronegócio brasileiro conseguiu atingir ganhos enormes de produtividade, revelando-se o motor do crescimento futuro do Brasil. A inovação trouxe uma verdadeira revolução verde para o Brasil, criando uma das mais produtivas agriculturas do mundo. Em menos de quatro décadas, saímos da posição de importador líquido de alimentos e passamos a disputar com os grandes players como os Estados Unidos, a liderança no fornecimento de produtos agropecuários e de bioenergia. Hoje o país lidera a produção mundial de açúcar, soja, café e suco de laranja. Temos posição de destaque na exportação desses e de outros produtos do agronegócio, como carnes, milho, soja, café, frutas e algodão. As feiras de agronegócio foi o setor responsável pelo desenvolvimento, pois aproximou produtores e consumidores, criando oportunidades para relacionamentos e trocas de experiências. Somos mais competitivos, verdadeiros campeões mundiais. O IBCE, apóia totalmente a produção do calendário, era uma publicação que faltava no mercado que muito auxiliará as empresas. </p></div>
                    <blockquote>
                    <em><strong>Getúlio José Manoel Lopes</strong></em><br/>
                    <em>Presidente do IBCE</em></div>
                    </blockquote>
                    <div class="col">
                    <img src="assets/images/img_parceiro/pessoaIbce.png" width="200" height="293">
                    </div>
            </div>
        </div>
    </section>
    <!-- Fim de Mais Postagens -->

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