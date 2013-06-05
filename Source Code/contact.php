<?php
$subject ="Website Contact"; 
$message= $_GET['message'];
$mail_from=$_GET['email']; 
$header="from ".$_GET['name']." ".$mail_from ;
$to ="hdtroubleshooting@gmail.com";
$send_contact=mail($to,$subject,$message,$header);

if($send_contact){
echo "We've received your contact information";
}
else {
echo "ERROR";

}
?>