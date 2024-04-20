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
        <h3>Add To Menu</h3>
      <form action="server.php" method="POST">
        <div class="form-group">
          <label for="category">category</label>
          <input type="text" class="form-control" name="category">
        </div>
        <div class="form-group">
          <label for="name">name</label>
          <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
          <label for="size">size</label>
          <input type="text" class="form-control" name="size" >
        </div>
        <div class="form-group">
          <label for="price">price</label>
          <input type="number" class="form-control" name="price" >
        </div>
        <button type="submit"  name="AddBtn" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
