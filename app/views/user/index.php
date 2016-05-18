<!DOCTYPE html>
<html>
    <head>
        <title>User - <?= $data["username"]?></title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/home.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button">Home</div></a>
            <a href="/public/movie"><div class="button">Movies</div></a>
            <a href="/public/tvshows"><div class="button">TV-shows</div></a>
            
            <?php require_once '../app/views/modules/login.php'; ?>
        </div>
        <div id="content">
        </div>
    </body>
</html>
