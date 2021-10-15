<?php
$to = "sachin.raghavg@gmail.com";
$subject = "Offer code needed";
$txt = $_POST['email'];
$headers = "From: info@pcgsolution.in";

if(mail($to,$subject,$txt, $headers)){
    echo "true";
}else{
    echo "false";
}
?>