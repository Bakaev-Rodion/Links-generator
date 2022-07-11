<?php
require_once 'Models/SelectAllLinks.php';
function showLinks(){
    $links = new SelectAllLinks();
    return $links->selectAllLinks();
}