<?php
include("conn.php");
session_start();
error_reporting(0);

if(isset($_POST['submit'])){

 $checkin = $_POST['checkin'];
 $checkout = $_POST['checkout'];
 $roomtype = $_POST['roomtype'];
 $rooms = $_POST['rooms'];
 $guest = $_POST['guest'];


$q = "select * from rooms where room_type='$_POST[roomtype]' && status='available' ";
$run = mysqli_query($conn , $q);
$data = mysqli_num_rows($run);

if($data != 0){
    ?>
        <script> 
             var r = confirm("Yes! we have room for you... Do you want to book now!" );
             if(r == true){
                <?php
                  $_SESSION['checkin'] = $checkin;
                  $_SESSION['checkout'] = $checkout;  
                  $_SESSION['roomtype'] = $roomtype;
                  $_SESSION['rooms'] = $rooms;
                  $_SESSION['guest'] = $guest;

                ?>
                  window.location="../booking.php";
             }else{
                window.location="../index.html";
             }
            
        </script>
    
    <?php
    
}else{
    ?>
        <script> 
            alert('Sorry! we dont have any room.');
            window.location="../index.html";
        </script>
    
    <?php
    
}



}

?>

