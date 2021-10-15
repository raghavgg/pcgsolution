<?php
$to = "info@pcgsolution.in";
$subject = $_POST['subject'];
$txt = $_POST['name']." ".$_POST['mobile']." ".$_POST['email']." ".$_POST['message'];

if(mail($to,$subject,$txt)){
    echo "true";
}else{
    echo "false";
}
?>