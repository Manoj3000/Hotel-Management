<?php  
session_start();
error_reporting(0);
include("../../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}


$_GET['uid'];

$q = " SELECT * FROM `users` WHERE  id='$_GET[uid]' ";
$r = mysqli_query($conn , $q);
$op = mysqli_fetch_assoc($r);

$g = $op['guests'];
$rn = $op['roomno'];

$receiptno = $op['id'];


$x = new DateTime("$op[check_in]");
$y = new DateTime("$op[check_out]");
$d = $x->diff($y);
$a = $d->d;
$days = ++$a;

$qu = " SELECT * FROM `rooms` WHERE  room_no='$rn' ";
$ru = mysqli_query($conn , $qu);
$o = mysqli_fetch_assoc($ru);
$roomprice = $o['price'];
$total = $roomprice * $days."<br><br>";




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
    <!--  css file link-->
    <link rel="stylesheet" href="../../css/bill.css">
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

    <div class="container mt-4"  id="p">
        
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="box"></div>
                <div class="box"></div>
                <div class="box"></div>
                <span class="float-right">Online Hotel Management</span>
            </div>
            <div class="card-body" style="background-color:rgba(0,0,0,0.1);">
                <div class="card p-4">
                    <div class="heading p-3">
                        <h2>MANOJ HOTEL</h2>
                    </div>
                    <div class="row mt-3 container">
                        <div class="col">
                            <p>Hotel Address : </p>
                            <p>City :     Pincode :    </p> 
                            <p>Web Address : </p>
                        </div>
                        <div class="col">
                            <p>contact no : </p>
                            <p>Toll free no :</p>
                        </div>
                        <div class="col">
                            <p>Date : <?php  echo date('d-m-y');  ?></p>
                            <p>Receipt No : <?php echo $receiptno; ?> </p>
                        </div>
                    </div>
                    <hr class="hr">
                    <div class="user">
                        <h4>User Details :</h4>
                        <div class="maintable mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Room</th>
                                        <th>Room Type</th>
                                        <th>Price</th>
                                        <th>Check in</th>
                                        <th>Check out</th>
                                        <th>No of Days</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $op['fname']."  ".$op['lname']; ?></td>
                                        <td><?php echo $op['roomno']; ?></td>
                                        <td><?php echo $op['room_type']; ?></td>
                                        <td><?php echo $roomprice; ?></td>
                                        <td><?php echo $op['check_in']; ?></td>
                                        <td><?php echo $op['check_out']; ?></td>
                                        <td><?php echo $days; ?></td>
                                        <td><?php echo $total; ?></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>            
            </div>
        </div>
    </div>
    <br>
    <div class="container ">
        <div class="card text-center" style="background-color:rgba(0,0,0,0.5)">
            <div class="card-body d-flex">
                <?php echo "<a href='save.php?id=$op[id]' class='btn btn-success mr-2'>Save</a>"; ?>
                <input type="submit" name="print" onclick="printcontent('p')" value="Print" class="mr-2 btn btn-primary" id="">
                <a href="../users.php" class="btn btn-info mr-2">Cancel</a>
            </div>
        </div>
    </div>
    <script>
        function printcontent(pr){
            var abc = document.body.innerHTML;
            var xyz = document.getElementById(pr).innerHTML;
            document.body.innerHTML = xyz;
            window.print();
            document.body.innerHTML = abc;
        }
    </script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
