<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
            <?php
            require "Movies.php";
            $movId = $_POST["movIdVak"];
            $mov1 = new Movies();
            $mov1->searchMov($movId);
            ?>
            <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>
