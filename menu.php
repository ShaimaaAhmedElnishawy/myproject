<?php

require("./connection.php");

$query = "select * from menu ";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();

    $items = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to our restaurant</h2>
        <h3>You can choose your favorite food</h3>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Add To Cart</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($items){
                    foreach($items as $item){
                        echo "<tr>";
                        echo "<td>".$item['category']."</td>";
                        echo "<td>".$item['name']."</td>";
                        echo "<td>".$item['size']."</td>";
                        echo "<td>".$item['price']."</td>";
                        echo "<td>";
                        echo "<a href='./confirm.php?id=" .$item['id']. "' class='btn btn-primary'>Add To Cart</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS (optional, for certain Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
