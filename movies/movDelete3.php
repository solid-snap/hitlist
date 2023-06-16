<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
            <?php
            require "Movies.php";

            $movId = $_POST["movIdField"];
            $delete = $_POST["deleteBox"];

            if ($delete == "ja") {
                echo "This movie has been deleted <br/>";
                $mov1 = new Movies();
                $mov1->deleteMov($movId);
            } else {
                echo "This movie hasn't been deleted. <br/>";
            }
            ?>
            <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>
