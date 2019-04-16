<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbname="leyes";
$dbuser="root";
$dbpass="avaras08";
$dbhost="localhost";

try {
    $dblink=new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    
} catch (Exception $ex) {
    echo 'Problemas en la conexion ';
}



