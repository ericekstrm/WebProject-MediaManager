<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data[0]["Title"]?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/movie.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div>Home</div></a>
            <a href="/public/movie"><div id="current">Movies</div></a>
            <a href="/public/tvshows"><div>TV-shows</div></a>
            <a id="login"><div>Login</div></a>
        </div>
        <div id="wrapper">
            <div id="content">
                <div id="topbox">
                    <img src=' <?= $data[0]["Poster"]?> ' id='poster'>
                    <div id="titlebox">
                        <h1> <?= $data[0]["Title"] . " (" . $data[0]["Year"]?> )</h1>
                        <hr>
                        <h2> <?= $data[0]["Runtime"] . " | " . $data[0]["ReleaseDate"] . "</h2>"?>
                    </div>
                    <div id="plot">
                        <p> <?= $data[0]["Plot"]?> </p>
                    </div>
                </div>
                <div id="ratings">
                    <h2>Ratings</h2>
                    <ul>
                        <li>imdbRating: <?= $data[0]["imdbRating"]?>/10</li>
                        <li>Metascore: <?= $data[0]["Metascore"]?>/100</li>
                        <li>User Score <?= $data[0]["rating"] + 1?>/5</li>
                    </ul>
                </div>
                <div id="people">
                <h2>People</h2>
                    <ul>
                        <li>Actors: <?= $data[0]["Actors"]?></li>
                        <li>Writers: <?= $data[0]["Writer"]?></li>
                        <li>Director: <?= $data[0]["Director"]?></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
