<?php

$db= new mysqli("localhost","root","chat");
if($db =connect_error){
    die("connection failed:" ,
    
    $db=connect_error);
}

$db=>close();