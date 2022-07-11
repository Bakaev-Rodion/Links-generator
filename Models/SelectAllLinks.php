<?php
require_once "Controllers\dbConnect.php";
class SelectAllLinks
{
    function selectAllLinks(){
        try{
        $links=[];
        $pdo=dbConnect();
        $stmt=$pdo->query("SELECT * FROM links");
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            array_push($links,$row);
        $pdo = null;
        return $links;
    }
    catch(PDOException $e){
    echo $e->getMessage();
    die();
        }
    }

}