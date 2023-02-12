<?php

$hostname = "localhost";
$database = "project";
$usuario = "root";
$senha = "12345";

$mysql = new mysql ($hostname, $database, $usuario, $senha);
if($mysql->connect_erro){

}