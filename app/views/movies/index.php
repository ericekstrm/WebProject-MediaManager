<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/movies.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button">Home</div></a>
            <a href="/public/movie"><div class="button current">Movies</div></a>
            <a href="/public/tvshows"><div class="button">TV-shows</div></a>

            <?php require_once '../app/views/modules/login.php'; ?>
        </div>
        
        <div id="content">
            <?php foreach ($data as $movie) { ?>
                <div class="movie_tile">
                <a href="movie/<?=$movie["imdbID"]?>">
                    <img src="<?=$movie["Poster"]?>" width="200" height="300">
                </a>
                <a href="/public">
                    <div class="watch">set seen</div>
                </a>
                </div>
            <?php }?>
        </div>
    </body>
</html>
