<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="height">
        <input type="number" name="base">
        <input type="submit" value="calcular">
    </form>

    <?php
        if(!empty($_POST['height']) && !empty($_POST['base']))
        {
            $height = $_POST['height'];
            $base = $_POST['base'];
            $area = $height * $base;
            echo "Area of rectangle: ".$area;
        }
    ?>

</body>
</html>