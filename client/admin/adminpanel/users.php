<?php  
session_start();
include("../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../index.html");
}

$q = " SELECT * FROM `users` ";
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
    <!--user-->
    <div class="container mt-5">
    <p class="text-center bg-warning" style="font-size:30px;font-weight:bold;">Manage Users</p>
    <div class="card ">
            <div class="card-header text-white bg-primary">
                <span style="font-size:25px">All Users :</span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Room Type</th>
                            <th>Chech in</th>
                            <th>Check out</th>
                            <th>Room no</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:normal;">
                    <?php while($op = mysqli_fetch_assoc($r)){  ?>
                        <tr>
                            <td><?php echo $op['id'] ?></td>
                            <td><?php echo $op['fname'] ?></td>
                            <td><?php echo $op['email'] ?></td>
                            <td><?php echo $op['contact_no'] ?></td>
                            <td><?php echo $op['room_type'] ?></td>
                            <td><?php echo $op['check_in'] ?></td>
                            <td><?php echo $op['check_out'] ?></td>
                            <td><a href="rooms.php"><?php echo $op['roomno'] ?></a></td>
                            <td>
                            <?php  echo  "<a href='users/bill.php?uid=$op[id]' class='btn btn-primary btn-sm'>Bill</a>" ?>
                            <?php  echo  "<a href='users/delete.php?uid=$op[id]' class='btn btn-danger btn-sm'>Delete</a>" ?>
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