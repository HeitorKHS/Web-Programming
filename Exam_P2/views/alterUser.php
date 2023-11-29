<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter Client</title>
</head>
<body>
    
    <h1>Alter Client</h1>   

    <form action="index.php" method="POST">
        <label for="code">ID:"<?php echo $_GET['id'] ?>"</label>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="telephone">CPF:</label>
        <input type="text" name="cpf">

        <label for="telephone">Password:</label>
        <input type="text" name="password">

        <button type="submit" name="action" value="alter">Edit Client</button>
    </form>

</body>
</html>