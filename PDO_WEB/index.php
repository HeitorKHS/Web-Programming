<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Client</title>
</head>
<body>
    <h1>CRUD Client</h1>
    <br><br>
    
    <?php

        require_once("connectionBD.php");

        //List clients
        $BD = new Database("localhost", "clientes", "root", "");
        $clients = $BD->selectSQL("Select * from cliente");

        echo "<h2>Customers</h2>";
        foreach ($clients as $client) {
            echo $client['code']." - ".$client['name']." - ".$client['telephone']."<br>";
        }

    ?>

    <br><br>

    
    <form action="addClient.php" method="post">
        <label for="code">Code</label>
        <input type="text" name="code" id="code" required><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required><br>
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone" id="telephone" required><br>
        <input type="submit" value="add" name="add">
    </form>

</body>
</html>