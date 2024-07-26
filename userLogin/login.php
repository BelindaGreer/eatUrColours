<?php include '../view/header.php';?>

<main>
<img class="left" src="rainbowAndKids.jpg">
<div class="right">
    <h2>Welcome</h2>
  
			<h1>Login</h1>
			<form action="." method="post">
       		 <input type="hidden" name="action" value="login">
				<div class="login">
				<label>Email:</label>
				<input type="text" name="email" required></br>

				<label> Password:</label>
				<input type="password" name="password" required></br>

				<input type="submit" value="login">
				</div>
			</form>

</br>

        <li><a href="../newAccount">Create Account</a></li>
	</div>
		
</main>
<?php include '../view/footer.php'; ?>