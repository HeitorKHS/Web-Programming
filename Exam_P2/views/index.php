<?php

require_once("../controllers/UserController.php");
require_once("../models/UserModel.php");
require_once("../connectionBD.php");


$bd = new Database("localhost","users","root","");
$model = new UserModel($bd);
$controller = new UserController($model);

if(isset($_POST['action']) && $_POST['action'] == 'insert')
{
    $controller->addUser($_POST['name'], $_POST['telephone'], $_POST['email']);
    header('Location: index.php');
}

if(isset($_GET['action']) && $_GET['action'] == 'payment')
$controller->alterPayment($_GET['id'],$_GET['payment']);

$controller->usersList();

?>