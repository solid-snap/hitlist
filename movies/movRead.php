<!DOCTYPE html>
<html lang="en">
    <body>
    <h1>All the movies</h1>
        <?php
        require "Movies.php";
        $mov1 = new Movies();
        $mov1->readMov();
        ?>
        <h2><a href="movieIndex.php">go back to movies</a></h2>
    </body>
</html>
