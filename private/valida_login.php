<?php 
  session_start();
  $usuario_autenticado=false;
   $usuarios_app = array(
        array('id'=>1,'email'=>'teste@teste.com','senha' => '123455'),
        array('id'=>2,'email'=>'teste2@teste.com','senha' => '1234555'),
    );
   foreach ($usuarios_app as $user){
       if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']){
           $usuario_autenticado=true;

       }
   }
   if($usuario_autenticado){
       header('Location: home.php');
       $_SESSION['autenticado'] = 'SIM';
   }
   else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
   }
    

?>