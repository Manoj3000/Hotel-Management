<?php  
session_start();
error_reporting(0);
include("../../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}


echo  $_GET['id'];

$q = " SELECT * FROM `users` WHERE  id='$_GET[id]' ";
$r = mysqli_query($conn , $q);
$op = mysqli_fetch_assoc($r);

$username = $op['fname']." ".$op['lname'];

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
$total = $roomprice * $days;


$query = "INSERT INTO `done`(`receipt_no`, `usrname`, `contact_no`, `email`, `guests`, `room_type`, `room_no`, `price`, `check_in`, `check_out`, `days`, `total_bill`)
 VALUES ('$receiptno','$username','$op[contact_no]','$op[email]','$op[guests]','$op[room_type]','$op[roomno]','$roomprice','$op[check_in]','$op[check_out]','$days','$total')";
$run = mysqli_query($conn , $query);
if($run){
    ?>
    <script>
        alert('Data has been saved successfully.');
        window.location="../users.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('This record is Alerdy exist.');
        window.location="../users.php";
    </script>
    <?php
}

?>