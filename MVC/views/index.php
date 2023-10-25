<?php

require_once("../controllers/UserController.php");
require_once("../models/UserModel.php");
require_once("../connectionBD.php");


$bd = new Database("localhost","users","root","");
$model = new UserModel($bd);
$controller = new UserController($model);
$controller->usersList();
?>