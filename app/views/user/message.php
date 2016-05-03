<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/home.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div id="current">Home</div></a>
            <a href="/public/movie"><div>Movies</div></a>
            <a href="/public/tvshows"><div>TV-shows</div></a>
        </div>
        <div id="content">
            <h1><?= $data ?></h1>
            <p>Go <a href="../home/">back to the start page</a> to log in</p>
        </div>
    </body>
</html>
