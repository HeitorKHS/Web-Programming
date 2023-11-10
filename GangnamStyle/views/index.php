<?php

require_once("../controllers/HorseController.php");
require_once("../models/HorseModel.php");
require_once("../connectionBD.php");


$bd = new Database("localhost","horses","root","");
$model = new HorseModel($bd);
$controller = new HorseController($model);

if(isset($_POST['action']) && $_POST['action'] == 'insert')
{
    $controller->addHorse($_POST['name'], $_POST['race'], $_POST['color'], $_POST['sex']);
    header('Location: index.php');
}

if(isset($_POST['action']) && $_POST['action'] == 'alter')
$controller->alterHorse($_POST['id'], $_POST['name'], $_POST['race'], $_POST['color'], $_POST['sex']);

if(isset($_GET['action']) && $_GET['action'] == 'delete')
$controller->deleteHorse($_GET['id']);


$controller->horsesList();

?>