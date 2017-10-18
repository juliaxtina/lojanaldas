
<?php

//session_start inicia a sess�o
if(!isset($_SESSION)){
	session_start();
}

include ("partials/conexao.php");


// tb_usuario
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$dt_nascimento = $_POST['dataNasc'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
// criptografção em 128 bits usando o sha1 
$senha = sha1($_POST['senha']);
//tb endereco
$cep = $_POST['cep'];
$numerocasa = $_POST['numerocasa'];
$complemento = $_POST['complemento'];
$ponto_referencia = $_POST['referencia'];
$cidade = $_POST['nm_cidade'];
$bairro = $_POST['nm_bairro'];
$estado = $_POST['nm_uf'];
$rua = $_POST['endereco'];


// validação de email ja existente 

$sql = mysql_query("SELECT * FROM tb_usuario WHERE email = '".$_POST['email']."'");
if (mysql_num_rows($sql)>=1){

	echo "<meta http-equiv='refresh' content='0; URL=../oculos/cadastro.php'>

	<script type=\"text/javascript\">
	alert(\"O email  ".$_POST['email']." ja é cadastrado !\");
	</script>
	";

	return die;
} else {




$sql = mysql_query ("INSERT INTO tb_endereco
	(cep, rua, complemento, referencia, numerocasa, nm_bairro, sg_uf, nm_cidade)
	VALUES ('$cep', '$rua', '$complemento', '$ponto_referencia', '$numerocasa', '$bairro',
		 '$estado', '$cidade')
");

$sql_busca_end = mysql_query (
	"SELECT * from tb_endereco order by cd_end desc limit 1");

// SELECT * FROM [TABELA] ORDER BY [CAMPO] DESC LIMIT 1
$reg = mysql_fetch_assoc($sql_busca_end) or die(mysql_error());
$id = $reg['cd_end'];

$sql2 = mysql_query ("INSERT INTO tb_usuario
	(cd_end, nome, sobrenome, sexo, dataNasc, cpf, telefone, celular, email, senha)
	VALUES ('$id','$nome', '$sobrenome','$sexo', '$dt_nascimento', '$cpf','$telefone', '$celular',
		'$email', '$senha')
 	");


//$string = '$senha';
//$codificada = md5($string);
//echo "Resultado da codificação usando md5: " . $codificada;




// //  if ($sql && $sql2) {
echo "<script>
alert('Cadastrado com sucesso!');
window.history.go(-1);
</script>";
header('location:login.php');

} // aqui nessa chave acaba a validação de email ja existente 
 //
// else {
// 	"<script>
// alert('Ocorreu um erro, Tente novamente!');
// window.history.go(-1);
// </script>";
// }



 ?>
