<!DOCTYPE html>
<html>
    <head>
        <title>TV-Shows</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button">Home</div></a>
            <a href="/public/movie"><div class="button">Movies</div></a>
            <a href="/public/tvshows"><div class="button current">TV-shows</div></a>

            <?php require_once '../app/modules/login.php'; ?>            
        </div>
        
        <div id="content">
            <h1>Det finns inga serier för tillfället</h1>
        </div>
    </body>
</html>
