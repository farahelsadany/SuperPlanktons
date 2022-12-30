<?php


if(isset($_POST['submit'])) {
    $name =$_POST['name'];
    $subject =$_POST['subject'];
    $mailfrom =$_POST['mail'];  
    $txt =$_POST['message'];
    $txt1 =$_POST['message'];
    

    $mailTo="farah.1120591@stemmaadi.moe.edu.eg";
    $headers = "From:".$mailfrom;
    $txt = "You have recieved an email from".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$txt1,$headers);
    header("location: survey.php?mailsend");
}