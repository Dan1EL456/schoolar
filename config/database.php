<?php
    //Config connection
    $host     =  "aws-0-us-east-1.pooler.supabase.com";
    $port     =  "6543"; //puerto de la BD en postgres
    $dbname   =  "postgres"; // base de datos
    $user     =  "postgres.zivrpepsffdfirtgjexp";
    $password =  "sxabbaseY12vB";

    //credenciales locales
    /*
    $host     =  "localhost";
    $port     =  "5432"; //puerto de la BD en postgres
    $dbname   =  "schoolar"; // base de datos
    $user     =  "postgres";
    $password =  "xisdannylm";
    */

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
        //die("Connection error: " . pg_last_error());

    }else{
        //echo "Success connection";
    }

    //pg_close();

?>