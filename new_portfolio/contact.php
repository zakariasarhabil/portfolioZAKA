<?php
   
   if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $mailFrom = $_POST['email'];
        $subj = $_POST['sujet']; 
        $message = $_POST['message'];

        $mailTo = "zakariasarhabil@gmail.com";
        $headers = "From: ".$mailFrom;
     

        mail($mailTo, $subj, $message, $headers);
        header("Location: zakafolio.php?mailsend");
   }
   
?>