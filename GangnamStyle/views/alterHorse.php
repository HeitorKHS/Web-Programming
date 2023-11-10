<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter Horse</title>
</head>
<body>
    
    <h1>Alter Horse</h1>   

    <form action="index.php" method="POST">
        <label for="id">ID:"<?php echo $_GET['id'] ?>"</label>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="race">Race:</label>
        <input type="text" name="race">

        <label for="color">Color:</label>
        <input type="text" name="color">

        <label for="color">Sex:</label>
        <input type="text" name="sex">

        <button type="submit" name="action" value="alter">Edit Client</button>
    </form>

</body>
</html>