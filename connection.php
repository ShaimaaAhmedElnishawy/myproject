<?php


$host="localhost";
$dbName="restaurant";
$dbType="mysql";
$userName="root";
$password="";


$connection= new PDO("$dbType:host=$host;dbname=$dbName"
,$userName,$password);


?>