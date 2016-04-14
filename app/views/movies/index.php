<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/movies.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div>Home</div></a>
            <a href="/public/movie"><div id="current">Movies</div></a>
            <a href="/public/tvshows"><div>TV-shows</div></a>
            <a id="login"><div>Login</div></a>
        </div>
        <div id="content">
            <?php 
            foreach ($data as $movie) {
                echo "<div class='movie_tile'>";
                echo "<a href='movie/" . $movie["imdbID"] . "'>";
                echo "<img src='" . $movie["Poster"] . "' width='200' height='300'>";
                echo "</div>";
            }?>
        </div>
    </body>
</html>
