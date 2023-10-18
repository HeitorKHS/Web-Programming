<?php

    require_once("connectionBD.php");

    if(isset($_POST["code"]))
    {
        $code = $_POST["code"];
        $name = $_POST["name"];
        $telephone = $_POST["telephone"];

        //Create object Database
        $BD = new Database("localhost", "clientes","root","");

        $SQLcommand = "UPDATE cliente SET name='$name', telephone='$telephone' WHERE code='$code'";
        if ($BD->executeCommands($SQLcommand))
        {
            echo "Success";
        }
        else
        {
            echo "error";
        }
    }

?>

<a href="index.php">Return</a>