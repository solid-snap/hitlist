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
            $movId = $_POST["movIdField"];
            $mov1 = new Movies();
            $mov1->searchMov($movId);
            ?>
    </div>
    </body>
    <footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
