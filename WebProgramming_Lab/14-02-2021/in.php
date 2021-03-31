<?php

$data = $_POST;

if (empty($data['user_name']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
    
    die('Please fill all required fields!');
}

if ($data['password'] !== $data['password_confirm']) {
   die('Password and Confirm password should match!');   
}
?>