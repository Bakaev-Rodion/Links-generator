<?php
function createLink(){
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return 'http://'.substr(str_shuffle($permitted_chars), 0, 6);
}