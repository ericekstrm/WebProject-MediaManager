<html>
    <head>
        <title>Users</title>
    </head>
    <body>
        <?php 
        
        foreach ($data as $user) {
            echo "<h1>" . $user['id'] . " " . $user['username'] . "</h1>";
            echo "<p>" . $user['password'] . "</p>";
        }?>
    </body>
</html>
