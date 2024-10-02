<?php

$server_name = 'localhost';
$username_name = 'root';
$password = '';
$db_name = 'pokedex';

$connection = new mysqli($server_name,$username_name, $password, $db_name);

if ($connection->connect_error){
    die ("La connection a échoué.".$connection->connect_error);
}

$connection->set_charset("utf8")

?>