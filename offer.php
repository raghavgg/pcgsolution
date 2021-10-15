<?php
$to = "info@pcgsolution.in";
$subject = "Offer code needed";
$txt = $_POST['email'];

if(mail($to,$subject,$txt)){
    echo "true";
}else{
    echo "false";
}
?>