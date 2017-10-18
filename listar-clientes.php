<title>Clientes</title>
<?php include ("partials/menu-adm.php"); ?>
<?php include ("partials/conexao.php"); ?>


<div id="page-content-wrapper">
<div class="container">
  <div class="row">
<div class="col-sm-12 col-md-12 well">
    <h3 class="">Listagem de Pedidos</h3>
    <div class="col-sm-6">

    </div>
    </div>
<div class="col-md-12">
  <br>
  <div class="col-md-4">

        </div>

<div class="col-md-4 col-md-offset-4">
      <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-btn">
                 <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
  </div>
</div>

<ul class="dropdown-menu pull-right" role="menu">
    <li><a href="#">Todos</a></li>
    <li><a href="#">Por Número do pedido</a></li>
    <li><a href="#">Por e-mail</a></li>
<li><a href="#">Por situação do pedido</a></li>
    <li><a href="#">Por tipo de envio</a></li>
<li><a href="#">Por Número de rastreamento</a></li>
<li><a href="#">Por Código do produto</a></li>
</ul>
</div>
</div>
<br>
<br>
   <div class="row">
    <section class="carrinhobg">
    <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                  <th style="width:30%">Nome</th>
                  <th style="width:30%">Sobrenome</th>
                  <th style="width:30%">Email</th>
                  <th style="width:30%">Endereco</th>
                  <th style="width:30%">Numero<th>
                  <th style="width:30%">Telefone<th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $total = mysql_query("SELECT * from tb_endereco p
                  inner join tb_usuario on p.cd_end = tb_usuario.cd_usuario
                  where p.cd_end = tb_usuario.cd_usuario") or die (mysql_error());



                        ?>
                    <div class="row">
                      <?php while($row = mysql_fetch_assoc($total)){ ?>
                      <div class="col-sm-12 hidden-xs"></div>
                    </div>
                  <td data-th="Nome" class="text-center"><?php echo $row['nome']; ?></td>
                  <td data-th="Sobrenome" class="text-center"><?php echo $row['sobrenome']; ?> </td>
                  <td data-th="Email" class="text-center"><?php echo $row['email']; ?></td>
                  <td data-th="Endereco" class="text-center"><?php echo $row['rua']; ?></td>
                  <td data-th="numerocasa" class="text-center"><?php echo $row['numerocasa']; ?></td>
                  <td data-th="Telefone" class="float-rigth"><?php echo $row['telefone']; ?></td>

                </tr>
                <?php }?>
              </tbody>
              </table>
          <hr />
        </section>
 <!--/.CONTAINER .ROW -->
                 </div>
</div><!-- end col-12 -->
</div><!-- end container -->
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
