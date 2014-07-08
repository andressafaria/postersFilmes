<!-- pagina que executa a ação de alterar a categoria selecionada em categoria.php -->

<?php require "../conn.php";
	   include 'cabecalho.php';
	  
	  
	  //trazendo o id
	  $id= $_GET["id_adm"];


	 // se o contador  for maior que zero, ou seja se já existir um id no bd:
	  if(count($_POST)>0){

		$nome = $_POST ["nome"];
		$email = $_POST["email"];
		$login = $_POST["login"];
		$senha=$_POST["senha"];

	//então ele faz a atualização:


	$sql = mysql_query( "update administracao set nome= '$nome', email= '$email', login= '$login', senha= '$senha' where id_adm= $id" ) or die ("Não foi possível alterar os dados");  



		echo "<script>alert('Administrador atualizado com sucesso');location.href='lst_usuario.php';</script>";



    }	  
	 
	//selecionando a tabela administracao
	$sql= mysql_query("select * from administracao where id_adm =".$id);
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

			 <form method="post" action="lst_alterarUsuario.php?id_adm=<?php echo $_GET["id_adm"] ?>">
				 <table><center><b>Alterar Administrador</b></center>
   					<tr>
   						 <td>Nome:</td>
						 <td><input type="text" name="nome" size="50" value="<?php echo $coluna["nome"]?>" /></td>
   					</tr>
					<tr>
   						 <td>Email:</td>
						 <td><input type="text" name="email" size="50" value="<?php echo $coluna["email"]?>" /></td>
   					</tr>
					<tr>
   						 <td>Login:</td>
						 <td><input type="text" name="login" size="50" value="<?php echo $coluna["login"]?>" /></td>
   					</tr>
					<tr>
   						 <td>Senha:</td>
						 <td><input type="text" name="senha" size="50" value="<?php echo $coluna["senha"]?>" /></td>
   					</tr>
   					<tr>
    					<td colspan="2"><center><input type="submit" value="Salvar" /></center></td> 
   					</tr>
				</table>
 			</form><br />
			<a href="lst_usuario.php">Voltar</a>
			
<!-- fim da div cover -->  </div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>

				<?php include 'menu.php'; ?>							   		

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>

				<?php include 'rodape.php'; ?>
				
				

</body>
</html>
