<?php if(!isset($_SESSION)){
   session_start();
}?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Carrinho</title>

    <?php include ("partials/head.php"); ?>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

</head>
<?php
include_once("partials/conexao.php");

 if(!isset($_SESSION['carrinho']))
 {
    $_SESSION['carrinho'] = array();
   }

    //adiciona produto
    if(isset($_GET['add']))
    {
      //ADICIONAR CARRINHO

      if($_GET['add']) {
       $id = intval($_GET['add']);
      if(!isset($_SESSION['carrinho'][$id]))
      {
         $_SESSION['carrinho'][$id] = 1;
        }
      else{
        $_SESSION['carrinho'][$id] += 1;
      }
      // print_r ($_SESSION['carrinho']);
    }
}
//REMOVER CARRINHO

    if(isset($_GET['del']))
    {
      $id = intval($_GET['del']);
      if(isset($_SESSION['carrinho'][$id]))
      {
        unset($_SESSION['carrinho'][$id]);
      }
    }

    //ALTERAR QUANTIDADE
     if(@[$_GET['up']]) {
        if(is_array(@$_POST['prod'])){
          foreach($_POST['prod'] as $id => $qtd){
                     $id  = intval($id);
                     $qtd = intval($qtd);
                     if(!empty($qtd) || $qtd <> 0)
                     {
                        $_SESSION['carrinho'][$id] = $qtd;
                     }else{
                        unset($_SESSION['carrinho'][$id]);
                     }
                  }
               }
            }

      //ESVAZIAR carrinho
      if(isset($_GET['empty']))
      {
        if(isset($_SESSION['carrinho']))
        {
          unset($_SESSION['carrinho']);
        }
      }
      if(isset($_GET['finalizar']))
    {
        header("Location: login-car.php");
      }
   ?>
 <!-- carrinho menu-->
 <?php include("partials/header.php");?>
<div class="container">
  <div class="row">
    <section class="carrinhobg">
      <form action="carrinho.php" method="get" onsubmit="">
      <div class="txt-heading">Carrinho
        <a id="btnEmpty" href="carrinho.php?empty"/>Esvaziar carrinho</a>
      </form>
      <form action="carrinho.php" method="post">
      </div>
        <table id="cart" class="table table-hover table-condensed">
          <?php
          if(count(@$_SESSION['carrinho']) == 0){ ?>
            <?php echo '<h4 class="nomargin"> Não há produto no carrinho </h4>';

            echo'  <a href="produtos.php" class="btn btn-warning">
                Adicionar produtos</a></td>';
             ?>

            <?php }
            else {
              $total = 0;
              foreach($_SESSION['carrinho'] as $id => $qtd){
                $sql   = "SELECT *  FROM vw_produtos WHERE cd_produto= '$id'";
                $qr    = mysql_query($sql) or die(mysql_error());
                $ln    = mysql_fetch_assoc($qr);

                $nome  = $ln['nm_produto'];
                $preco = number_format($ln['vl_produto'], 2, ',', '.');
                $sub   = number_format($ln['vl_produto'] * $qtd, 2, ',', '.');

                $total += $ln['vl_produto'] * $qtd;
                $_SESSION['produto'] = $id;
                ?>
        				<thead>
                  <tbody>
    						<tr>
    							<th style="width:50%">Produto</th>
    							<th style="width:10%">Preço</th>
    							<th style="width:8%">Quantidade</th>
    							<th style="width:22%" class="text-center">Subtotal</th>
    							<th style="width:10%">Retirar da cesta</th>
    						</tr>
    					</thead>
    						<tr>
    							<td data-th="Produto">
    								<div class="row">
    									<div class="col-sm-2 hidden-xs">
                      <img src="img/produtos/<?php echo $ln['imagem']?>" alt="..." class="img-responsive"/></div>
                      <div class="col-sm-10">
    										<h4 class="nomargin"><?php echo $ln['nm_produto']?></h4>
                           <p class=""> <?php echo $ln['ds_produto']?>
                             </p>
     									</div>
    							</td>
    							<td data-th="Preço"> <?php echo 'R$' .number_format($ln['vl_produto'], 2, ',', '.');?>  </td>
                  <form action="carrinho.php?up" method="get">
                  <td data-th="Quantidade">
                    <input type="number" class="form-control text-center" name="prod<?php echo '['.$id.']'?>" value="<?php echo $qtd?>"/>
                  </form>
    							</td>
    							<td data-th="Subtotal" class="text-center"> <?php echo 'R$' .$sub; ?> </td>
    							</td>
                </form>
                <?php //$id = $_GET['add']; ?>
                <form class="carrinho.php" method="get">
                  <td data-th="Excluir" class="text-center">
                    <a href="carrinho.php?del=<?php echo $id; ?>"/> Excluir </td>
                    </tr>
                </form>
            </div>
    					</tbody>
    					<tfoot>
                <?php } ?>
    						<tr>
    							<td><a href="produtos.php" class="btn btn-warning">
                    <i class="fa fa-angle-left"></i> Continue comprando</a></td>
    							<td colspan="3" class="hidden-xs"></td>
    							<td class="hidden-xs text-center" ><strong>
                      <?php echo 'Total: '.'R$' .number_format($total, 2, ',', '.'); ?>
                      </strong>
                    </td>
                    <?php  } ?>
                  </tr>
                </tbody>
                  </tfoot>
                </table>
                <!-- <div class="table">
                  <thead>
                    <tr>
                      <th style="width:50%">
                        <b>CALCULAR FRETE</b>
                      </th>
                    </tr>
                  </thead>
                  <div id="custom-search-inputii">
                    <div class="input-group col-md-12">
                      <input type="text" class="search-query form-control" placeholder="Digite um cep válido" />
                      <span class="input-group-btn">
                        <button class="btn btn-default btn-md" type="button">
                          Calcular
                        </button>
                      </span>
                    </div>
                  </div>
                </div> -->
                  <div class="comprar">
                    <form action="user-car.php" method="get">
                      <input type="hidden" name="cd_usuario" value="<?php echo $susuario;?>">
                      <input type="hidden" name="cd_produto" value="<?php echo $id;?>">
                      <input type="hidden" name="qtd" value="<?php echo $qtd;?>">
                      <input type="hidden" name="total" value="<?php echo$total;?>">
                    <?php
                    if(count(@$_SESSION['carrinho']) != 0){ ?>
                    <a href="?finalizar&cod=<?php echo $id;?>" class="btn btn-default btn-lg">Comprar</a>
                    <?php }?>
                  </form>
                  </div>
                  <div class="att">
                    <a href="carrinho.php" class="btn btn-default btn-lg" onclick="<?php
                     echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=carrinho.php'>";
                    ?>">Atualizar carrinho</a>
                  </div>
            <hr />
            </section>
 <!--/.CONTAINER .ROW -->
                 </div>
                 </div>
         <!-- Footer -->

         <?php include("partials/footer.php");?>
         <!-- </footer> -->
     <!-- /.container -->
</body>
</html>
