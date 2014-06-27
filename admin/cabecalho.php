<? //session_start(); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GRAECO</title>
</head>

<body>
<div id="cabecalho">
	<div id="top">
		<div class="texto">
				<h1>Filmes e cia</h1>
				<h2>Gerenciador de filmes Online</h2>
		</div>
			<h2 align="right">Area Administrativa</h2><br />
			
	<?php 
	
	//Função que retorna o dia da semana! 
	
	//array guarda a sequencia de dias da semana 
	$dia_da_semana = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado");
	
	//função propria do php que retorna o dia, porem retorna em ingles...
	$num_dia =date(w);
	
	//então pegamos o array na posição $num_dia (variavel que contem a funçao date):
	$dia_extenso = $dia_da_semana[$num_dia];
	
	//exibindo na tela: função date retornando a data, função date retornando a hora, função getenv retorna o ip:
	echo $dia_extenso.", ".date("d/m/Y").", ".date("H:i").", Ip: ".getenv("REMOTE_ADDR");
	
	
	
	?>
					<!--Fim da logo-->
	</div>
				<!--fim da div top -->
				
			<!--Menu-->
	<div id="barra">
		<div id="menu">
	<center><font color="#FFFFFF"> </font></center>
	
	
	</div>
	</div>
	<div id="barra2">
	
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="usuarios.php">Administradores do Site</a></li>
				<li><a href="#">Central de Ajuda</a></li>
				<li><a href="sair.php">Sair</a></li>
				
				
			</ul>
			
			<!--campo de busca-->
			
			<div id="search">
				<form method="get"  >
					<input id="s" class="rounded" type="text" name="s" />
				</form>
			</div> <!--fim do campo de busca -->
		
		</div><!--Fim da div menu-->
	</div><!--Fim da div barra2-->
<!-- fica a div cabecalho sem fechar-->	

<?

// Verifica se existe os dados da sessão de login
if(isset($_SESSION["id_adm"]) || !isset($_SESSION["nome"]))
{
	echo "Bem vindo(a) ";
	echo "<a href =sair.php> sair</a>";
}



?>
</body>
</html>
