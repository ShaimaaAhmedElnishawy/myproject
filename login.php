<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  

  <h1>login</h1>

  <?php 
  
  if(isset($_GET['message'])){
    echo "<p class='alert alert-info'>". $_GET['message'] ."</p>";
  }
  
  ?>
  <form action="server.php" method="post" class="w-50 mx-auto my-5">

  <label for="email">User email</label>
  <input type="text" name="email" id="email" class="form-control">

  <label for="password">User password</label>
  <input type="password" name="password" id="password" class="form-control">

  <button type="submit" name="loginBtn" class="btn btn-primary mt-5">submit</button>

  </form>

<a href="./register.php">register</a>
<br>
<a href="./LoginAsAdmin.php">login_as_admin</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>