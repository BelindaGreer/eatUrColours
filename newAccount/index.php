<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../model/database.php');
require('../model/user_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'create_new_account';
    }
}

if ($action == 'create_new_account') {    
    include('new_account.php');
} else if ($action == 'add_user') {
    $user_name = filter_input(INPUT_POST, 'userName');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password_2');

    // Validate the inputs
    if ($user_name === ''){
        $error = "User Name is required.";
        include('../errors/error.php');
    } else if ($email === FALSE) {
        $error = "Email address is not valid or empty.";
        include('../errors/error.php');
    } else if ($password === '' ) {
         $error = "Password is required.";
         include('../errors/error.php');
    } else if ($password != $password2){
        $error = "Confirmed password does not match.";
        include('../errors/error.php');
    } else {
 
    add_user($user_name, $email, $password);
    include('new_account.php');

    }


}

    // Validate password strength
   /* $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }else{
        echo 'Strong password.';
    }
    */
    
    
    /*To do list
        1. validate username
        2. validate email
        3. secure+validate password

            */





?>


