<?php 
   $name = $-POST['name'];
   $visitor-email = $-POST['email'];
   $message=$-POST['send']

   $email-from = "personalweb@gmail.com";
   $email-subject = "new form submission";
   $email-body = "user-name:$name.\n"
                  "user-email:$visitor-email.\n"
                  "user-message:$message.\n";

      $To="mine@gmail.com ";
      $headers="from:$email-from \r\n"; 
      $headers .="replay-to:$visitor-email \r\n";

      mail($To, $email-subject, $email-body,$headers);
      header("location:cotact.html")
 ?>