<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
<?php

include_once ("partials/conexao.php");
 $arquivo = $_FILES['im_produto']['name'];
//Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'img/produtos/';

//Tamanho máximo do arquivo em Bytes
$_UP['tamanho'] = 1024*1024*100; //5mb

//Array com a extensões permitidas
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

//Renomeiar
$_UP['renomeia'] = false;

//Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
if($_FILES['im_produto']['error'] != 0){
  die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['im_produto']['error']]);
  exit; //Para a execução do script
}

//Faz a verificação da extensao do arquivo
$extensao = strtolower(end(explode('.', $_FILES['im_produto']['name'])));
if(array_search($extensao, $_UP['extensoes'])=== false){
  echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lojanaldas/cadastro-produtos.php'>
    <script type=\"text/javascript\">
      alert(\"A imagem não foi cadastrada, extensão inválida.\");
    </script>
  ";
}

//Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['im_produto']['size']){
  echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lojanaldas/cadastro-produtos.php'>
    <script type=\"text/javascript\">
      alert(\"Arquivo muito grande.\");
    </script>
  ";
}

//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
else{
  //Primeiro verifica se deve trocar o nome do arquivo
  if($_UP['renomeia'] == true){
    //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
    $nome_final = time().'.jpg';
  }else{
    //mantem o nome original do arquivo
    $nome_final = $_FILES['im_produto']['name'];
  }
  //Verificar se é possivel mover o arquivo para a pasta escolhida
  if(move_uploaded_file($_FILES['im_produto']['tmp_name'], $_UP['pasta']. $nome_final)){
    //Upload efetuado com sucesso, exibe a mensagem
    $sql_cadastra = mysql_query("INSERT INTO tb_imagem(
    imagem) VALUES('$nome_final')");

    echo "
      <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lojanaldas/cadastro-produtos.php'>
      <script type=\"text/javascript\">
        alert(\"Cadastrado com Sucesso.\");
      </script>
    ";
  }
  else{
//   Upload não efetuado com sucesso, exibe a mensagem
    echo "
      <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lojanaldas/cadastro-produtos.php'>
      <script type=\"text/javascript\">
        alert(\"Imagem não foi cadastrada, tente novamente.\");
      </script>
    ";
   }
}

$nm_produto = $_POST['nm_produto'];
$qt_produto = $_POST['qt_produto'];
$vl_produto = $_POST['vl_produto'];
$nm_tamanho = $_POST['nm_tamanho'];
$ds_produto = $_POST['ds_produto'];
$ds_especificacoes = $_POST['ds_especificacoes'];
$nm_categoria = $_POST['nm_categoria'];

$sql_busca_img = mysql_query (
	"SELECT * from tb_imagem order by id_imagem desc limit 1");

// SELECT * FROM [TABELA] ORDER BY [CAMPO] DESC LIMIT 1
$reg = mysql_fetch_assoc($sql_busca_img) or die(mysql_error());
$id = $reg['id_imagem'];
// echo "<script type=\"text/javascript\">
// alert(\"$reg["'id'"]\");
// </script>
// ";

$sql_cadastra = mysql_query (
	"INSERT INTO tb_produto (id_imagem, nm_produto, qt_produto, vl_produto,
   ds_produto, ds_especificacoes, nm_categoria)
  VALUES ('$id','$nm_produto', '$qt_produto', '$vl_produto', '$ds_produto',
    '$ds_especificacoes','$nm_categoria')");


 ?>

 	</body>
 </html>
