<?php

class UserModel
{

    private $connection; // Type connectionBD

    public function __construct($database)
    {
        $this->connection = $database;
    }

    public function getUsers()
    {
        return $this->connection->selectSQL("SELECT * from user");
    }

    public function getUserID($id)
    {
        return $this->connection->selectSQL("SELECT * from user where id = '$id'");
    }

    public function addUser($name, $cpf, $password)
    {
        $SQLcommand = "INSERT into user(name, password, cpf) values('$name','$password','$cpf')";
        return $this->connection->executeCommands($SQLcommand);
    }

    public function alterUser($id, $name, $cpf, $password)
    {
        $SQLcommand = "UPDATE user set name='$name', password='$password', cpf='$cpf' where id='$id'";
        return $this->connection->executeCommands($SQLcommand);
    }

    public function deleteUser($id)
    {
        $SQLcommand = "DELETE from user where id='$id'";
        return $this->connection->executeCommands($SQLcommand);
    }

}

?>