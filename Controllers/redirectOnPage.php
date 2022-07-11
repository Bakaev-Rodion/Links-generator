<?php
require_once '..\Models\counterIncrement.php';
redirectToPage();
function redirectToPage(){
    if(isset($_GET['id'])&&isset($_GET['href'])){
        $counter=new CounterIncrement();
        $counter->counterIncrement($_GET['id']);
        header("Location:".$_GET['href']);
    }
}