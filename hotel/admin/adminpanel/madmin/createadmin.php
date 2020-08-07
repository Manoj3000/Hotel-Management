<?php
include('../../php/conn.php');
session_start();
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}

if(isset($_POST['submit'])){
    
    $un = $_POST['username'];
    $pd = $_POST['password'];
    $rpd = $_POST['repassword'];
    
    if($pd == $rpd){
        $q = "INSERT INTO `login`(`username`, `password`) VALUES ('$un','$pd')";
        $run = mysqli_query($conn , $q);
        if($run){
            ?>
                <script>
                    alert('New Admin has been inserted');
                    window.location="../madmin.php";
                </script>
            <?php
        }else{
            ?>
            <script>
                alert('Sorry ');
                window.location="create.php";    
            </script>
        <?php
        }
    }else{
        ?>
        <script>
            alert('You entered Wrong Password');
            window.location="create.php";
        </script>
    <?php    }
}



?>