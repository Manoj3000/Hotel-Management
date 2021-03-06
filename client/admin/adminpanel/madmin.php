<?php  
session_start();
include("../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../index.html");
}

$q = "SELECT * FROM `login`";
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
    <!--main container-->
    <div class="container mt-5">
    <p class="text-center bg-warning" style="font-size:30px;font-weight:bold;">Manage Admin</p>
    <div class="card ">
            <div class="card-header text-white bg-primary">
                <span style="font-size:25px">Our Admin :</span>
                <a href="madmin/create.php" class="btn btn-info float-right"> &#43 Add Admin</a> 
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:normal;">
                    <?php while($op = mysqli_fetch_assoc($r)){ ?>
                        <tr>
                            <td><?php echo $op['id'];   ?></td>
                            <td><?php echo $op['username']; ?></td>
                            <td><?php echo $op['password']; ?></td>
                            <td>
                                <?php echo  "<a href='madmin/deleteadmin.php?id=$op[id]' class='btn btn-danger btn-sm'>Delete</a>"?>
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

