<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data[0]["Title"]?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/movie.css">

        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
        
        <script type="text/javascript" src="/public/js/ajax.js"></script>
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button">Home</div></a>
            <a href="/public/movie"><div class="button current">Movies</div></a>
            <a href="/public/tvshows"><div class="button">TV-shows</div></a>
            
            <?php require_once '../app/modules/login.php'; ?>
        </div>
        <div id="wrapper">
            <div id="content">
                <div id="topbox">
                    <img src=' <?= $data["movie"]["Poster"]?> ' id='poster'>
                    <div id="titlebox">
                        <h1> <?= $data["movie"]["Title"] . " (" . $data["movie"]["Year"]?> )</h1>
                        <hr>
                        <h2> <?= $data["movie"]["Runtime"] . " | " . $data["movie"]["ReleaseDate"] . "</h2>"?>
                    </div>
                    <div id="plot">
                        <p> <?= $data["movie"]["Plot"]?> </p>
                    </div>
                    <?php if (isset($_SESSION["loggedIn"])) {
                        if ($data["view"]) {
                            echo '<div class="watched">Watched</div>';
                        } else {
                            echo '<div class="watch" id="' . $movie["imdbID"] . '" onclick="setseen(this.id)">Watch</div>';
                        }
                    } ?>
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
                    <?php if (isset($_SESSION["loggedIn"])) { ?>
                    <textarea rows="4" cols="50" name="message" form="commentform" placeholder="Share your thoughts..."></textarea>
                    <form method="POST" id="commentform">
                        <input type="hidden"   name="user"    value="">
                        <input type="hidden"   name="imdbID"  value="">
                        <input type='submit'   name='submit'     value='Submit'>
                    </form>
                    <?php } else { ;?>
                        <p>login to leave a comment</p>
                    <?php }
                    foreach($data["comments"] as $comment) {
                        echo "<div id='comment'><p>";
                        echo $comment["message"];
                        echo "</p></div>";
                    }?>
                </div>
            </div>
        </div>
    </body>
</html>
