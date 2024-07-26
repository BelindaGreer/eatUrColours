<!-- the head section -->
<head>
    <title>Rainbow Makers</title>
    <link rel="stylesheet" type="text/css" href="/EatUrColours/main.css">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
</head>

<!-- the body section -->
<body>
<header>
    
    <button class="home"><a onclick="window.location.href='../index.php'">Home</a></button>
    <h1 class="welcome-h1">Rainbow Makers</h1></br>
    <h2  class="welcome-h2">Eat Ur Colours</h2>
    <hr>
    <p class="welcome-p">Encouraging children to eat a fruit and vegetable rainbow every day</p>
  
</header>
<img class="welcome-bg" src="rainbowPlate.jpg">

<main>

    <div class="container">
        <button class="welcomeButton" onclick="window.location.href='userLogin'">Login</button>
        <button class="welcomeButton" onclick="window.location.href='newAccount'">New User</button>
    </div>

</main>
<footer >
    <p> Feature Photo: 
    <a href="https://www.pexels.com/photo/healthy-food-ingredients-on-a-ceramic-plate-5966432/">
        Vanessa Loring</a> 
        from <a href="https://www.pexels.com">Pexels</a> </p>
    <p class="copyright">
        &copy; <?php echo date("Y"); ?> Belinda Greer
    </p>
</footer>
</body>
</html>