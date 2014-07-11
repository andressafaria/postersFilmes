<!-- pagina que executa a ação de alterar a categoria selecionada em categoria.php -->

<?php require "../conn.php";
	   include 'cabecalho.php';


     // $id_categoria= $_GET["id_categoria"]; echo "$id_categoria";
	  $id= $_GET["id_subcategoria"];
	  
	 // se o contador  for maior que zero, ou seja se já existir um id no bd:
	  if(count($_POST)>0){

		$nome = $_POST ["nome"];

	//então ele faz a atualização:
	
	mysql_query("update subcategorias set subcategoria='".$nome."' where id_subcategoria=".$id);

		
		echo "<script>alert('Sub-Categoria atualizada com sucesso');location.href='lst_subcategoria.php';</script>";






	 }

	//selecionando a tabela categoria
	$sql = mysql_query("SELECT c.*, s.* from categorias c, subcategorias s where c.id_categoria = s.id_categoria and id_subcategoria = $id");
	$coluna = mysql_fetch_array($sql);



	



	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<!--inicio div fundo --> <div id="fundo"   >
<!--inicio div tabzine--><div id="tabzine" >
<!--inicio div content--><div id="content" >
<!--inicio div cover-->  <div class="cover">

			 <form method="post" action="lst_alterarSubCategoria.php?id_categoria=<?php echo $coluna["id_categoria"]."&id_subcategoria=".$coluna["id_subcategoria"]?>;">
				 <table><center><b>Alterar Sub-Categoria: </b></center>
   						<tr>
    		<td>Categoria:</td>
			<td><select name="id_categoria" value="id_categoria">
					<option value="id_categoria"><?php echo $coluna["categoria"]?> </option>
					<?php
					/*$sql_cat = "select * from categorias order by categoria";
						$result = mysql_query($sql_cat);

						while ($registro = mysql_fetch_array($result)){

							$valor = $registro["id_categoria"];

							if($id_cat == $valor){
								$selecionado ="selected";

							}else{
							$selecionado = "";

							print"<option value = \"$valor\" $selecionado > $registro[categoria] </option>";
							}
						}

					*/?>
				</select>
			</td>
		</tr>
					<tr>
   						 <td>Nome:</td>
						 <td><input type="text" name="nome" size="50" value="<?php echo $coluna["subcategoria"]?>" /></td>
   					</tr>
   					<tr>
    					<td colspan="2"><center><input type="submit" value="Salvar" /></center></td>
   					</tr>
				</table>
 			</form><br />
			<a href="lst_subcategoria.php">Voltar</a>

<!-- fim da div cover -->  </div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>

				<?php include 'menu.php'; ?>

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>

				<?php include 'rodape.php'; ?>


<!-- ps: cabeçalho duplicado, corrigir essa falha depois -->
</body>
</html>
