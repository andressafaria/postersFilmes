 <!-- esta pagina mostra o resultado das categorias cadastradas no banco e 
 aprensenta as opções de editar, excluir e adicionar uma nova categoria -->
 
<?php require '../conn.php';
	  include 'cabecalho.php';
	  
 /* quando for deletar, executa as linhas abaixo 

 if($_GET['acao']=="deleta") {

$id = $_GET['id_subcategoria'];

 pg_query("DELETE FROM subcategorias WHERE id_subcategoria=".$id);

echo "<script>alert('Sub- Seção deletada com sucesso!');location.href='lst_subcategoria.php';</script>";

}*/

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>teste</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>			
<!--inicio div fundo --> <div id="fundo"   >
<!--inicio div tabzine--><div id="tabzine" >				
<!--inicio div content--><div id="content" >
<!--inicio div cover-->  <div class="cover">
  <table width="99%" border="0">
    <tr>
      <td width="35%"><b>
        <center>Categoria: </center></b>
	  </td>
      <td width="36%"><b>
        <center> Sub-Categoria:</center></b>
	  </td>
      <td colspan="3">
	  	<center> <b>A&ccedil;&atilde;o</b></center>
	  </td>
    </tr>
	<tr>
	<td colspan="2"></td>
	<td colspan="3"><div align="center"><a href="NovaSubCategoria.php">Inserir nova Sub-Categoria</a> </div></td>
      </tr>
    <?php 
			//query que seleciona a tabela de categorias e subcategorias
			$sql = mysql_query("SELECT c.*, s.* from categorias c, subcategorias s where c.id_categoria = s.id_categoria order by c.categoria");
			
			// laço feito para mostrar todos as categorias e subcategorias cadastradas
			while($coluna = mysql_fetch_array($sql)){ ?>
    <tr>
      <td><?php echo $coluna["categoria"]; ?></td>
	  <td><?php echo $coluna["subcategoria"]; ?> </td>
      <td width="15%"><a href="lst_alterarSubCategoria.php?id_subcategoria= <?php echo $coluna["id_subcategoria"];?>">Editar</a></td>
      <td width="14%"><a href="deleta_subcategoria.php?id_subcategoria=<?php echo $coluna["id_subcategoria"];?>">Excluir</a></td>
    </tr>
    <?php } ?>
    
  </table>
  <!-- fim da div cover -->
</div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>

			<?php include 'menu.php'; ?>							   		

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>


		   <?php include 'rodape.php'; ?>



</body>
</html>
