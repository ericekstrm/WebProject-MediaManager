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
                    <?="<img src='" . $data[0]["Poster"] . "' id='poster'>"?>
                    <div id="titlebox">
                        <?="<h1>" . $data[0]["Title"] . " (" . $data[0]["Year"] . ")</h1>"?>
                        <hr>
                        <?="<h2>" . $data[0]["Runtime"] . " | " . $data[0]["ReleaseDate"] . "</h2>"?>
                    </div>
                    <div id="plot">
                        <?="<p>" . $data[0]["Plot"] . "</p>"?>
                    </div>
                </div>
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
        </div>
    </body>
</html>
