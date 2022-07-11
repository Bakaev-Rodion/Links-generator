<?php
require_once "..\Controllers\dbConnect.php";
class counterIncrement
{
    function counterIncrement($id){
        try {

            $pdo = dbConnect();
            $req = "UPDATE links SET counter=counter+1 WHERE id=:id";
            $sth = $pdo->prepare($req);
            $sth->bindParam(':id', $id);
            $sth->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
}