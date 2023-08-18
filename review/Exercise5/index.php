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
        <label for="financedAmount">Financed Amount: </label>
        <input type="number" name="financedAmount">
        <label for="percentage">Interest percentage: </label>
        <input type="number" name="percentage">
        <label for="parcel">Parcel: </label>
        <input type="number" name="parcel">
        <input type="submit" value="calculator">
    </form>
    <?php

    ?>

</body>
</html>