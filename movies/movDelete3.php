<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="movieIndex.php" class="active">go back to movies</a></h2>
        </div>
            <?php
            require "Movies.php";

            $movId = $_POST["movIdVak"];
            $verwijderen = $_POST["verwijderBox"];

            if ($verwijderen == "ja") {
                echo "This movie has been deleted <br/>";
                $mov1 = new Movies();
                $mov1->deleteMov($movId);
            } else {
                echo "This movie hasn't been deleted. <br/>";
            }
            ?>

    </body>
</html>
