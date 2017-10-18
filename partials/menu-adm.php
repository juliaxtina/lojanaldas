
<head>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- Custom CSS -->

  <link href="css/main.css?v=2" rel="stylesheet" type="text/css" />
  <link href="css/adm.css?v=2" rel="stylesheet" type="text/css" />

  <link href="css/alertify.core.css" rel="stylesheet" type="text/css" />
  <link href="css/alertify.default.css" rel="stylesheet" type="text/css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">




/</head>

        <!-- <ul class="nav navbar-right top-nav">
        <li>
      <a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats">
      <i class="fa fa-bar-chart-o"></i>
      </a>
    </li>
    <ul class="nav navbar-right top-nav">
      <li><a href="logout.php"> Sair </a></li>
    <li><a href="index.php"> Voltar a loja </a></li>
</ul>
</ul> -->

        <!--MENU LATERAL  -->
    <div class="nav-side-menu">
    <div class="brand">
    <a href="index.php"><img src="img/logo.jpg" width="110px;" height="90px;"> </a>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="pagina-inicial.php">
                  <i class="fa fa-dashboard fa-lg"></i> Página Inicial
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-archive"></i> Produtos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="listar-produtos.php">Listar Produtos</a></li>
                    <li><a href="cadastro-produtos.php">Cadastrar produtos</a></li>
                </ul>

                <!-- <li>
                  <a href="categorias.php">
                  <i class="fa fa-bars"></i> Categorias
                  </a>
                </li> -->

                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href=""><i class="fa fa-globe fa-lg"></i> Pedidos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                <li>  <a href="listar-pedidos.php">Listar Pedidos</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="listar-clientes.php">
                    <i class="fa fa-users fa-lg"></i> Clientes
                    <span class="arrow"></span>
                  </a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="filtros.php">Listagem de Clientes</a></li>
                </ul>

                <li>
                 <a href="profile.php">
                 <i class="fa fa-user fa-lg"></i><a href=""> Conta</a>
                   <ul class="sub-menu collapse" id="new">
                </ul>
                 </a>
                 </li>
                 <li>
                  <a href="index.php">
                  <i class="fa fa-navicon fa-lg"></i>
                  Voltar ao Site
                </a>
               </li>

                 <li>
                  <a href="logout.php">
                  <i class="fa fa-sign-out fa-lg"></i>
                   Sair</a>
                 </li>
            </ul>

          </div>
     </div>


<!-- .MENU LATERAL -->

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
  <!-- Menu Toggle Script -->
  <script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  </script>
