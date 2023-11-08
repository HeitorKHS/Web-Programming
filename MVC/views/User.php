<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD users</title>
</head>
<body>
    <h1>CRUD users</h1>
    <ul>
        <?php
        
            foreach($users as $user)
            {
                ?>
                    <li>
                        <?php echo $user['name'] ?> - <?= $user['cpf']?>-
                        <a href = 'alterUser.php?id=<?=$user['id']?>'>[alter]</a>
                        <a href = 'index.php?action=delete&id=<?=$user['id']?>'>[delete]</a>
                    </li>
                <?php
            }
        
        ?>
    </ul>

    <h2>Add new user</h2>
    <form action="index.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" require>
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" require>
        <label for="password">Password: </label>
        <input type="text" name="password" id="password" require>
        <button type="submit" name="action" value="insert">Add User</button>
    </form>
</body>
</html>