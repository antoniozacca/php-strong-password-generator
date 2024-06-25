<?php
function generate_password($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_[]{}<>~`+=,.;:/?|';
    $password = '';
    $characters_length = strlen($characters);
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $characters_length - 1)];
    }
    
    return $password;
}
?>