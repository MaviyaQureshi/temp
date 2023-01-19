<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class= "container">
        <br>
<h1 class= "text-white bg-dark text-center">
    YOUR STORE
</h1>
<div class="col-lg-8 m-auto d-block">
<form action = "upload.php" method="post" enctype="multipart/form-data">
    <div class = "form-group">
        <label for="product"> Product : </label>
        <input type="text" name="product" id="product" class="form-control">
    </div>
    <div class = "form-group">
        <label for="price"> Price/kg : </label>
        <input type="text" name="price" id="price" class="form-control">
    </div>

    <div class = "form-group">
        <label for="file"> Product image : </label>
        <input type="file" name="file" id="file" class="form-control">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>

<form action="view.php" method="post">
    <br>
<input type="submit" name="view" value="view Existing Products" class="btn btn-success">
</form>
</div>
</div>
</body>
</html>