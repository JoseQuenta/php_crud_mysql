<?php

//sesion start es para que se mantenga la sesion activa, si no se pone no se puede guardar nada en la base de datos. Ademas se debe poner en todos los archivos que se quiera guardar algo en la base de datos. 
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

if (isset($conn)) {
    echo 'DB is connected';
}

?>