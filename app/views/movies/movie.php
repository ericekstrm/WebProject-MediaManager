<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data[0]["Title"]?></title>
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
            echo "<img src='" . $data[0]["Poster"] . "' width='150' height='225'>";
            echo "<h1>" . $data[0]["Title"] . " (" . $data[0]["Year"] . ")</h1>";
            ?>
            <h2>Ratings</h2>
            <ul>
                <li>imdb</li>
                <li>metascore</li>
                <li>user score</li>
            </ul>
            <h2>People</h2>
            <ul>
                <li>actors</li>
                <li>writers</li>
                <li>director</li>
            </ul>
        </div>
    </body>
</html>
