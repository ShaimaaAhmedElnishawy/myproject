<?php

if(isset($_GET['id'])){
$product=$_GET['id'];

} 
else {

    header("location:menu.php");
    exit();
}
echo $product;
echo "<p>are you sure you want to confirm the order</p>";
  echo  '<a href="cart.php?id='.$product.'">confirm</a> ';
?>


