<!doctype html>
<html>

<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="movieIndex.php" class="active">go back to movies</a></h2>
        </div>

        <?php

        require "Movies.php";					// neccessary to make an object
        $movId = $_POST["movIdField"];
        $mov1 = new Movies();				// making the object
        $mov1->searchMov($movId);

        // properties in variables
        $movName = $mov1->get_movName();
        $movType = $mov1->get_movType();
        $movGenre = $mov1->get_movGenre();
        $movLength = $mov1->get_movLength();
        $movReview = $mov1->get_movReview();
        $movSummary = $mov1->get_movSummary();
        ?>

        <form action="movUpdate3.php" method="post">
            <!-- $klantid cant be changed anymore -->
            <input type="hidden" name="movIdVak" value="<?php echo $movId;?>"><br>
            <input type="text"   name="movNameVak"  value="<?php echo $movName;?>"><br>
            <input type="text"   name="movTypeVak"  value="<?php echo $movType;  ?> "><br>
            <input type="text"   name="movGenreVak" value="<?php echo $movGenre;  ?> "><br>
            <input type="text"   name="movLengthVak"  value="<?php echo $movLength;  ?> "><br>
            <input type="text"   name="movReviewVak" value="<?php echo $movReview;  ?> "><br>
            <input type="text"   name="movSummaryVak" value="<?php echo $movSummary;  ?> "><br>
            <input type="submit"><br>

        </form>
    </div>
    </body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
