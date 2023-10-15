<?php

require_once('connectionBD.php');

if (isset($_POST['add'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];

    $BD = new Database("localhost", "clientes", "root", "");
    $insertCommand = "Insert into cliente values ($code, '$name', '$telephone')";

    if ($BD->executeCommands($insertCommand) == true) {
        echo "Success !!";
    }
    else {
        echo "Error";
    }      
}


?>

<a href="index.php"> Return </a>
