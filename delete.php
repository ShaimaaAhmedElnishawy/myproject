<?php

require("./connection.php");

if(isset($_GET['id'])){

    $id=$_GET['id'];
    
    $query="DELETE FROM menu
    WHERE id=$id";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();
    echo("deleted successfully");
}

?>