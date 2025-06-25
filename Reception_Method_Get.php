<?php
    /*aquí se recepcionará información
La funcion Get es el envio de informacion a traves de una URL
Que al final estoy recibiendo en un documento html a un documento 
php

*/


    if($_GET){

        $nombre=$_GET['Nombre'];

        echo "Hola ".$nombre;
    }


?>
