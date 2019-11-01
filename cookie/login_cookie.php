

<?php 

$user = "adm";
$pass = "159";

if($_POST['nombre'] == $user && $_POST['contra'] == $pass) {
    setcookie('nombreUsuario',$_POST['nombre'], time()+60*60*24*365);
    setcookie('password', $_POST['contra'], time()+60*60*24*365);
    echo "Cookie creada";
}
else {
    echo "Usuario o contraseña incorrecta";   
}


?>