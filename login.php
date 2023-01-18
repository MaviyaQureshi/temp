<?php 
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $emailid = $_POST["emailid"];
        $password = $_POST["password"];
        
        
            $sql = "Select * from buyer where emailid ='$emailid' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['emailid'] = $emailid;
                header("location: sellit.php");
            }
        
        else{
            $showError = "Invalid Credentials";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to Fresh Fields</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">  
  <style>
    body, html {
  height: 100%;
}
body {
  background-image: url('bg-image.jpg');
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="panel">
<!-- <div class = "Logo">
                    <img src = "copy-removebg-preview.jpg" alt = "Logo">
                </div> -->
            <p class="logo"> <span class="style"> <img src = "copy-removebg-preview.jpg" class="image"></span><span class="site-name">Fresh Fields</span></p>
            <a href=""><button class="contactus">Contact Us</button></a>
            <a href=""><button class="learnmore">Learn More</button></a>
        </div>
     <?php
     
    if($login){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    } 
    ?>

    <!-- <div style="width: 100%; overflow: hidden;height: 100vh"> -->

        <!--left section-->
        
        <div style="width: 700px;float: left;" class = "split left">  
        <div class="container my-4">
                <!-- <div class = "Logo">
                    <img src = "TickLogo.svg" alt = "Logo">
                </div> -->
                <div class = "Login-display">
                <h1 class="Login-msg">Login</h1>
                <h5 class= "Login-msg2">Keep up the productivity!</h2>
                <form action="/rubix23/Login.php" method="post">
                    <div class="form-group">
                        <label class = "field-desc" for="emailid">Email ID</label>
                        <input type="text" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label class = "field-desc" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                    </div>
                    <div class = "btn-div">
                    <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="not-registered">
                        <p>Not registered yet? <a href = "/rubix23/signup.php" class = "link-sign">Sign Up here.</a></p>
                    </div>
                </form>
                </div>
        </div>
        </div>
<!-- 
      
        <div class = "split right" style="margin-left: 700px;"> 

        <div class="img-container">
            <img src="3411092.jpg" alt="" class="todolist-img">
        </div> -->
            
        </div>
    </div>
    </div>
    <div class="motto-class">
            <span class="motto"> <h1>"Providing the best rates ethically"</h1> </span>
        </div>

        <script src="script.js"></script>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>