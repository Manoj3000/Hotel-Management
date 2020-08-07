<?php  
session_start();
include("../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../index.html");
}

$q = "SELECT * FROM `rooms`";
$r = mysqli_query($conn , $q);

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
    <link rel="stylesheet" href="../css/home.css">
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
                    <li class="nav-item"><a href="../home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../php/logout.php" class="nav-link">Logout <i class="fa fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--mani container-->
    <div class="container mt-5">
    <p class="text-center bg-warning" style="font-size:30px;font-weight:bold;">Manage Rooms</p>
            <div class="card ">
            <div class="card-header text-white bg-primary">
                <span style="font-size:25px">List of Rooms :</span>
                <a href="rooms/addroom.php" class="btn btn-info float-right"> + Add Room</a> 
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Room id</th>
                            <th>Room no</th>
                            <th>Room Type</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>User id</th>
                            <th>Check in</th>
                            <th>Check out</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:normal;">
                    <?php while($op = mysqli_fetch_assoc($r)){   ?>
                        <tr>
                            <td><?php echo $op['id']; ?></td>
                            <td><?php echo $op['room_no']; ?></td>
                            <td><?php echo $op['room_type']; ?></td>
                            <td><?php echo $op['price']; ?> &nbsp; <i class="fas fa-rupee-sign"></i> / Day</td>
                            <td><b><?php echo $op['status']; ?></b></td>
                            <td><?php  
                                $query = " select id from users where roomno='$op[room_no]' ";
                                $run = mysqli_query($conn , $query);
                                $result = mysqli_fetch_assoc($run);
                                $count = mysqli_num_rows($run);
                                if($count != 0){
                                    ?> <a href="users.php"> <?php echo $result['id']; ?> </a> <?php
                                }else{
                                    echo "00";
                                }
                                ?>
                            </td>
                            <td><?php echo $op['checkin']; ?></td>
                            <td><?php echo $op['checkout']; ?></td>
                            <td>
                                <?php echo "<a href='rooms/available.php?id=$op[id]&&uid=$result[id]' class='btn btn-warning'>Available</a>" ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
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