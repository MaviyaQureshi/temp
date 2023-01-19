<?php 
include 'partials/_dbconnect.php';
session_start();

if(isset($_GET['id']))
{
$id = $_GET['id'];
$bemailid=$_SESSION['bemailid']; 
$sql = "SELECT * FROM `imgupload` WHERE id = '{$id}'";
        $result = $conn->query($sql); -->
        echo"<h2 class="heading">Details Of Seller</h2><br>";
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " -  Seller id : " . $row["email"]. "<br>";
            
          }
        } else {
          echo "0 results";
        }
    }
    $showAlert = false;
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $idp = $_POST['idp'];
            $bemailid=$_SESSION['bemailid']; 
            $femailid=$_POST['femailid'];
           $pricekg = $_POST["pricekg"];
           $quantity = $_POST["quantity"];
               //$sql = "INSERT INTO `userlist` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
               $sql = "INSERT INTO `auct`(`bemailid`, `id`, `femailid`, `pricekg`, `quantity`) VALUES ('$bemailid','$idp', '$femailid', '$pricekg','$quantity')";
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
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="buy.css">
    <title>buy</title>
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

    <nav>
        <div class="nav-main">
            <div class="nav-header">
                <a href="" class="link"><img src="copy-removebg-preview.png" class="logo"> <span class="site-name">Fresh Fields</span></a> 
            </div>
        </div>
    </nav>
<form action = "buy.php" method="post" enctype="multipart/form-data">
    
    <div class="container">
        <div class = "form-group">
                <label for="idp"> Product ID : </label>
                <input type="text" name="idp" id="idp" class="form-control">
            </div>
            <div class = "form-group">
                <label for="femailid"> Sellers ID : </label>
                <input type="text" name="femailid" id="femailid" class="form-control">
            </div>
            
            <div class = "form-group">
                <label for="pricekg"> Price/kg : </label>
                <input type="text" name="pricekg" id="pricekg" class="form-control">
            </div>
            <div class = "form-group">
                <label for="quantity"> Quantity/Kg : </label>
                <input type="text" name="quantity" id="quantity" class="form-control">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-success" id="button">
    </div>

</form>
<style>

</style>
</body>
</html>
