 <?php include "../conn.php"; 
	  include 'cabecalho.php';	  

//aqui estou recuperando os dados do formulário vindos da página NovaCategoia.php
 
  $nome = $_POST['nome'];
	  
//Verifico se a ação for diferente de vazio, ou seja, se clicar em cadastrar insiro no banco	  
  if(!empty($_POST['submit'])){
	  
   		mysql_query("insert into categorias(categoria) values ('".$nome."')");
    		
// Em seguida apresento a mensagem de sucesso, caso tenha sido cadastrado		
		echo "<script>alert('Categoria cadastrada com sucesso!');location.href='lst_categoria.php';</script>";
			 
	
	}
?>