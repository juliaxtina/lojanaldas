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
    <meta name="author" content="">

    <title>Produtos</title>

  <?php include ("partials/head.php"); ?>

  <?php include_once("partials/conexao.php");
  $sql = "SELECT * FROM vw_produtos" or die(mysql_error());
  $qr = mysql_query($sql);
  if (false === $qr) {
    echo mysql_error();
}
?>
<?php
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//Contar o total de produtos
$total_produtos = mysql_num_rows($qr);
//Seta a quantidade de produtos por pagina
$quantidade_pg = 6;
//calcular o número de pagina necessárias para apresentar os produtos
$num_pagina = ceil($total_produtos/$quantidade_pg);
//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;


//Selecionar os cursos a serem apresentado na página
$sql = "SELECT * FROM vw_produtos limit $incio, $quantidade_pg";
$qr = mysql_query($sql);
$total_produtos = mysql_num_rows($qr);
?>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>


<body>
    <!-- carrinho menu-->
 <?php include("partials/header.php");?>
    <!-- ::::: END. HEADER INCLUDE ..:::::::: -->

<div class="container">


    <section class="bg-produtos">
        <div class="row">

             <div class="col-md-3">
               <div class="categorias well">
               <div class="title-categ">
                <a href="roupas/" title="Roupas">
                    <p class="lead">Armações</p>
                </a>
              </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Masculino</a>
                    <a href="#" class="list-group-item"> Feminino</a>
                    <a href="#" class="list-group-item">Infantil</a>

              </div>
              <div class="title-categ">

                <a href="#" title="Coleiras">
                    <a href="coleiras.php"> <p class="lead">Lentes</p> </a>
                </a>
              </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Transitions</a>
                    <a href="#" class="list-group-item"> Crizal</a>
                    <a href="#" class="list-group-item">Antireflexo</a>
                    <a href="#" class="list-group-item">Multifocal</a>
                </div>
                <div class="title-categ">

                <a href="#" title="Coleiras">
                    <a href="#"> <p class="lead">Acessorios</p> </a>
                </a>
              </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Limpa Lentes</a>
                </div>
        </div>
        </div><!-- end.col-md-3-->

        <div class="col-md-9">
          <div class="row carousel-holder">

              <div class="col-md-12">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="item active">
                              <img class="slide-image" src="img/logo.jpg" alt="">
                          </div>
                          <div class="item">
                              <img class="slide-image" src="img/slide2.jpg" alt="">
                          </div>
                          <div class="item">
                              <img class="slide-image" src="img/slide3.jpg" alt="">
                          </div>
                      </div>

                  </div>
              </div>

          </div>
              <!-- PAGINACAO -->
              <div class="col-xs-12">

                <?php
                  //Verificar a pagina anterior e posterior
                  $pagina_anterior = $pagina - 1;
                  $pagina_posterior = $pagina + 1;
                ?>

                        <!--PAGINACAO  -->
                            <div class="paginacao">
                              <nav aria-label="Page navigation">
                                  <ul class="pagination">
                                    <li>
                                      <?php
                                      if($pagina_anterior != 0){ ?>
                                        <a href="produtos.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                      </a>
                                      <?php }else{ ?>
                                        <span aria-hidden="true">&laquo;</span>
                                    <?php }  ?>
                                    </li>
                                    <?php
                                    //Apresentar a paginacao
                                    for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                                      <li><a href="produtos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php } ?>
                                    <li>
                                      <?php
                                      if($pagina_posterior <= $num_pagina){ ?>
                                        <a href="produtos.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                                          <span aria-hidden="true">&raquo;</span>
                                        </a>
                                      <?php }else{ ?>
                                        <span aria-hidden="true">&raquo;</span>
                                    <?php }  ?>
                                    </li>
                                  </ul>
                                </nav>

                            </div>
                <!-- ORDENAR POR -->
                  <section style="padding-top: 11px;"></section>
                  <section class="ordenar-por">
                  <form class="form-inline" method="POST" action="preferencia.php">
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="escolha">
    <option selected>Preferências</option>
                    <option value="menor"> Menor preço </option>
                    <option value="maior"> Maior preço </option>
                    <option value="A-Z"> A-Z </option>
                    <option value="Z-A"> Z-A </option>
                    <option value="melhor-desconto"> Melhor desconto </option>
                  </select>
                  <button type="submit" class="btn btn-default btn-sm">Submit</button>
                  </form>
                </section>
              </div>
              <?php
                // $cod = $linha[0];
                // $nome = $linha[1];
                // $img = $linha[2];
              ?>
                <div class="row">
                  	<?php while($ln = mysql_fetch_assoc($qr)){ ?>
                      <div class="thumb">
                        <div class="col-sm-4 col-lg-4 col-md-4">
                          <a href="detalhes-produto.php?cd_produto=<?php echo $ln['cd_produto']; ?>">
                          <div class="thumbnail">
                            <img src="img/produtos/<?php echo $ln['imagem'];?> " width="220px" height="220px">
                            <div class="overlay">
                            </div>
                            <h3 class="text">
                              <?php echo $ln['nm_produto']; ?>
                              </h3>
                              <h3 class="texta">
                                <?php
                                  $valor = $ln['vl_produto'];
                                  $valor = 'R$ '.number_format($valor, 2, ',', '.');
                                  echo $valor;
                                ?>
                              </h3>
                            </a>
                          </div>
                          <div class="placeholder">
                            <span class="car-parc"></span>
                            </div>
                              </div>
                            </div>
                      <?php } ?>
                    </div>
                    <?php
                      //Verificar a pagina anterior e posterior
                      $pagina_anterior = $pagina - 1;
                      $pagina_posterior = $pagina + 1;
                    ?>

                            <!--PAGINACAO  -->
                                <div class="paginacao">
                                  <div class="col-xs-12">
                                    <nav aria-label="Page navigation">
                                      <ul class="pagination">
                                        <li>
                                          <?php
                                          if($pagina_anterior != 0){ ?>
                                            <a href="produtos.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                          </a>
                                          <?php }else{ ?>
                                            <span aria-hidden="true">&laquo;</span>
                              					<?php }  ?>
                                        </li>
                                        <?php
                              					//Apresentar a paginacao
                              					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                              						<li><a href="produtos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                              					<?php } ?>
                              					<li>
                              						<?php
                              						if($pagina_posterior <= $num_pagina){ ?>
                              							<a href="produtos.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                              								<span aria-hidden="true">&raquo;</span>
                              							</a>
                              						<?php }else{ ?>
                              							<span aria-hidden="true">&raquo;</span>
                              					<?php }  ?>
                                        </li>
                                      </ul>
                                    </nav>
                                  </div>
                                </div>

                </div><!-- end.row produtos-->
                </div>



                </div><!-- end.row-->


</div><!-- end.container-->


<!-- FOOOTER -->
<?php include("partials/footer.php");?>
</body>

</html>
