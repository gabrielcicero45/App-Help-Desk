<?php
session_start();
$titulo = str_replace('#','-',$_POST['titulo']);
$categoria =str_replace('#','-',$_POST['categoria']);
$decricao =str_replace('#','-',$_POST['descricao']);
$arquivo=fopen('private/arquivo.txt','a');
$texto =$titulo.'#'.$categoria.'#'.$decricao. PHP_EOL;
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location: abrir_chamado.php');
?>