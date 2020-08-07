<?php
include('../../php/conn.php');
session_start();
$admin = $_SESSION['admin'];
if($admin == true){

}else{
    header("location:../../index.html");
}
/*------------- main code ----------------*/

$id = $_GET['rid'];

$query = " SELECT `fname`,  `email` FROM `requests` WHERE id='$id' ";
$run = mysqli_query($conn , $query);
$res = mysqli_fetch_assoc($run);
$un = $res['fname'];
$ue = $res['email'];

$to = "$ue";
$subject = "Online Hotel Management Project";
$message = "Hello $un your registration has been canceled, for more details contact us, Thank you1 .";
$header = "from: gaikwadm853@gmail.com";

mail($to, $subject, $message, $header);

$q = "DELETE FROM `requests` WHERE id='$id' ";
$ru = mysqli_query($conn , $q);
if($ru){

    ?>
    <script>
        alert('Deleted.');
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

?>