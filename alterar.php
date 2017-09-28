<?PHP
include_once("partials/conexao.php");

$CODIGO = $_POST['cd_produto'];
$nm_produto = $_POST['nm_produto'];
$qt_produto = $_POST['qt_produto'];
$vl_produto = $_POST['vl_produto'];
// $im_produto = $_POST['im_produto'];
//oi mane
// $id = "SELECT id_imagem from tb_produto where ";
// $sql_busca_img = mysql_query (
// 	"SELECT imagem from tb_imagem where id_imagem ='".$id."'");
//
// $reg = mysql_fetch_assoc($sql_busca_img) or die(mysql_error());
// $id = $reg['id_imagem'];
// echo "<script type=\"text/javascript\">
// alert(\"$reg["'id'"]\");
// </script>
// ";

$update = mysql_query("UPDATE tb_produto SET nm_produto = '$nm_produto',
                                          qt_produto = '$qt_produto',
										  vl_produto = '$vl_produto'
					   WHERE cd_produto ='$CODIGO'")
 		  or die ("Erro ao inserir dados: " . mysql_error());

// print "Dados atualizado com sucesso. <a href='listar-produtos.php'>Voltar</a>";

echo "<script>
 alert('Alterado com sucesso!');
window.history.go(-1);
</script>";

?>
