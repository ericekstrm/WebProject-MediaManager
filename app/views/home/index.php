<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/home.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div id="current">Home</div></a>
            <a href="/public/movie"><div>Movies</div></a>
            <a href="/public/tvshows"><div>TV-shows</div></a>

            <a id="login" onclick="toggleDialog()"><div>Login</div></a>
        </div>
        <div id="content">
            <h1>Top Movies</h1>
            <div id="topMovies">
                <?php
                foreach ($data as $movie) {
                   echo "<div class='movie_tile'>";
                   echo "<a href='movie/" . $movie["imdbID"] . "'>";
                   echo "<img src='" . $movie["Poster"] . "' width='200' height='300'>";
                   echo "</a></div>";
                }
                ?>
            </div>
            <h1>Top TV-Shows</h1>
            <div id="topMovies">
                <?php
                foreach ($data as $movie) {
                   echo "<div class='movie_tile'>";
                   echo "<a href='movie/" . $movie["imdbID"] . "'>";
                   echo "<img src='" . $movie["Poster"] . "' width='200' height='300'>";
                   echo "</a></div>";
                }
                ?>
            </div>
        </div>
        <div id="loginBox">
            <form method="POST">
                <input type="text"     name="user"  placeholder="Username">
                <input type="password" name="pass"  placeholder="Password">
                <input type="submit"   name="login" value="Login">
                <input type="submit"   name="reg"   value="Register">
                <br>
                <a href="#">Forgot password?</a>
            </form>
        </div>
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
