<?php

if(isset($_POST['submit'])){
    $name = $_POST['name']_;
    $mailform = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "ruipinito9@gmail.com";

    $headers = "De: " .$mailFrom;
    $txt = "Recebeste uma mensagem " .$name ".\n\n".$message;

    mail($mailTo,$name,$txt,$headers);

    header("Location: index.html?MessageSent");
    
}

?>