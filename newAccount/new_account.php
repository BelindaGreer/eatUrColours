<?php include '../view/header.php';?>

<main>

        <h2>New Account</h2>        
        <form action="." method="post" id="aligned"> 
        <input type="hidden" name="action" value="add_user">
          <label>Username</label>
          <input type="text" name="userName"> </br>
    
          <label>Email</label>
          <input type="email" name="email"> </br> 
   
          <label>Password</label>
          <input type="password" name="password"> </br> 
  
          <label>Confirm password</label>
          <input type="password" name="password_2"> </br>

          <button type="submit" class="btn" name="reg_user">Register</button>

        <p>Already a member? <a href="../userLogin">Sign in</a></p>
  </form>
</main>
<?php include '../view/footer.php'; ?>
