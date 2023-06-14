<!DOCTYPE html>
<html lang="en">
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
    <h1>All the movies</h1>
        <?php
        require "Movies.php";
        $mov1 = new Movies();
        $mov1->readMov();
        ?>
        <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>
