<?php
include("./connection.php");

$query = "select * from menu where id=".$_GET['id'] ;

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();

    $item = $sqlQuery->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="server.php" method="POST">
        <div class="form-group">
          <label for="category">category</label>
          <input type="text" class="form-control" name="category" placeholder="Enter new category" value=<?php echo $item['category'] ;?>>
        </div>

        <div class="form-group">
          <label for="name">name</label>
          <input type="name" class="form-control" name="name"  placeholder="Enter new name" value=<?php echo $item['name'] ;?>>
        </div>

        <div class="form-group">
          <label for="size">size</label>
          <input type="size" class="form-control" name="size"  placeholder="Enter new size" value=<?php echo $item['size'] ;?>>
        </div>

        <div class="form-group">
          <label for="price">price</label>
          <input type="price" class="form-control" name="price"  placeholder="Enter new price" value=<?php echo $item['price'] ;?>>
        </div>
        <input type="hidden"name="id" value=<?php echo $_GET['id'] ;?> >
        
        <button type="submit"  name="UpdateBtn" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
