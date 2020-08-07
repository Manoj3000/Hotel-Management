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
    <!--mani container-->
    <div class="container mt-5">
        <div class="card ">
            <div class="card-header text-white bg-primary">
                <span>Create new Rooms :</span>
                <a href="../rooms.php" class="btn btn-info float-right"> &#60 Back</a> 
            </div>
            <div class="card-body">
                <form action="createroom.php" method="post">
                    <label for="room no">Room No :</label>
                    <input type="text" name="roomno" class="form-control" id="" required>
                    <br>
                    <label for="room no">Room type :</label>
                    <select name="roomtype" id="" class="form-control" required>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Family">Family</option>
                        <option value="Luxury">Luxury</option>
                        <option value="Honeymoon">Honeymoon</option>
                    </select>
                    <br>
                    <label for="price">Price :</label>
                    <select name="price" id="" class="form-control" required>
                        <option value="1200">1200 <i class="fas fa-rupee-sign"></i></option>
                        <option value="1800">1800 <i class="fas fa-rupee-sign"></i></option>
                        <option value="2200">2200 <i class="fas fa-rupee-sign"></i></option>
                        <option value="4200">4200 <i class="fas fa-rupee-sign"></i></option>
                        <option value="3500">3500 <i class="fas fa-rupee-sign"></i></option>
                    </select>
                    <br>
                    <label for="status">Status :</label>
                    <select name="status" id="" class="form-control" required>
                        <option value="Available">Available</option>
                        <option value="Booked">Booked</option>
                    </select>
                    <br>
                    <input type="submit" name="submit" value="Create " class="btn btn-success" id="">
                </form>
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