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

    public function addUser($name, $telephone, $email, $payment)
    {
        $SQLcommand = "INSERT into user(name, telephone, email, payment) values('$name','$telephone','$email', '$payment')";
        return $this->connection->executeCommands($SQLcommand);
    }

    public function alterPayment($id, $payment)
    {
        $SQLcommand = "UPDATE user set payment='$payment' where id='$id'";
        return $this->connection->executeCommands($SQLcommand);
    }

}

?>