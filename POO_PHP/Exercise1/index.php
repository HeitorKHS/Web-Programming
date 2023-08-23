<?php
    
    require "./class.php";

    $rectangle = new Rectangle();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <form method="post">
        <p>Digite a largura: </p>
        <input id="width" type="number" name="width">
        <p>Digite a altura: </p>
        <input id="height" type="number" name="heigth">
        <input type="submit">
    </form>
    <?php
        $rectangle->setWidth($_POST['width']);
        $rectangle->setHeight($_POST['heigth']);
        echo "".$rectangle->getWidth();
        echo "".$rectangle->getHeight();
    ?>
</body>
</html>