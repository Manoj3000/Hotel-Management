<?php
session_start();
include("../../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}
/*------------ main code --------------*/

$id = $_GET['uid'];

$query = "select roomno from users where id='$id' ";
$run = mysqli_query($conn , $query);
$op = mysqli_fetch_assoc($run);
$urn = $op['roomno'];


$q = " DELETE FROM `users` WHERE id='$id' ";
$r = mysqli_query($conn , $q);
if($r){

    $qu = "UPDATE rooms SET `status`='Available', `checkin`='0000-00-00',`checkout`='0000-00-00' WHERE room_no='$urn' ";
    $ru = mysqli_query($conn , $qu);
    if($ru){
        ?>
        <script>
            alert('Room table updated.');
            //window.location="../users.php";
        </script>
        <?php        
    }else{
        ?>
        <script>
            alert('Room table NOT updated.');
            //window.location="../users.php";
        </script>
        <?php
    }

    ?>
    <script>
        alert('Deleted.');
        window.location="../users.php";
    </script>
    <?php
    

}else{
    ?>
    <script>
        alert('Sorry! This user record are not deleted.');
        window.location="../users.php";
    </script>
    <?php    
}

?>