<?php
session_start();
include("conn.php");

if(isset($_POST['login'])){

    $un = $_POST['username'];
    $_POST['password'];

    $query = "select * from login where username='$_POST[username]' && password='$_POST[password]' ";
    $run = mysqli_query($conn , $query);
    $no = mysqli_num_rows($run);
    if($no != 0){
        $_SESSION['admin'] = $un;
        header("location:../home.php");
    }else{
        header("location:../index.html");
    }

}
?>