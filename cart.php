<?php
require("./connection.php");
    session_start();
        $customerId= $_SESSION['loguser'];

    if(isset($_GET['id'])){

        $query="insert into cart (menu_id , customer_id) values (?,?)";
        $sqlQuery = $connection->prepare($query);

        $sqlQuery->execute([$_GET['id'],$customerId]);

    }
        $query = "select cart.id as order_id, customer.id as user_id,
        customer.name as user_name, menu.category , menu.name as item_name from cart 
        JOIN customer on cart.customer_id = customer.id 
        JOIN menu on cart.menu_id = menu.id where customer_id=$customerId";

        $sqlQuery = $connection->prepare($query);

        $sqlQuery->execute();

        $orders = $sqlQuery->fetchAll(PDO::FETCH_ASSOC); 
  
?>

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Welcome to our restaurant</h3>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>order_id</th>
                <th>user_id</th>
                <th>user_name</th>
                <th>category</th>
                <th>item_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($orders){
                foreach($orders as $order){
                    echo "<tr>";
                    echo "<td>".$order['order_id']."</td>";
                    echo "<td>".$order['user_id']."</td>";
                    echo "<td>".$order['user_name']."</td>";
                    echo "<td>".$order['category']."</td>";
                    echo "<td>".$order['item_name']."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    
</div>

<!-- Link Bootstrap JS and jQuery (optional, for some Bootstrap features) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
