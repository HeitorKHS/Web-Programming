<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter Client</title>
</head>
<body>
    
    <h1>Alter Client</h1>

    <?php

    //receive the customer id to be changed by get/post
    require_once("connectionBD.php");


    //check if the customer ID was passed by parameter via url
    if (isset($_GET["code"]) && is_numeric($_GET["code"]))
    {
        $code = $_GET["code"];

        //create the database connection object
        $BD = new Database("localhost", "clientes", "root", "");

        //get customer data
        $user = $BD->selectSQL("select * from cliente where code = $code")[0];

        if($user)
        {
            $code = $user['code'];
            $name = $user['name'];
            $telephone = $user['telephone'];
        ?>
            <form action="editClient.php" method="POST">
                <label for="code">Code:"<?php echo $code ?>"</label>
                <input type="hidden" name="code" value="<?php echo $code ?>">

                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $name ?>">

                <label for="telephone">Telephone:</label>
                <input type="text" name="telephone" value="<?php echo $telephone ?>">

                <button type="submit">Edit Client</button>
            </form>
        <?php
        }
        else
        {
            echo("User not found");
        }
    }
    else
    {
        echo("User not found");
    }

    
    ?>

</body>
</html>