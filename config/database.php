<?php
    //Config connection
    $host     =  "localhost";
    $port     =  "5432"; //puerto de la BD en postgres
    $dbname   =  "schoolar"; // base de datos
    $user     =  "postgres";
    $password =  "xisdannylm";

    //Create connection.
    //Los que no tienen simbolo de $ son parametros, los que si tiene son variables 
    //y se modifican arriba.
    $conn = pg_connect("
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password = $password
    ");

    if(!$conn){
        die("Connection error: " . preg_last_error());

    }else{
        echo "Success connection";
    }

?>