<?php  
session_start();
include("../../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}

$id = $_GET['id'];
$uid = $_GET['uid'];

if($_GET['uid'] != ""){

}else{
    ?>
    <script>
    alert("This room is already free.");
    window.location="../rooms.php";
    </script>
    <?php
}

$query = "update rooms set status='Available' , checkin='0000-00-00' , checkout='0000-00-00' where id='$id' ";
$run = mysqli_query($conn , $query);
if($run){
    $q = " DELETE FROM `users` WHERE id='$uid' ";
    $r = mysqli_query($conn , $q); 
    if($r){
        ?>
        <script>
        alert("Record is Deleted.")
        window.location="../rooms.php";
        </script>
        <?php
    }else{
        header('location:../rooms.php');
    }
}else{
    header('location:../rooms.php');
}

?>