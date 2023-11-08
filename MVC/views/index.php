<?php

require_once("../controllers/UserController.php");
require_once("../models/UserModel.php");
require_once("../connectionBD.php");


$bd = new Database("localhost","users","root","");
$model = new UserModel($bd);
$controller = new UserController($model);

if(isset($_POST['action']) && $_POST['action'] == 'insert')
{
    $controller->addUser($_POST['name'], $_POST['cpf'], $_POST['password']);
    header('Location: index.php');
}

if(isset($_POST['action']) && $_POST['action'] == 'alter')
$controller->alterUser($_POST['id'], $_POST['name'], $_POST['cpf'], $_POST['password']);

if(isset($_GET['action']) && $_GET['action'] == 'delete')
$controller->deleteUser($_GET['id']);


$controller->usersList();

?>