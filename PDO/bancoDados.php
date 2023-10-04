<?php

#Caminho do banco de dados; nome da base de dados, login e senha
$pdo = new PDO("mysql:host=localhost; dbname=usuario", "root", "");

#Insert
try{

    $insert = $pdo->prepare('INSERT INTO usuarios VALUES(:id, :nome, :email)');
    $insert->execute(array(
        ':id' => '1',
        ':nome' => 'Heitor',
        'email' => 'heitor.sato@fatec.sp.gov.br'
    ));

} catch(PDOException $message){

    echo "Error: ".$message->getMessage();

}


#Update
try{

    $update = $pdo->prepare('UPDATE usuarios SET nome = :nome where id=:id');
    $update->execute(array(
         ':id' => '1',
         ':nome' => 'Kendy',
     ));
    
    } catch(PDOException $message){
    
        echo "Error: ".$message->getMessage();
    
}

#delete using bindValue/bindParam
try{

    $delete = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
    $delete->bindValue(':id','1');
    $delete->execute();

} catch(PDOException $message){

    echo "Error: ".$message->getMessage();

}

?>