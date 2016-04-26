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
                    <img src=' <?= $data["movie"]["Poster"]?> ' id='poster'>
                    <div id="titlebox">
                        <h1> <?= $data["movie"]["Title"] . " (" . $data[0]["Year"]?> )</h1>
                        <hr>
                        <h2> <?= $data["movie"]["Runtime"] . " | " . $data[0]["ReleaseDate"] . "</h2>"?>
                    </div>
                    <div id="plot">
                        <p> <?= $data["movie"]["Plot"]?> </p>
                    </div>
                </div>
                <div id="ratings">
                    <h2>Ratings</h2>
                    <ul>
                        <li>imdbRating: <?= $data["movie"]["imdbRating"]?>/10</li>
                        <li>Metascore: <?= $data["movie"]["Metascore"]?>/100</li>
                        <li>User Score <?= $data["movie"]["rating"] + 1?>/5</li>
                    </ul>
                </div>
                <div id="people">
                <h2>People</h2>
                    <ul>
                        <li>Actors: <?= $data["movie"]["Actors"]?></li>
                        <li>Writers: <?= $data["movie"]["Writer"]?></li>
                        <li>Director: <?= $data["movie"]["Director"]?></li>
                    </ul>
                </div>
                <div id="comments">
                    <?php if (isset($_SESSION["loggedIn"])) : ?>
                    <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Share your thoughts..."></textarea>
                    <form method="POST">
                        <input type="hidden"   name="user"    value="">
                        <input type="hidden"   name="imdbID"  value="">
                        <input type='submit'   name='submit'     value='Submit'>
                    </form>
                    <?php endif;
                    foreach($data["comments"] as $comment) {
                        echo $comment["message"];
                    }?>
                </div>
            </div>
        </div>
    </body>
</html>
