<?php

function get_fruit() {
    global $db;
    $query = 'SELECT * FROM fruit';
    $statement = $db->prepare($query);
    $statement->execute();
    $fruit = $statement->fetchAll();
    $statement->closeCursor();
    return $fruit;
}

function get_veg() {
    global $db;
    $query = 'SELECT * FROM veg';
    $statement = $db->prepare($query);
    $statement->execute();
    $veg = $statement->fetchAll();
    $statement->closeCursor();
    return $veg;
}

function get_purple(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'purple'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'purple' ";
      $statement = $db->prepare($query);
      $statement->execute();
      $purple = $statement->fetchAll();
      $statement->closeCursor();
      return $purple;
}

function get_blue(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'blue'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'blue'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $blue = $statement->fetchAll();
      $statement->closeCursor();
      return $blue;
  }  

function get_green(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'green'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'green'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $green = $statement->fetchAll();
      $statement->closeCursor();
      return $green;
}

function get_yellow(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'yellow'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'yellow'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $yellow = $statement->fetchAll();
      $statement->closeCursor();
      return $yellow;
}

function get_orange(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'orange'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'orange'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $orange = $statement->fetchAll();
      $statement->closeCursor();
      return $orange;
}

function get_red(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'red'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'red'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $red = $statement->fetchAll();
      $statement->closeCursor();
      return $red;
}

function get_brown(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'brown'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'brown'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $brown = $statement->fetchAll();
      $statement->closeCursor();
      return $brown;
}

function get_white(){
    global $db;
      $query = "SELECT fruitName FROM fruit
                WHERE colour = 'white'
                UNION
                SELECT vegName FROM veg
                WHERE colour = 'white'  ";
      $statement = $db->prepare($query);
      $statement->execute();
      $white = $statement->fetchAll();
      $statement->closeCursor();
      return $white;
}