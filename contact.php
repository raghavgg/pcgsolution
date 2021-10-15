<?php
$to = "sachin.raghavg@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['name']." ".$_POST['mobile']." ".$_POST['email']." ".$_POST['message'];
$headers = "From: info@pcgsolution.in";

if(mail($to,$subject,$txt,$headers)){
    echo "true";
}else{
    echo "false";
}
?>