<?php
require '../vendor/autoload.php';

$conexion = new MongoDB \ Client ('mongodb+srv://Rodrigo:Welcome12345678@cluster0-5grz7.azure.mongodb.net/chatbot?retryWrites=true');
$base = $conexion->chatbot;
$coleccion = $base->contactos;

$busqueda = $coleccion->find();
foreach ($busqueda as $doc){
    echo json_encode($doc);
}

