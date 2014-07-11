 <!-- esta pagina mostra o resultado das categorias cadastradas no banco e 
 aprensenta as opções de editar, excluir e adicionar uma nova categoria -->
 
<?php require '../conn.php';
	  include 'cabecalho.php';
	  
 /* quando for deletar, executa as linhas abaixo 

if($_GET["acao"]=="deleta") {

$id = $_GET['id_filme'];

 pg_query("DELETE FROM filmes WHERE id_filme=".$id);

echo "<script>alert('Produto deletado com sucesso!');location.href='lst_filmes.php';</script>";

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
 <center><b>Filmes</b></center>
  <table width="99%" border="0">
 
    <tr>
      <td width="40%"><b>
        <center>Categorias/Sub-Categorias: </center></b>
	  </td>
      <td width="40%"><b>
        <center> Filmes:</center></b>
	  </td>	  
      <td colspan="4">
	  	<center> <b>A&ccedil;&atilde;o</b></center>
	  </td>
    </tr>
	 <tr>
	<td colspan="2"></td>
	<td width="33%" colspan="5"><div align="center"><a href="NovoFilme.php"> Novo Filme</a> </div></td>
      </tr>
    <?php 
	
	$sql = mysql_query("SELECT CAT.nome, CAT.id,
SUBCAT.nome, SUBCAT.id,
F.nome, F.id
FROM CATEGORIA CAT
INNER JOIN SUBCATEGORIA SUBCAT
ON CAT.id_categoria = SUBCAT.id_categoria
INNER JOIN FILME F  ON F.id_subcategoria = SUBCAT.id_subcategoria AND F.id_categoria = CAT.id_categoria");
	
	
			//query que seleciona a tabela de categorias e subcategorias
			//$sql = mysql_query("SELECT f.*,c.*, s.* from filmes f, categorias c, subcategorias s where p.id_categoria = c.id_categoria  and p.id_subcategoria = s.id_subcategoria order by f.filme");
		//	$sql = mysql_query("SELECT c.*, s.* from categorias c, subcategorias s where c.id_categoria = s.id_categoria order by c.categoria");
			
			
			// laço feito para mostrar todos as categorias,subcategorias e filmes cadastrados
			while($coluna = mysql_fetch_array($sql)){ ?>
    <tr>
      <td><?php echo $coluna["categoria"]." / ".$coluna["subcategoria"]; ?></td>
	  <td><?php  echo $coluna["filme"]; ?> </td>
      <td width="12%"><a href="AlterarProduto.php?id_produto= <?php echo $coluna["id_filme"];?>"> Editar</a></td>
      <td width="12%"><a href="?acao=deleta&id_produto=<?php echo $coluna["id_filme"] ;?>">Excluir</a></td>
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
