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
        <input type="number" name="percentage" step="0.1">
        <label for="parcel">Parcel: </label>
        <input type="number" name="parcel">
        <input type="submit" value="calculator">
    </form>
    <table>
        <thead>
            <tr>
                <th>Parcela</th>
                <th>Vlr Parcela</th>
                <th>Amortização</th>
                <th>Juros</th>
                <th>Sdo devedor</th>
            </tr>
        </thead>
    <tbody>
        <?php
            if(isset($_SESSION['result']))
            {
                foreach($_SESSION['result'] as $row)
                {
                    echo '<tr>';
                    foreach($row as $col)
                        echo '<td>'.$col.'</td>';
                    echo '</tr>';
                }
                echo "<tr><td>Total: ".$_SESSION['juros']."</td></tr>";
            }
        ?> 
    </tbody>
    </table>
    

</body>
</html>