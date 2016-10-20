<?php
if (isset($_POST['email']))  {
    //Email information
    $admin_email = "contacto@prosidev.com.ar";
    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = 'From: Contacto <'.$admin_email.'>' . "\r\n" . 
               'MIME-Version: 1.0' . "\r\n" . 
               'Content-type: text/html; charset=UTF-8' . "\r\n"; 

    //send email
    if ( mail($admin_email, $name, $message, $headers) ) {
        echo 1;
    } else {
    	echo 0;
    }
}
?>