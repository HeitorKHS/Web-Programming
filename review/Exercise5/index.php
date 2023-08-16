<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./calculator.php">
        <input type="number" name="financedAmount">
        <input type="number" name="percentage">
        <input type="submit" value="parcel">
    </form>

</body>
</html>