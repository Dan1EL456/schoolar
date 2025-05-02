<?php
    session_start();
    //destruye la sesión y lleva a login
    session_destroy();

    header('Refresh:0; url=http://localhost/schoolar/src/signin.html');
?>