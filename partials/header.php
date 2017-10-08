<?php if(!isset($_SESSION))
{
  session_start();
}
?>
    <?php include_once ("conexao.php") ?>

<!-- ::::: HEADER INCLUDE-->
    <div class="header">
         <div class="topbar">
             <div class="container">
                 <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills navbar-right">

                        <li role="presentation" class=""><a href="carrinho.php">Carrinho</a></li>
                        <li role="presentation" class=""><a href="cadastro.php">Criar conta</a></li>
                        <li role="presentation" class=""><a href="login.php">Login</a></li>
                        <?php
                        if ($_SESSION) {
                        echo ' <li role="presentation"><a href="minhaconta-pedidos.php">'.@$_SESSION['nome'].'</a></li>';
                      }

                      ?>
                      <?php if ($_SESSION) { echo ' <li role="presentation" class=""><a href="logout.php"><span class="glyphicon glyphicon-off"></span></a></li>';}?>
                    </ul>
                  </div>
             </div>
             </div><!-- end.topbar -->

        <!-- LOGO - CSS: MAIN-->
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center>
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="" class="img-responsive"></a>
            </div>
        </center>
            </div>
            <div class="col-md-4">
                <div class="search-desktop">
                  <form method="GET" action="pesquisar.php">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="O que procura?" id="consulta" name="consulta" maxlength="255">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                        </div>
                      </form>
                        <!-- /input-group -->
                </div>



            </div>
        </div>
        </div>

<!--MENU SITE  -->
         <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand search-mobile">
          <form class="navbar-form navbar-left">
        <div class="input-group">
                        <input type="text" class="form-control" placeholder="O que está procurando?">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                        </div><!-- /input-group -->
      </form>
      </div>


    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="produtos.php?pagina=2"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Roupas <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="produtos.php?pagina=2">Todos</a></li>

          <li><a href="camisetas.php">Camisetas</a></li>
          <li><a href="vestidos.php">Vestidos</a></li>

          <!-- <li><a href="produtos.php">Verão</a></li> -->

        </ul>
        <li><a href="produtos.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acessórios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="coleiras.php">Coleiras</a></li>



          </ul>
        </li>

        <li><a href="contato.php">Contato</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- END MENU SITE -->
    </div><!--end.header-->
    <!-- ::::: END. HEADER INCLUDE :::::::: -->
