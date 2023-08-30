<?php
       
    require "./class.php";
    $calculator = new Calculator();
           
    $calculator->sum(15);
    echo "Sum result: ".$calculator->getResult()."</br>";
    $calculator->subtract(5);
    echo "Subtract result: ".$calculator->getResult()."</br>";
    $calculator->multiplication(2);
    echo "Multiplication result: ".$calculator->getResult()."</br>";
    $calculator->undo();
    echo "Undo action ".$calculator->getResult()."</br>";
    $calculator->potential(2);
    echo "Potential result: ".$calculator->getResult()."</br>";
    $calculator->divide(2);
    echo "Division result: ".$calculator->getResult()."</br>";
    $calculator->percentage(100);
    echo "Percentage result: ".$calculator->getResult()."</br>";
    $calculator->root();
    echo "Root result: ".$calculator->getResult()."</br>";
    $calculator->reset();
    echo "Reset result: ".$calculator->getResult()."</br>";

?>