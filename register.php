<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
<h1>welcome to our restairant </h1> <br>
  <h3>registration</h>

  <?php 
  
  if(isset($_GET['message'])){
    echo "<p class='alert alert-info'>". $_GET['message'] ."</p>";
  }
  
  ?>
  <form action="server.php" method="post" class="w-50 mx-auto my-5">

  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control">

  <label for="email">Email</label>
  <input type="text" name="email" id="email" class="form-control">

  <label for="city">City</label>
  <input type="text" name="city" id="city" class="form-control">

  <label for="region">Region</label>
  <input type="text" name="region" id="region" class="form-control">

  <label for="password">password</label>
  <input type="text" name="password" id="password" class="form-control">

  <button type="submit" name="registerBtn" class="btn btn-primary mt-5">submit</button>

  </form>
  <p>already have an account ?</p> <br>
<a href="./login.php">login</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>