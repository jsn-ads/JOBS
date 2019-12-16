<?php

    require 'environment.php';

    if(ENVIRONMENT == 'development'){
        //define caminho projeto , e pode ser utilizado menu
        define("BASE_URL","http://localhost/JOB/PROJETOSWEB/WEventos/");
        $dbname = "mysql:dbname=wfesta;host:127.0.0.1;charset=utf8";
        $dbuser = "adm";
        $dbpass = "229536";
    }else{
        $dbuser;
        $dbname;
        $dbpass;
    }

    global $conn;

    try {

        $conn = new PDO($dbname, $dbuser, $dbpass);

    } catch (PDOExeception $t) {
        echo "ERROR :".$t->getMessage();
    }
?>