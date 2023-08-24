<?php
    
    require "./class.php";

    $rectangle = new Rectangle(1,1);

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
        <input type="number" name="width" >
        <p>Digite a altura: </p>
        <input type="number" name="heigth">
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['width']) && isset($_POST['heigth']))
        {
            $rectangle->setWidth($_POST['width']);
            $rectangle->setHeight($_POST['heigth']);
            echo "Area: ".$rectangle->calculatorArea()."</br>";
            echo "Perimeter: ".$rectangle->calculatorPerimeter()."</br>";
            echo "Is square or not: ".$rectangle->isSquare();
        }
    ?>
</body>
</html>