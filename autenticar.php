<?php
$email = $_POST['email'];
$password = $_POST['password'];

var_dump($email, $password);

if($email=='admin@email.com' && $password=='123456'){
    session_start();
    $_SESSION['msg'] = 'LOGADO';
    $_SESSION['login'] = $email;
header ("Location: principal.php");
} else{
    header("Location: login.php");
}
?>
