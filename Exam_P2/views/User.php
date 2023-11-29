<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam P2</title>
</head>
<body>
    <h1>Exam P2</h1>
    <table>
    <tr>
        <td>Name:</td>
        <td>Telephone:</td>
        <td>Email:</td>
        <td>Payment:</td>
        <td></td>
        <td></td>
    </tr>
        <?php
        
            foreach($users as $user)
            {
                ?>
                    <tr>
                        <td><?php echo $user['name'] ?></td>
                        <td><?= $user['telephone']?></td>
                        <td><?= $user['email']?></td>
                        <td><a href = 'index.php?action=payment&id=<?=$user['id']?>&payment=<?=$user['payment']?>'><?= $user['payment']?></a></td>
                        <td><a>[alter]</a></td>
                        <td><a>[delete]</a></td>        
                    </tr>
                <?php
            }
        
        ?>
    </ul>
        </table>

    <h2>Add new user</h2>
    <form action="index.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" require>
        <label for="Telephone">Telephone: </label>
        <input type="text" name="telephone" id="telephone" require>
        <label for="Email">Email: </label>
        <input type="text" name="email" id="email" require>
        <button type="submit" name="action" value="insert">Add User</button>
    </form>
</body>
</html>