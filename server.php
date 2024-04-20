<?php

require("./connection.php");

if(isset($_POST['registerBtn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $password = $_POST['password'];

    $pattern ="/^[0-9]{2,8}$/";
    $namePattern = "/^[A-z]{3,}$/";
    

    if(!preg_match($namePattern, $name)){

        header("location:register.php?message=name must be string and more than 3 characters");
        exit();
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location:register.php?message=Please enter a valid email address");
        exit();
    }


    if(!preg_match($pattern,$password)){
        print_r($password);
        header("location:register.php?message=password must be between 2 and 8 characters");
        exit();
    }


    $selectQuery = "select * from customer where email = '$email'";

    $sqlQuery = $connection->prepare($selectQuery);

    $sqlQuery->execute();

    $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);

    if($result){
        header("location:register.php?message=this email already registered");
        exit();
    }
    else{

        $query= "insert into customer (name, email , city , region , password) values('$name', '$email','$city' , 
        '$region' , '$password')";
    
        $sqlQuery = $connection->prepare($query);
    
        $response = $sqlQuery->execute();
    
        if($response){
            header("location:register.php?message=registering is successfully");
            exit();
        }
    }

}

elseif(isset($_POST['loginBtn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $query = "select * from customer where email='$email' and password='$password'";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();

    $existUser = $sqlQuery->fetch(PDO::FETCH_ASSOC);  
    
    if($existUser){
        session_start();
        $_SESSION['loguser']=$existUser['id'];
        header("location:menu.php?");
    }
    else {
            header("location:login.php?message= wrong email or password"); 
         }
}


elseif(isset($_POST['loginAdmin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $query = "select * from admin where email='$email' and password='$password'";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();

    $existAdmin = $sqlQuery->fetch(PDO::FETCH_ASSOC);  
    
    if($existAdmin){
        session_start();
        $_SESSION['logAdmin']=$existUser['id'];
        header("location:Admin.php?");
    }
    else {
            header("location:LoginAsAdmin.php?message=wrong email or password"); 
         }
}

if(isset($_POST['UpdateBtn'])){    
    
    $category=$_POST['category'];
    $name=$_POST['name'];
    $size=$_POST['size'];
    $price=$_POST['price'];
    $id=$_POST['id'];

    $query="UPDATE menu
    SET category='$category' , `name`='$name' , `size`='$size' , price='$price'
    WHERE id='$id';
    ";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();

    $update = $sqlQuery->fetch(PDO::FETCH_ASSOC); 
    
    header("location:Admin.php");

    // if($update){
    //     session_start();
    //     $_SESSION['update']=$update['id'];
    //     header("location:Admin.php");
    // }
    // else {
    //         header("location:Admin.php?message=something wrong"); 
    //      }
    
}


if(isset($_POST['AddBtn'])){  
    
    $category=$_POST['category'];
    $name=$_POST['name'];
    $size=$_POST['size'];
    $price=$_POST['price'];

    $query="INSERT INTO menu (category,`name`,`size`,price)
    VALUES ('$category','$name','$size','$price')";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();
    header("location:Admin.php");
    
}
?>