<?php require "../conn.php"; 
	  include 'cabecalho.php';
	  
	$nome = $_POST['nome'];
	  $id_categoria =$_POST["id_categoria"];
	  
	  
	  if(!empty($_POST['submit'])){
	  	
	  
   			mysql_query ("insert into subcategorias(id_categoria,subcategoria) values ('$id_categoria','$nome')");
    		echo "<script>alert('Sub-Categoria cadastrada com sucesso!');location.href='lst_subcategoria.php';</script>";
			 
	
	}
	
	  
 ?>