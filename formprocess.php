<?php

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

print_r ( $firstName. '<br>'.$lastName . '<br>'. $email . '<br>'. $message );

if ( isset( $_POST['first_name'] ) )
 {
    $data = 'First name: '. $_POST['first_name'].'\n'.
    'Last name: '. $_POST['last_name'].'\n'.
    'email: '. $_POST['email'].'\n'.
    'Message: '. $_POST['message'].'\n';

    $fp = fopen( $_POST['first_name']. ' '.  $_POST['last_name']. ' '. time(). '.txt', 'a' );
    fwrite( $fp, $data );
    fclose( $fp );

}
?>