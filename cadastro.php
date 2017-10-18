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
    <meta name="author" content="Julia Cristina">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>

     <!-- Head include -->
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
<body>
<!-- carrinho menu-->
 <?php include("partials/header.php");?>


  <div class="container">
    <div class="row" style="padding-top: 30px;">
            <div class="col-lg-12">

              <div class="bg-form-cadastro">
                <h3 style="text-align: center;
                            text-transform: uppercase;
                            color: #cc0000;
                            padding-bottom: 35px;"> Dados de Cadastro </h3>
                <div class="form-mobile">

                  <form class="form-horizontal" method="POST" action="cadastro_usuario.php" onsubmit="return v_cadastro(this);">

                      <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Nome*</label>
                        <div class="col-sm-3">
                        <input type="text" name="nome" class="form-control" id="nome" maxlength="90">
                        </div>
                        <label for="name" class="col-sm-2 control-label">Sobrenome*</label>
                        <div class="col-sm-3">
                        <input type="text" name="sobrenome" class="form-control" id="sobrenome" maxlength="90">
                        </div>
                      </div>
                      <!--SEXO-->
                      <div class="form-group">
                      <label class="col-sm-3 control-label">Sexo*</label>
                      <div class="col-sm-3">
                        <input type="radio" name="sexo" id="radio" value="fem">
                        Feminino
                        <input type="radio" name="sexo" id="radio" value="masc">
                        Masculino
                      </div>



              <label for="datanasc" class="col-sm-2 control-label">Data de Nascimento*</label>
              <div class="col-sm-3">
                <input type="text" class="form-control date" id="dataNasc" name="dataNasc" data-mask="00/00/0000">
              </div>
            </div>
              <div class="form-group" id="form1">
              <label for="cpf" class="col-sm-3 control-label">CPF*</label>
              <div class="col-sm-3">
                <input type="text" class="form-control cpf" name="cpf" id="cpf" onblur="return verificarCPF(this.value)" />
              </div>
              </div>

              <legend><h3 class="text-center" style="color:#bb0000; text-transform: uppercase;" >Dados de Endereço</h3></legend>


              <div class="form-group">
                <label for="fone" class="col-sm-3 control-label">CEP*</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control cep" id="cep" name="cep" data-mask="00000000" onblur="pesquisacep(this.value);">
                </div>
              </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-3 control-label">Endereço*</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="rua" name="endereco" maxlength="100">
        </div>
      </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-3 control-label">Cidade*</label>
         <div class="col-sm-3">
           <input type="text" class="form-control" id="cidade" name="nm_cidade" maxlength="90">
         </div>
         <label for="inputPassword3" class="col-sm-2 control-label">Bairro*</label>
         <div class="col-sm-3">
           <input type="text" class="form-control" id="bairro" name="nm_bairro" maxlength="90">
         </div>
       </div>
       <form class=""  method="get">


       <div class="form-group">
         <label for="inputPassword3" class="col-sm-3 control-label">Número*</label>
         <div class="col-sm-3">
           <input type="text" class="form-control" id="numerocasa" name="numerocasa" maxlength="30">
         </div>

       <label for="inputPassword3" class="col-sm-2 control-label">Estado*</label>
       <div class="col-sm-1">
         <select class="" name="nm_uf" id="uf">
           <option value="">Selecione</option>
           <option value="AC"name="AC">Acre</option>
           <option value="AL"name="AL">Alagoas</option>
           <option value="AP"name="AP">Amapá</option>
           <option value="AM"name="AM">Amazonas</option>
           <option value="BA"name="BA">Bahia</option>
           <option value="CE"name="CE">Ceará</option>
           <option value="DF"name="DF">Distrito Federal</option>
           <option value="ES"name="ES">Espirito Santo</option>
           <option value="GO"name="GO">Goiás</option>
           <option value="MA"name="MA">Maranhão</option>
           <option value="MS"name="MS">Mato Grosso do Sul</option>
           <option value="MT"name="MT">Mato Grosso</option>
           <option value="MG"name="MG">Minas Gerais</option>
           <option value="PA" name="PA">Pará</option>
           <option value="PB" name="PB">Paraíba</option>
           <option value="PR"name="PR">Paraná</option>
           <option value="PE"name="PE">Pernambuco</option>
           <option value="PI"name="PI">Piauí</option>
           <option value="RJ"name="RJ">Rio de Janeiro</option>
           <option value="RN"name="RN">Rio Grande do Norte</option>
           <option value="RS"name="RS">Rio Grande do Sul</option>
           <option value="RO"name="RO">Rondônia</option>
           <option value="RR"name="RR">Roraima</option>
           <option value="SC"name="SC">Santa Catarina</option>
           <option value="SP" name="SP">São Paulo</option>
           <option value="SE"name="SE">Sergipe</option>
           <option value="TO"name="TO">Tocantins</option>
         </select>
</div>
</div>


          <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Ponto de referência</label>
         <div class="col-sm-3">
           <input type="text" class="form-control" id="referencia" name="referencia" maxlength="90">
         </div>

         <label for="inputPassword3" class="col-sm-2 control-label">Complemento</label>
         <div class="col-sm-3">
           <input type="text" class="form-control" id="complemento" name="complemento" maxlength="30">
         </div>
       </div>

      <div class="form-group">
        <label for="fone" class="col-sm-3 control-label">Telefone para contato*</label>
        <div class="col-sm-3">
          <input type="text" class="form-control phone_with_ddd" id="telefone" name="telefone" data-mask="(00)000000000">
        </div>
        <label for="fone" class="col-sm-2 control-label">Telefone celular</label>
        <div class="col-sm-3 ">
          <input type="text" class="form-control phone_sp" id="celular" name="celular" data-mask="(00)000000000">
        </div>
        </div>
        <legend><h3 class="text-center" style="color:#bb0000; text-transform: uppercase;" >Dados de Login</h3></legend>

        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="email" id="email" maxlength="100">
          </div>
        </div>

        <div class="form-group" id="f1" onsubmit="return validarSenha(this);">
          <label class="col-sm-3 control-label">Senha*</label>
          <div class="col-sm-3">
            <input type="password" class="form-control" name="senha" id="senha" maxlength="50">
            <!-- <meter value="0" id="mtSenha" max="100"></meter> -->
          </div>
          <label class="col-sm-2 control-label">Confirmar senha*</label>
          <div class="col-sm-3">
            <input type="password" class="form-control" id="senha2" maxlength="50" >
          </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="status-msg-senha" id="status-msg-senha">
          </div>
        </div>

        <div class="col-sm-push-4 col-sm-7">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" id="checkbox"> Aceito termos e condições
          </div>

        <div class="col-md-6 col-md-offset-3">
          <div class="status-msg" id="status-msg">
          </div>

        </div>

         <div class="col-sm-push-5 col-sm-8">
          <input type="submit" name="Submit" value="Cadastrar" class="initial2 btn btn-default btn-lg" onClick="validarSenha()">
        </div>
      </div>
    </div>

  </div><!--/.table-->
  </form>



<!--CONTAINER, ROW  -->

  </div>
</div>
<section style="padding: 30px;">

</section>
<!-- FOOOTER -->
<?php include("partials/footer.php");?>
<!-- </footer> -->


<!-- /.container -->

</body>

</html>
