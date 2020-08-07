<?php
include('../../php/conn.php');
session_start();
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}

$id = $_GET['id'];
$query = "DELETE FROM `login` WHERE id='$id' ";
$run = mysqli_query($conn , $query);
if($run){
    ?>
    <script>
        alert('Deleted successfully.');
        window.location="../madmin.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Sorry! Try later.');
        window.location="../madmin.php";
    </script>
    <?php
    
}

?>