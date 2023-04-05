<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

    if ($_GET['parametros']!="") {
        $acargar = "base.php";
        $parametros = explode("/", $_GET['parametros']);
        switch ($parametros[0]) {
            case "":
                $acargar = "base.php";
                break;
            case "email":
                $acargar = "_email.php";
                break;
            default:
                $acargar = "base.php";
        }
        include($acargar);
    } else {
        include('base.php');
    }
?>