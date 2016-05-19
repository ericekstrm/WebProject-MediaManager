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

            <?php require_once '../app/modules/login.php'; ?>
        </div>
        
        <div id="content">
            <?php foreach ($data as $movie) { ?>
                <div class="movie_tile">
                    <img onclick="window.location='movie/<?=$movie["imdbID"]?>'" src="<?=$movie["Poster"]?>">
                    <?php if (isset($_SESSION["loggedIn"])) { ?>
                        <div class="watch" id="<?=$movie["imdbID"]?>" onclick="ajax(this.id)"></div>
                    <?php } ?>
                </div>
            <?php }?>
        </div>
        <script type="text/javascript">
            function ajax(id) {
                var xmlhttp = new XMLHttpRequest();
            
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById(id).style.backgroundImage = "url('/public/images/checked.png')";
                        console.log(xmlhttp.responseText);
                    }
                };
                xmlhttp.open("GET", "/public/ajax/setseen/" + id, true);
                xmlhttp.send();
            }
        </script>
    </body>
</html>
