<?php if(!isset($_SESSION))
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Login</title>

<?php include ("partials/head.php"); ?>

<!-- FONTES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<?php include ("partials/header.php"); ?>
<body>
<!-- carrinho menu-->
<div class="container">
  <section class="pd">
  </section>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="bg-form">
        <h3> Já sou cadastrado </h3>
      <form action="user_session.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control input-lg" id="" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" name="senha">Senha</label>
          <input type="password" class="form-control input-lg" name="senha" id="" placeholder="Senha">
          <a href="/recoverypassword" id="ajuda_senha" tabindex="5">Esqueci minha senha </a>
        </div>
        <button type="submit" class="btn btn-default btn-lg" href="">Entrar</button>
        <section class="pd">
        </section>
        <div class="registrate">
          <p>Ainda não tem sua conta? <a href="cadastro.php">Cadastre-se</a> </p>
        </div>
      </form>
    </div>
</div>
<!-- /.container -->
</div>
</div>
<section class="pd">
</section>
<!-- Footer -->
<?php include("partials/footer.php");?>
<!-- </footer> -->
</body>
</html>
