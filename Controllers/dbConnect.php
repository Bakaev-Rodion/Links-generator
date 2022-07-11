<?php
function dbConnect(){
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=links','root');
    return $pdo;
}