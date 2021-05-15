<?php
echo '<pre>';
print_r($_GET);
echo '</pre>';

$arquivo=fopen('arquivo.txt','a');
$titulo =str_replace('#','-',$_GET['titulo']);
$categoria =str_replace('#','-',$_GET['categoria']);
$descricao =str_replace('#','-',$_GET['descricao']);

$texto = $_GET['titulo'].'#'.$_GET['categoria'].'#'.$_GET['descricao'];

fwrite($arquivo, $texto);

fclose($arquivo);

echo $texto;

header("location:abrir_chamado.php");

?>