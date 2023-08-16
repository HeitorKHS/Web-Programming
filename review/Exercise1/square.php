<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="side">
        <input type="submit" value="calcular">
    </form>

    <?php
        if(!empty($_POST['side']))
        {
            $side = $_POST['side'];
            $area = $side * $side;
            echo "Area of square: ".$area;
        }
    ?>

</body>
</html>