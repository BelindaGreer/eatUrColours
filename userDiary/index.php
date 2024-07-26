<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('model/database.php');
require('model/fruit_and_veg_db.php'); 

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'add_fruit_and_veg';
    }
}

if ($action == 'add_fruit_and_veg') {
    // Get product data
    $fruits = get_fruit();
    $veggies = get_veg();
    $purple = get_purple();
    $blue = get_blue();
    $green = get_green();
    $yellow = get_yellow();
    $orange = get_orange();
    $red = get_red();
    $brown = get_brown();
    $white = get_white();
    // Display the product list
    include('add_fruit_and_veg.php');
} 





?>
