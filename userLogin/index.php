<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../model/database.php');
require('../model/user_db.php'); 

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'user';
    }
}

if ($action == 'user') {
    include('login.php');
}else if ($action == 'login') {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $user = get_user_by_email($email);
    $checkEmail = (!empty($email));
    $checkPassword = (is_valid_user_login($email, $password));        
    

    if ($checkEmail && $checkPassword) {        
  
       // $logged_in_message = 'You are logged in as ' . $email . ".";
        // Display User Diary
        include('../userDiary/add_fruit_and_veg.php');          
    } else {
        $error = 'Incorrect email or password.';
        require('../errors/error.php');
    }

} 





?>
