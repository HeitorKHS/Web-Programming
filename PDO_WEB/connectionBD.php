<?php

class Database
{

    private $connection;
    
    //Create connection to the database
    function __construct($host, $databaseName, $userName, $password)
    {

        try
        {
              $this->connection = new PDO("mysql:host={$host};dbname={$databaseName}",$userName,$password); 
              $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $message)
        {
            die("Error message: ".$message->getMessage());
        }
        
    }

    //Select
    public function selectSQL($SQLcommand)
    {

        try
        {
            $access = $this->connection->query($SQLcommand);
            $result = $access->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException $message)
        {
            die("Error message: ".$message->getMessage());
        }

    }

    //Insert, update and delete
    public function executeCommands($SQLcommand)
    {

        try
        {
            $access = $this->connection->query($SQLcommand);
            //$access->execute();
            return true;
        }
        catch (PDOException $message)
        {
            die("Error message: ".$message->getMessage());
        }

    }

}

?>