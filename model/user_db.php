<?php
function add_user($user_name,$email, $password) {
  try{
    global $db;
    $query = 'INSERT INTO users
               (userName, email, password)
              VALUES
                 (:user_name, :email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
    //To catch if the code is unique or not.
    } catch (PDOException $e) {
           if ($e->errorInfo[1] == 1062){
            $error_message = $e->getMessage();
            $error = "A user with that account already exists.";
            include('../errors/error.php');
            exit();
        }
    }
}

function get_user_by_email($email) {
  global $db;
  $query = 'SELECT id, userName, email FROM users
        WHERE email = :email';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $customer = $statement->fetchAll();
  $statement->closeCursor();
  return $customer;
}

function is_valid_user_login($email, $password) {
  global $db;
  $query = 'SELECT password FROM users
            WHERE email = :email';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $row = $statement->fetch();
  $statement->closeCursor();
  
  if ($row !== false && isset($row['password']) && $row['password'] == $password) {
      return true;
  } else {
      return false;
  }
}



?>