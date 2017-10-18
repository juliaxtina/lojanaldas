

<?php include ("partials/menu-adm.php"); ?>
<?php include ("partials/conexao.php"); ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">


<div id="page-content-wrapper">

<div class="container">

<div class="col-md-12">



	   <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-8">
                            <h3>Total de Visitas </h3>
                            <p style="font-size: 12px;"> 0 visitas/ mês </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-8">
                            <h3>Total de Pedidos </h3>
                            <p style="font-size: 12px;">
                            <?php   $total_pedidos = "SELECT * from tb_pedido" or die (mysql_error());
                                   $q = mysql_query($total_pedidos);
                                   $r = mysql_num_rows($q);
                                   print $r; ?>
                               pedidos/  total</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-8">
                            <h3>Total de Clientes </h3>
                            <p style="font-size: 12px;">
<?php $total_clientes = "SELECT * from tb_usuario" or die (mysql_error());
      $qr = mysql_query($total_clientes);
      $result = mysql_num_rows($qr);
      print $result;
      ?> clientes/ total
</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



      </div>

	  <div class="row">
    <section class="carrinhobg">
    <table id="cart" class="table table-hover table-condensed">
        				<thead>
    						<tr>
    							<th style="width:50%">Resumo Geral</th>

    							<th style="width:10%"></th>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td data-th="Produto">
    								<div class="row">

    									<div class="col-sm-10">
    										<h4 class="nomargin">Total de produtos cadastrados  :</h4>
    										<p style="font-size: 20px;"> <?php $total = "SELECT * from vw_produtos" or die (mysql_error());
                              $cont = mysql_query($total);
                              $resultado = mysql_num_rows($cont);
                              print $resultado;
                              ?> </p>
                        <p> <a href="cadastro-produtos.php"/> Adicionar mais produtos</a></p>
    									</div>
    									</div>
										<div class="row">
										<div class="col-sm-10">
    										<!-- <h4 class="nomargin">Dominío:</h4> -->
    										<p> <a href=""/> </a></p>
    									</div>
    								</div>


									<div class="row">
										<div class="col-sm-10">
    										<h4 class="nomargin"> </h4>
    										<p> </p>
    									</div>
    								</div>
    							</td>

    						</tr>
    					</tbody>

              </table>

            <hr />


                                          </section>

 <!--/.CONTAINER .ROW -->
                 </div>


</div>




</div><!-- end col-12 -->






    </div><!-- end page-content-wrapper -->


  <!-- FOOOTER -->
  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.mask.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!--Alertify -->
  <script src="js/alertify.min.js"></script>
  <!-- Custom JavaScript -->
  <script src="js/app.js"></script>
  <!-- AngularJS -->

</body>

  </html>
