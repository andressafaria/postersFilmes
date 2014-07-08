<?php require "../conn.php"; 
	  include 'cabecalho.php';
	  	  
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
 		
	<table>
			<form method="post" action="NovoUsuarioAcao.php">
   		<tr>
    		<td>Nome:</td>
			<td><input type="text" name="nome" size="50" /></td>
    	</tr>
		<tr>
   						 <td>Email:</td>
						 <td><input type="text" name="email" size="50"/></td>
   					</tr>
					<tr>
   						 <td>Login:</td>
						 <td><input type="text" name="login" size="50"/></td>
   					</tr>
					<tr>
   						 <td>Senha:</td>
						 <td><input type="text" name="senha" size="50"/></td>
   					</tr>
   		<tr>
    		<td colspan="2" ><center> <input type="submit" name="submit" value="Cadastrar" align="left" />
      			<input name="reset" type="reset" value="Apagar" /></center>
	    	</td>
  		</tr>
  			</form>
 	</table>
 
			
			<a href="usuarios.php"> Voltar</a>			
			
<!-- fim da div cover -->  </div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>
			
				<?php include 'menu.php'; ?>							   		
	        
<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>

				<?php include 'rodape.php'; ?>
				
</body>
</html>
