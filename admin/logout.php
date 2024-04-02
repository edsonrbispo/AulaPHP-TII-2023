<?php

session_start();

//Destruir Session
session_destroy();

if(isset($_COOKIE['lembrar'])){
  setcookie("lembrar", "", time() - 3600, "/");
}

//Redirecionar para tela de login
header("Location:login.php");
exit;

