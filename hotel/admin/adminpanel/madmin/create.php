<?php  
session_start();
include("../../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Hotel Management | Admin Panel</title>
    <!--favicon-->
    <link rel="icon" href="img/m.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="../../css/create.css">
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-md bg-dark  sticky-top">
        <div class="container">
            <a href="" class="navbar-brand text-warning">MANOJ</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item"><a href="../../home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../../php/logout.php" class="nav-link">Logout <i class="fa fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--main container-->
    <div class="container mt-5">
    <div class="card ">
            <div class="card-header text-white bg-primary">
                <span>Create Admin :</span>
                <a href="../madmin.php" class="btn btn-info float-right"> &#60 Back</a> 
            </div>
            <div class="card-body">
                <div class="cform">
                    <form action="createadmin.php" method="POST">
                        <label for="new usename">New Username : </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter new username" id="">
                        <br>
                        <label for="new Password">New Password : </label>
                        <input type="password" name="password" class="form-control" placeholder="Enter new password" id="">
                        <br>
                        <label for="Re-enter new Password">Re-enter new Password : </label>
                        <input type="password" name="repassword" class="form-control" placeholder="Re-enter new password" id="">
                        <br>
                        <input type="submit" name="submit" value="submit" class="btn btn-success" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

