<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $to = "gaikwadm853@gmail.com";
    $subject = "$sub";
    $message = "$msg";
    $header = "from: $email";

    $done = mail($to, $subject, $message, $header);
    if($done == true){
        ?>
        <script>
            alert("Your message successfully send");
            window.location="../index.html";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Sorry message not send.");
            window.location="../index.html";
        </script>
        <?php
    }

}

?>