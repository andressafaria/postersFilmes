<?php	
		require "../conn.php"; 
  $nome = $_POST['nome'];
	  $email = $_POST['email'];
	  $login = $_POST['login'];
	  $senha=$_POST['senha'];
	  
	  
	  if(!empty($_POST['submit'])){
	  
   			mysql_query("insert into administracao(nome,email,login,senha) values ('".$nome."','".$email."','".$login."','".$senha."')");
    		echo "<script>alert('Administrador cadastrado com sucesso!');location.href='lst_usuario.php';</script>";
			 
	
	}
	
	?>