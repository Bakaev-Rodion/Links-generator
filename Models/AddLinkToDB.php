<?php
require_once "..\Controllers\dbConnect.php";
class AddLinkToDB
{
    function addLinkToDB($oldLink,$newLink){
        try {
            $pdo = dbConnect();
            $pdo->query("INSERT INTO links(original_links, shortened_links, counter) VALUES ('$oldLink', '$newLink',0)");
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}