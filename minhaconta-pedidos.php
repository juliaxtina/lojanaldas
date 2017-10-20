<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php if(!isset($_SESSION))
  {
    session_start();
  }
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Meus pedidos</title>

    <?php include ("partials/head.php"); ?>
    <?php include ("partials/conexao.php"); ?>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- carrinho menu-->


</head>

<body>
  <?php include("partials/header.php");?>

   <div class="container">
       <div class="row">
         <div class="col-md-3">

           <section class="pd-icon" style="padding-top: 35px; padding-left: 10px;">
          <div class="icon-usuario">
         <i class="glyphicon glyphicon-user"> </i>


           <strong class="user-name"><?php echo $_SESSION['nome']?> <?php echo $_SESSION['sobrenome']?></strong>
            <br />
          <small style="padding-left:55px;">
            <a style="cursor: pointer; text-decoration: none; color: #000; font-size:14px;" id="sair-conta" href="logout.php"> Sair </a>
          </small>
        </div>
          </section>

            <section class="pd-menu-pedido">

              <div class="list-group">


                <!-- <a href="minhaconta.php" class="list-group-item">Minha Conta</a> -->
                <a href="minhaconta-pedidos.php" class="list-group-item"> Meus Pedidos</a>
                <a href="minhaconta-dadoscadastrais.php" class="list-group-item">Meus Dados Cadastrais</a>
                <a href="minhaconta-enderecos.php" class="list-group-item">Meus Endereços</a>

       </div>
        </div>
      </section>
          <!--  src numero pedido -->

          <div class="col-md-9">
          <div class="page-header">

            <h3>Meus Pedidos</h3>

        </div>

          <div class="col-md-5 col-md-offset-7">
                 <div id="custom-search-input" style="float: right;">
                                  <div class="input-group col-md-12">
                                      <input type="text" class="search-query form-control" placeholder="Buscar por número do pedido" />
                                      <span class="input-group-btn">
                                          <button class="btn btn-danger" type="button">
                                              <span class=" glyphicon glyphicon-search"></span>
                                          </button>
                                      </span>
                                  </div>
                              </div>
          </div>
          <style>
          /* Table Base */

   table {
   max-width: 100%;
   background-color: transparent;
   border-collapse: collapse;
   border-spacing: 0;
   font-family: arial;
   }

   .table {
   border-bottom: transparent solid 1px;
   width: 100%;
   margin-bottom: 20px;
   }

   .table th,
   .table td {
   border-right: transparent solid 1px;
   font-size: 15px;
   padding: 8px;
   line-height: 20px;
   text-align: left;
   vertical-align: middle;
   }

   .table td:last-child {
   border-right: 0;
   }

   .table thead th {
   font-weight: normal;
   background-color: #005dab;
   color: #fff;
   font-size: 15px;
   }

   .table tbody > tr:nth-child(odd) > td,
   .table tbody > tr:nth-child(odd) > th {
   background-color: #f8f8f8;
   }


   /* Small Sizes */
   @media (max-width: 767px) {

   /* Responsive Table */
   .table-responsive {
   display: block;
   position: relative;
   width: 100%;
   }

   .table-responsive thead,
   .table-responsive tbody,
   .table-responsive th,
   .table-responsive td,
   .table-responsive tr {
   display: block;
   }
   .table-responsive td,
   .table-responsive th {
   height: 35px;
   }

   .table-responsive thead {
   float: left;
   }

   .table-responsive tbody {
   width: auto;
   position: relative;
   overflow-x: auto;
   -webkit-overflow-scrolling: touch;
   white-space: nowrap;
   }

   .table-responsive tbody tr {
   display: inline-block;
   }


   .table td:last-child {
   border-right: transparent solid 1px;
   }


   }</style>
                      <!--Status do pedido  -->
                      <?php
                      // tb_pedido
                      //buscar pedido
                      $seusuario = $_SESSION['idUser'];
                      $sql_busca_pedido = mysql_query("SELECT * from tb_pedido where cd_usuario = '$seusuario'") or die (mysql_error());
                      $r = mysql_fetch_assoc($sql_busca_pedido);
                      $pedido = $r['id_pedido'];
                      // echo $pedido;
                      $sql = mysql_query("SELECT * FROM tb_itens_pedido
                       where itens_pedido_id_pedido = '$pedido'") or die (mysql_error());
                       $ln = mysql_fetch_assoc($sql);
                       ?>
                      <section class="pd-pedido">

                      <div class="row">
                        <?php while ($ln = mysql_fetch_assoc($sql)) { ?>
                        <table class="table table-responsive" width="374" border="1" bordercolor="#0" cellspacing="0" cellpadding="3">
                        <tbody>
                        <tr align="center">
                          <td>
                          <?php $data = $r['pedido_data_hora']; ?>
                          <?php echo "Efetuado em: "; echo "&nbsp;"; echo date('d/m/Y H:i:s', strtotime($data)); ?> </td>
                          <td> Status </td>
                          <td> Código do pedido</td>


                      </tr>

                        <tr align="center">
                          <td>
                            <?php
                            $select = mysql_query("SELECT * FROM tb_itens_pedido inner join tb_produto p on
                              tb_itens_pedido.itens_pedido_cd_produto = p.cd_produto
                              where itens_pedido_id_pedido = '$pedido'") or die(mysql_error());

                              while ($linha = mysql_fetch_assoc($select)){

                                echo "<b>".$linha['nm_produto']; echo"</b>"; echo "<br>";
                                echo "R$".$linha['vl_produto'];echo "<br>";
                                echo "<b> Quantidade: </b>&nbsp;".$linha['qt_produto'];}
                                ?>
                              </td>
                          <td><b> <?php if ($r['status'] == '0'){
                            echo "Processando";
                            } ?>
                            &nbsp;</b></td>
                        <td> <b> <?php echo $r['id_pedido'];?> </b></td>
                      </tr>



                        <tr align="center">
                            <td>Valor Total: <b><?php echo "R$".$r['valor'];?>   </b></td>

                            <td><a class="btn btn-default btn-sm" href="pagamento.php" id="mobile-button" role="button">PAGAR</a></td>

                            </tr>

                            <?php } ?>
                      </div>
                      </div>
                    </tbody>
                    </table>
                  </section>

      </div>
            <!-- .container .row -->
          </div>
          </div>



          <section class="pd">
          </section>
        <!-- Footer -->

        <?php include("partials/footer.php");?>

        <!-- </footer> -->


    <!-- /.container -->


</body>

</html>
