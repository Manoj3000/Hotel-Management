<?php
include('conn.php');
session_start();

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email =  $_POST['email'];
    $mno = $_POST['mno'];
    $add = $_POST['address'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $roomtype = $_POST['roomtype'];
    $rooms = $_POST['rooms'];
    $guests = $_POST['guests'];
    
    $query = "INSERT INTO requests(`fname`,`lname`,`email`,`contact no`,`address`,`checkin`,`checkout`,`roomtype`,`rooms`,`guests`) 
    VALUES ('$fname','$lname','$email','$mno','$add','$checkin','$checkout','$roomtype','$rooms','$guests')";
    $run = mysqli_query($conn,$query);

    if($run){

        $to = "gaikwadm853@gmail.com";
        $subject = " Hello sir, we have one registration request.";
        $message = " $fname send a registration request for $roomtype room and this is his contact no : $mno. for more details check the Admin panel of our website ";
        $header = "from: $email";
        
        mail($to, $subject, $message, $header);

        ?>
        <script> 
            alert('Your request send successfully. If registration will be done we will inform you... Thank You.');
            window.location="../index.html";
        </script>
        <?php
    }else{
        ?>
        <script> 
            alert('Sorry! Your request is fail.');
            window.location="../index.html";
        </script>
        <?php
    }
}

?>

