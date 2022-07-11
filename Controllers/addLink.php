<?php
require_once '..\Models\AddLinkToDB.php';
require_once 'createLink.php';
addLink();
function addLink(){
    if(isset($_POST['oldLink'])) {
            $addLink = new AddLinkToDB();
            $addLink->addLinkToDB($_POST['oldLink'], createLink());
            header('Location: ..\index.php');
    }
    else { header('Location: ..\index.php');}
}