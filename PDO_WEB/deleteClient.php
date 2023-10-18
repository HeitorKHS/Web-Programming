<?php

    require_once("connectionBD.php");

    if (isset($_GET['code']) && is_numeric($_GET['code']))
    {
        $code = $_GET['code'];

        $BD = new Database("localhost", "clientes","root","");

        $commandSQL = "DELETE from cliente where code=$code";
        if($BD->executeCommands($commandSQL))
        {
            echo "Success";
        }
        else 
        {
            echo "Error";
        }

    }
    else
    {
        echo "Error";
    }

?>