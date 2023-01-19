<?php

include 'partials/_dbconnect.php';

if(isset($_GET['id']))
{
$id = $_GET['id'];

$q = "SELECT * FROM `imgupload` WHERE id = '{$id}'";
        $result = $conn->query($q);
        echo"<h3>PRODUCT NAME : </h3>";
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo $row["product"]. "<br>";
          }
        } else {
          echo "0 results";
        }



$sql = "SELECT * FROM `auct` WHERE id = '{$id}'";

$result = $conn->query($sql);
        echo"<h2>Details Of Buyer</h2><br>";
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " -  Buyer id : " . $row["bemailid"]. "<br>";
            
          }
        } else {
          echo "0 results";
        }
      }
        $showAlert = false;
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sellername = $_POST['sellername'];
            $selleremail=$_POST['selleremail']; 
            $productid=$_POST['productid'];
           $productname = $_POST["productname"];
           $scno = $_POST["scno"];
           $buyeremail = $_POST["buyeremail"];
               //$sql = "INSERT INTO `userlist` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
               $sql = "INSERT INTO `confirm`(`sellername`, `selleremail`, `product id`, `product name`, `seller contact no`, `buyeremail`) VALUES ('$sellername','$selleremail','$productid','$productname','$scno','$buyeremail')";
               $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                    header('location:browse.php');
                }
       }
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>accept</title>
</head>
<body>
  <h2>ENTER DETAILS FOR CONFIRMATION : </h2>
  <form action = "accept.php" method="post" enctype="multipart/form-data">
<div class = "form-group">
        <label for="sellername"> Your Name : </label>
        <input type="text" name="sellername" id="sellername" class="form-control">
    </div>
    <div class = "form-group">
        <label for="selleremail"> Your ID : </label>
        <input type="text" name="selleremail" id="selleremail" class="form-control">
    </div>
    
    <div class = "form-group">
        <label for="productid"> Product ID : </label>
        <input type="text" name="productid" id="productid" class="form-control">
    </div>
    <div class = "form-group">
        <label for="productname"> Product Name : </label>
        <input type="text" name="productname" id="productname" class="form-control">
    </div>
    <div class = "form-group">
        <label for="scno"> Your Contact no : </label>
        <input type="text" name="scno" id="scno" class="form-control">
    </div>
    <div class = "form-group">
        <label for="buyeremail"> Buyers email ID : </label>
        <input type="text" name="buyeremail" id="buyeremail" class="form-control">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
</body>
</html>