<?php 
    $name=$_POST['emri']; 
    $email=$_POST['email']; 
    $message=$_POST['mesazhi']; 
    if (($emri!="")||($email!="")||($mesazhi!="")) 
        {         
        $from="Nga: $name<$email>\r\nReturn-path: $email";
        // Change subject
        $subject="Message sent using your contact form";
        // Replace with your email
        mail("contact@yourwebsite.com", $subject, $message, $from); 
        
        echo "Emaili i dergua!"; 
        }    
?> 
