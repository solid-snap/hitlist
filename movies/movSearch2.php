<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
            <?php
            require "Movies.php";
            $movId = $_POST["movIdField"];
            $mov1 = new Movies();
            $mov1->searchMov($movId);
            ?>
            <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>
