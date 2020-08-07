<?php 
    session_start(); 
    error_reporting(0);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Hotel Managament - Registration Page. </title>
    <!--favicon-->
    <link rel="icon" href="img/m.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="css/booking.css">
    
</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-md bg-primary sticky-top">
            <div class="container">
                <a href="" class="navbar-brand text-warning ">MANOJ</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav text-center ml-auto" >
                        <li class="nav-item"><a href="index.html" class="nav-link">home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-white">
            <div class="mt-5 box">
                <form action="php/booking.php" method="post">
                    <h3>Register Your Room :</h3>
                    <br>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <label for="Frist name">Frist name:</label>
                            <input type="text" name="fname" class="form-control" required id="">
                            <br>
                            <label for="Last name">Last name:</label>
                            <input type="text" name="lname" class="form-control" required id="">
                            <br>
                            <label for="Email">Email:</label>
                            <input type="email" name="email" class="form-control" required id="">
                            <br>
                            <label for="Contact no">Contact no:</label>
                            <input type="text" name="mno" class="form-control" required id="">
                            <br>
                            <label for="Address">Address:</label>
                            <input type="text" name="address" class="form-control" required id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <label for="Check In">Check In:</label>
                            <input type="date" name="checkin" value="<?php echo $_SESSION['checkin']; ?>" class="form-control" required id="">
                            <br>
                            <label for="Check In">Check Out:</label>
                            <input type="date" name="checkout" value="<?php echo $_SESSION['checkout']; ?>" class="form-control" required id="">
                            <br>
                            <label for="Room type">Room type:</label>
                            <input type="text" name="roomtype" value="<?php echo $_SESSION['roomtype']; ?>" class="form-control" required id="">
                            <br>
                            <label for="Number of Room">Number of Rooms:</label>
                            <input type="text" name="rooms" value="<?php echo $_SESSION['rooms']; ?>" class="form-control" required id="">
                            <br>
                            <label for="Number of Guests">Number of Guests:</label>
                            <input type="text" name="guests" value="<?php echo $_SESSION['guest']; ?>" class="form-control" required id="">
                            <br>
                            <input type="submit" name="submit" value="Register " class="btn btn-primary float-right" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php  ?>

    
    
    
    
    
    
    
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

