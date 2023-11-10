<?php

class HorseModel
{

    private $connection; // Type connectionBD

    public function __construct($database)
    {
        $this->connection = $database;
    }

    public function getHorses()
    {
        return $this->connection->selectSQL("SELECT * from horse");
    }

    public function getHorseID($id)
    {
        return $this->connection->selectSQL("SELECT * from horse where id = '$id'");
    }

    public function addHorse($name, $race, $color, $sex)
    {
        $SQLcommand = "INSERT into horse(name, race, color, sex) values('$name','$race','$color','$sex')";
        return $this->connection->executeCommands($SQLcommand);
    }

    public function alterHorse($id, $name, $race, $color, $sex)
    {
        $SQLcommand = "UPDATE horse set name='$name', race='$race', color='$color', sex='$sex' where id='$id'";
        return $this->connection->executeCommands($SQLcommand);
    }

    public function deleteHorse($id)
    {
        $SQLcommand = "DELETE from horse where id='$id'";
        return $this->connection->executeCommands($SQLcommand);
    }

}

?>