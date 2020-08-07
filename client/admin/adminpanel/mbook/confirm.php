<?php  
session_start();
include("../../php/conn.php");
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../index.html");
}

/*  -------------- main code start ----------- */

$rid = $_GET['rid'];

$q = " SELECT * FROM `requests` WHERE id='$rid' ";
$run = mysqli_query($conn, $q);
$op = mysqli_fetch_assoc($run);
if($run){
    $ufname = $op['fname'];
    $ulname = $op['lname'];
    $uemail = $op['email'];
    $umno = $op['contact no'];
    $uadd = $op['address'];
    $uci = $op['checkin'];
    $uco = $op['checkout'];
    $urt = $op['roomtype'];
    $urs = $op['rooms'];
    $ugs = $op['guests'];

    $qury = "select * from rooms where 	room_type='$op[roomtype]' && status='Available'  ";
    $data = mysqli_query($conn , $qury);
    echo $rows = mysqli_num_rows($data);
    $rop = mysqli_fetch_assoc($data);
    if($rows != 0){
        $roomid = $rop['id'];
        $romno = $rop['room_no'];
        $qry = "UPDATE rooms SET status='Booked',checkin='$uci',checkout='$uco' WHERE id='$roomid' ";
        $book =mysqli_query($conn , $qry);
        
        if($book){
            
            
            $qu = " INSERT INTO users(`fname`,`lname`,`email`,`contact_no`,`address`,`check_in`,`check_out`,`room_type`,`rooms`,`guests`,`roomno`) VALUES ('$ufname','$ulname','$uemail','$umno','$uadd','$uci','$uco','$urt','$urs','$ugs','$rop[room_no]') ";
            $r = mysqli_query($conn , $qu);
            if($r){
                $que = "DELETE FROM `requests` WHERE id='$rid' ";
                $ru = mysqli_query($conn , $que);
                if($ru){
                    $to = "$uemail";
                    $subject = "Online Hotel Management Project";
                    $message = "Hello $ufname your registration has been Done successfully, for more details contact us, Thank you1 .";
                    $header = "from: gaikwadm853@gmail.com";

mail($to, $subject, $message, $header);
                    ?>
                    <script>
                        alert('Confirmation is done Successfully.');
                        window.location="../mbook.php";
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Sorry! request record are not deleted.');
                        window.location="../mbook.php";
                    </script>
                <?php    
                }
        
            }else{
                ?>
                <script>
                    alert('Sorry! Confirmation fail.');
                    window.location="../mbook.php";
                </script>
                <?php    
            }


        }else{
            ?>
            <script>
                alert('Sorry!  fail.');
                window.location="../mbook.php";
            </script>
            <?php    
        }







    }else{
        ?>
        <script>
            alert("sorry! rooms are full.");
            window.location="../mbook.php";
        </script>
        <?php
    }



}else{
    ?>
    <script>
        alert('Sorry! This record not found.');
        window.location="../mbook.php";
    </script>
    <?php

}

