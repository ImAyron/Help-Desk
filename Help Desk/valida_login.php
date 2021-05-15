<?php



require_once"validador.php";


$usuario_autenticado = false;
$usuarios_app = array (

    array('email'=>'adm@teste.com.br', 'senha' => '123456'),
    array('email'=>'user@teste.com.br', 'senha' => 'abcd')

);

foreach($usuarios_app as $user){

 
    if($user['email'] == $_GET['email'] &&  $user['senha'] == $_GET['senha']){

        $usuario_autenticado=true;

    }

}
if($usuario_autenticado==true){

    echo 'Usuario Autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location:home.php');
}
else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location:index.php?login=erro');
}

?>