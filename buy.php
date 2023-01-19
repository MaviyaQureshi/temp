<?php 
include 'partials/_dbconnect.php';
session_start();

if(isset($_GET['id']))
{
$id = $_GET['id'];
$bemailid=$_SESSION['bemailid']; 
$sql = "SELECT * FROM `imgupload` WHERE id = '{$id}'";
        $result = $conn->query($sql);
        echo"<h2>Details Of Seller</h2><br>";
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Email: " . $row["email"]. "<br>";
            
          }
        } else {
          echo "0 results";
        }
    }
    $showAlert = false;
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $idp = $_POST['idp'];
            $bemailid=$_SESSION['bemailid']; 
           $pricekg = $_POST["pricekg"];
           $quantity = $_POST["quantity"];
               //$sql = "INSERT INTO `userlist` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
               $sql = "INSERT INTO `auct`(`bemailid`, `id`, `pricekg`, `quantity`) VALUES ('$bemailid','$idp','$pricekg','$quantity')";
               $result = mysqli_query($conn, $sql);
               $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                }
       }
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
    ?>
<form action = "buy.php" method="post" enctype="multipart/form-data">
<div class = "form-group">
        <label for="idp"> Product ID : </label>
        <input type="text" name="idp" id="idp" class="form-control">
    </div>
    
    <div class = "form-group">
        <label for="pricekg"> Price/kg : </label>
        <input type="text" name="pricekg" id="pricekg" class="form-control">
    </div>
    <div class = "form-group">
        <label for="quantity"> Quantity/Kg : </label>
        <input type="text" name="quantity" id="quantity" class="form-control">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>
</body>
</html>