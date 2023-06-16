<!DOCTYPE html>
<html lang="en">
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="movieIndex.php" class="active">go back to movies</a></h2>
        </div>
    <h1>All the movies</h1>
        <?php
        require "Movies.php";
        $mov1 = new Movies();
        $mov1->readMov();
        ?>
    </div>
    </body>
    <footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
