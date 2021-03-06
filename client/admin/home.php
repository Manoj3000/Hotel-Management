<?php  
session_start();
include("php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:index.html");
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
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!--navbar-->
    <nav class="navbar bg-dark sticky-top">
        <div class="container">
            <a href="" class="navbar-brand text-warning">MANOJ</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="php/logout.php" class="nav-link">Logout <i class="fa fa-power-off"></i></a></li>
            </ul>
        </div>
    </nav>
    <!--main -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="adminoption">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/book.jpg"  alt="">
                        </div>
                        <a href="adminpanel/mbook.php" style="color:white;font-size:25px;text-decoration:none;">
                            <div class="card-footer bg-dark text-white ">
                                Manage Booking
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="adminoption">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/user.png"  alt="">
                        </div>
                        <a href="adminpanel/users.php" style="color:white;font-size:25px;text-decoration:none;">
                            <div class="card-footer bg-dark text-white ">
                                Manage Users
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="adminoption">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/rooms.jpeg"  alt="">
                        </div>
                        <a href="adminpanel/rooms.php" style="color:white;font-size:25px;text-decoration:none;">
                            <div class="card-footer bg-dark text-white ">
                                Manage Rooms
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="adminoption">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/editadmin.png"  alt="">
                        </div>
                        <a href="adminpanel/madmin.php" style="color:white;font-size:25px;text-decoration:none;">
                            <div class="card-footer bg-dark text-white ">
                                Manage Admin
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>