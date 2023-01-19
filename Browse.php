

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
        <h1 class="text-center text-white bg-dark">store</h1>
        <br>
        <div class="table-responsive">
        <table class ="table table-bordered table-stripped table-hover">
            <thead>
                <th>ID</th>
                <th>Product</th>
                <th>Price/Kg</th>
                <th>Product image</th>
                <th>BUY</th>
            </thead>

            <tbody>
                <?php 
                    include 'partials/_dbconnect.php';
                    
                        

                            $displayquery = "SELECT * FROM `imgupload`";
                            $querydisplay = mysqli_query($conn, $displayquery);

                            $row = mysqli_num_rows($querydisplay);

                            while($result = mysqli_fetch_array($querydisplay))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $result['id']?></td>
                                    <td><?php echo $result['product'];?></td>
                                    <td><?php echo $result['price'];?></td>
                                    <td><img src=" <?php echo $result['image'];?>" height="100px" width="100px" ></td>
                                    <td><a href="buy.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="buy"> <i class="btn btn-primary">BUY</i> </a></td>
                                </tr>
                                <?php
                            }
                       // }
                    
                ?>
            </tbody>

        </table>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>