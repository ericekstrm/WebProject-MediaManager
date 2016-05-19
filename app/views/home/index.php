<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/home.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button current">Home</div></a>
            <a href="/public/movie"><div class="button">Movies</div></a>
            <a href="/public/tvshows"><div class="button">TV-shows</div></a>

            <?php require_once '../app/modules/login.php'; ?>
        </div>
        
        <div id="content">
            <h1>Top Movies</h1>
            <div id="topList">
                <?php
                foreach ($data as $movie) {
                   echo "<div class='movie_tile'>";
                   echo "<a href='movie/" . $movie["imdbID"] . "'>";
                   echo "<img src='" . $movie["Poster"] . "' width='200' height='300'>";
                   echo "</a></div>";
                }
                ?>
            </div>
            <h1>Top TV-Shows (Work in Progress)</h1>
            <div id="topList">
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
    </body>
</html>
