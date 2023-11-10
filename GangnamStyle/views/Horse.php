<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD horses</title>
</head>
<body>
    <h1>CRUD horses</h1>
    <ul>
        <?php
        
            foreach($horses as $horse)
            {
                ?>
                    <li>
                        <?php echo $horse['name'] ?> - <?= $horse['race']?> - <?= $horse['color']?> - <?= $horse['sex']?>
                        <a href = 'alterHorse.php?id=<?=$horse['id']?>'>[alter]</a>
                        <a href = 'index.php?action=delete&id=<?=$horse['id']?>'>[delete]</a>
                    </li>
                <?php
            }
        
        ?>
    </ul>

    <h2>Add new horse</h2>
    <form action="index.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" require>
        <label for="race">Race: </label>
        <input type="text" name="race" id="race" require>
        <label for="color">Color: </label>
        <input type="text" name="color" id="color" require>
        <label for="sex">Sex: </label>
        <input type="text" name="sex" id="sex" require>
        <button type="submit" name="action" value="insert">Add User</button>
    </form>
</body>
</html>