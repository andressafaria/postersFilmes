<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
 
                //Função que retorna o dia da semana! 
                
                //array guarda a sequencia de dias da semana 
                $dia_da_semana = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado");
                
                //função propria do php que retorna o dia, porem retorna em ingles...
                $num_dia = date('w');
                
                //então pegamos o array na posição $num_dia (variavel que contem a funçao date):
                $dia_extenso = $dia_da_semana[$num_dia];
                
                //exibindo na tela: função date retornando a data, função date retornando a hora, função getenv retorna o ip:
                echo $dia_extenso.", ".date("d/m/Y").", ".date("H:i");

?>
</body>
</html>