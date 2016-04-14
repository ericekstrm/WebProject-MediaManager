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
            <form>
                <input type="text" name="user"    placeholder="Username" required>
                <br>
                <input type="text" name="email"   placeholder="E-Mail" required>
                <br>
                <input type="text" name="pass"    placeholder="password" required>
                <br>
                <input type="text" name="cpass" placeholder="confirm password" required>
                <br>
                <input type="submit" value="Register">
            </form>
        </div>
    </body>
</html>
