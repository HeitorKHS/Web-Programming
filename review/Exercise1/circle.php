<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="circle">
        <input type="submit" value="calcular">
    </form>

    <?php
        if(!empty($_POST['circle']))
        {
            $raio = $_POST['circle'];
            $area = 3.14 * ($raio * $raio);
            echo "Area of circle: ".$area;
        }
    ?>

</body>
</html>