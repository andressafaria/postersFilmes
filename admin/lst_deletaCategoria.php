<?php
	 

       $id = $_GET['id_categoria'];

 mysql_query("DELETE FROM categorias WHERE id_categoria=".$id);

echo "<script>alert('Deletado com sucesso!');location.href='lst_categoria.php';</script>";



//selecionando a tabela categoria
	$sql= mysql_query("select * from categorias where id_categoria =".$id);
	$coluna = mysql_fetch_array($sql);
	

?>