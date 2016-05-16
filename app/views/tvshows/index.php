<!DOCTYPE html>
<html>
    <head>
        <title>TV-Shows</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/home.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div>Home</div></a>
            <a href="/public/movie"><div>Movies</div></a>
            <a href="/public/tvshows"><div id="current">TV-shows</div></a>

            <?php
            if (isset($_SESSION["loggedIn"])) {
                echo "<a id='login' onclick='toggleDialog()'><div>" . $_SESSION["loggedIn"] . "</div></a>";
            } else {
                echo "<a id='login' onclick='toggleDialog()'><div>Login</div></a>";
            }
            ?>
        </div>
        
        <div id="content">
            <h1>Det finns inga serier för tillfället, fuck off</h1>
        </div>

        <div id="loginBox">
            <form method="POST">
                <?php 
                if (isset($_SESSION["loggedIn"])) {
                    echo "<input type='submit'   name='logout'   value='Logout'>";
                } else {
                    echo "<input type='text'     name='user'  placeholder='Username'>";
                    echo "<input type='password' name='pass'  placeholder='Password'>";
                    echo "<input type='submit'   name='login' value='Login'>";
                    echo "<input type='submit'   name='reg'   value='Register'>"; 
                    echo "<br>";
                    echo "<a href='#'>Forgot password?</a>";
                } ?>
            </form>
        </div>
        <div>
        
        <div id="lightBox" onclick="toggleDialog()"></div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript">
           function toggleDialog() {
               if ($("#loginBox").css("display") === "none") {
                   $("#loginBox").css("display", "initial");
                   $("#lightBox").css("display", "initial");
               } else {
                   $("#loginBox").css("display", "none");
                   $("#lightBox").css("display", "none");
               }
           }
        </script>
    </body>
</html>
