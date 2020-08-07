<?php
include('../../php/conn.php');
session_start();
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}

if(isset($_POST['submit'])){
    
$roomno = $_POST['roomno'];
$roomtype = $_POST['roomtype'];
$price = $_POST['price'];
$status = $_POST['status'];
    
$q ="INSERT INTO rooms(`room_no`,`room_type`,`price`,`status`) VALUES ('$roomno','$roomtype','$price','$status')";    
$run = mysqli_query($conn , $q);
if($run){
    ?>
    <script>
        //alert('New Room has been Created');
        window.location="../rooms.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Sorry! try later.');
        window.location="createroom.php";
    </script>
    <?php
}

}




?>