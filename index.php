
<?php if(!isset($_SESSION))
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Julia Cristina, Andresa Rios, Sarah Paiva, Wesley Garcia, Pamela Santos">
    <meta name="keywords" content="roupas, roupa para caes, roupa para animal, animais domesticos">
    <meta http-equiv="content-language" content="pt-br">


    <title>Início teste </title>

    <?php include ("partials/head.php"); ?>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="javascript">
$(document).ready(function() {
$('#myCarousel').carousel({
    interval: 10000
})
});
    </script>
</head>

<body>
 <!-- carrinho menu-->
 <?php include("partials/header.php");?>
<div class="container">

	<div class="row">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="img/slide2.jpg" width="1870px" height="980px" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center" style="padding-top: 100px;">
                            <section style="padding:55px;">
                            </section>
                            <h3>
                            	<span style="background-color: #cc0000;">Bem-vindo ao Atacadao dos Oculos!</span>
                            </h3>

                            <div class="">
                                </div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="img/slide1.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs" style="padding-top: 100px;">
                        <div class="col-md-12 text-center">
                            <h2>
                          <span>Faça sua conta!</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Cadastre-se e comece as suas compras!</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="login.php" style="text-transform: uppercase; font-weight: bold;">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="cadastro.php" style="text-transform: uppercase; font-weight: bold;">Cadastro</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <!-- <div class="item">
			    	<img src="img/slide3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <!-- <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                          <section style="padding:85px;">
                          </section>
                            <h3>
                            	<span style="color: #FFF; background-color: #CC0000;">Roupas e acessórios artesanais!</span>
                            </h3>
                            <br>
                            <div class="">
                              <a class="btn btn-lg " href="produtos.php" style="background-color: #fff; color: #bb0000; text-transform: uppercase; font-weight: bold;">VER PRODUTOS</a>
                              </div>
                        </div>
                    </div><!-- /header-text -->
			     <!-- </div> -->
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</div>
</div>
</div>
          <div class="row">
            		<div class="col-md-12">
                  <div class="escolha-categoria">
                    <h2 class="text-center"
                    style="padding-bottom: 25px; padding-left: 15px; padding-top: 25px;">ESCOLHA POR CATEGORIA, POR FAVOR, BRUNO</h2>
                            <div id="" class="carousel slide">
                                <!-- Carousel items -->
                            <div class="carousel-inner">
                            <div class="item active">
                                <div class="row-fluid">
                            	  <div class="col-md-3">
                                  <a href="vestidos.php" class="thumbnail">
                                  <div class="containa">
                                    <img class="imaga" src="img/armacao.jpg" alt="Image" style="max-width:100%;" />
                                    <div class="middle">
                                    <div class="text">Armações</div>
                                    </div>
                                      </div><!--/item-->
                                    </a>
                                    </div>
                                  <div class="col-md-3">
                                    <a href="camisetas.php" class="thumbnail">
                                    <div class="containa">
                                    <img class="imaga" src="img/lentes.png" alt="Image" style="max-width:100%;" />
                                    <div class="middle">
                                    <div class="text">Lentes</div>
                                    </div>
                                      </div><!--/item-->
                                    </a>
                                    </div>

                                  <div class="col-md-3">
                                    <a href="lacos.php" class="thumbnail">
                                  <div class="containa">
                                    <img class="imaga" src="img/transi.png" alt="Image" style="max-width:100%;" />
                                    <div class="middle">
                                    <div class="text">Acessorios</div>
                                    </div>
                                      </div><!--/item-->
                                    </a>
                                    </div>
                                <div class="col-md-3">
                                  <a href="coleiras.php" class="thumbnail" style="text-decoration: none;">
                                    <div class="containa">
                                    <img class="imaga" src="img/multifocal.png" alt="Image" style="max-width:100%;" />
                                    <div class="middle">
                                    <div class="text">Lentes Multifocais</div>
                                    </div>
                                  </div>
                                  </a>
                                </div>
                            </div><!--/carousel-inner-->
                              </div><!--/item-->
                            </div><!--/myCarousel-->
                          </div>
                        </div><!--/well-->
                      </div>
            		</div>
  <style>
  .containa{

        position: relative;
}

.imaga {
  display: block;
   width: auto;
   height: auto;
}

.middle {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
  transition: .5s ease;
  background-color: #cc0000;
  border-radius: 4px;
}

.containa:hover .middle {
  opacity: 0.8;

}
.text {
  color: black;
font-size: 20px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
}
</style>

            <?php include_once("partials/conexao.php");
            $result_produtos = "SELECT * FROM vw_produtos order by cd_produto asc limit 4" or die(mysql_error());
            $resultado_produtos = mysql_query($result_produtos);
            if (false === $resultado_produtos) {
              echo mysql_error();
          }
          ?>
          <div class="row">
                    <div class="relevantes">
                    <h2 class="text-center">EM DESTAQUE </h2>
                    <div class="row">
                    <section class="pd-produtos" style="padding-top: 30px;">
                      <?php while($rows_produtos = mysql_fetch_assoc($resultado_produtos)){ ?>
                              <div class="col-sm-5 col-md-3">
                                <a href="detalhes-produto.php?cd_produto=<?php echo $rows_produtos['cd_produto']; ?>">
                                <div class="thumbnail">
                                  <img src="img/produtos/<?php echo $rows_produtos['imagem'];?> " width="220px" height="220px">
                                    <div class="caption">
                                          <h3 class="text-rec">
                                             <?php echo $rows_produtos['nm_produto']; ?>
                                           </h3>
                                            <h3 class="text-rec-vl">
                                      <?php
                                       $valor = $rows_produtos['vl_produto'];
                                        $valor = 'R$ '.number_format($valor, 2, ',', '.');
                                        echo $valor;
                                        ?>
                                      </h3>
                                      </a>
                                    </div>
                                  </div>
                            </div>
                              <?php } ?>
                            </div>

                  <!--/CONTAINER  -->
                </div>
                </div>
                 <!-- Footer -->

                 <?php include("partials/footer.php");?>

                 <!-- </footer> -->
</body>

</html>
