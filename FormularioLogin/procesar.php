<?php
$user="valor";
$password="valor"
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        if(!empty($_POST['User'])){
            $user=$_POST['User'];
        }else{
            $user="requerido";
        }
        $password=!empty($_POST['password']) ? $_POST['password'] : "requerido";
        $edad=!empty($_POST['edad']) ? $_POST['edad'] : "requerido";

        if($user=="requerido" || $password=="requerido" || $edad=="requerido"){
            echo "Algunos campos son requeridos verifique su formulario";
        }else{
            echo "Se ha iniciado sesion :)". htmlspecialchars($user)."<br>";
        }
    }
?>