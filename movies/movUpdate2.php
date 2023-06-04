<!doctype html>
<html>
<!-- Victoria Hoogeveen -->
<head>
    <title>Update Movies Formulier 2</title>
</head>
    <body>
    <h1>Update Movies Formulier 2</h1>

        <?php

        require "Movies.php";					// nodig om object te maken
        $movId = $_POST["movIdVak"];
        $mov1 = new Movies();				// object aanmaken
        $mov1->searchMov($movId);

        // properties in variabelen zetten
        $movName = $mov1->get_movName();
        $movType = $mov1->get_movType();
        $movGenre = $mov1->get_movGenre();
        $movLength = $mov1->get_movLength();
        $movReview = $mov1->get_movReview();
        $movSummary = $mov1->get_movSummary();
        ?>

        <form action="movUpdate3.php" method="post">
            <!-- $klantid mag niet meer gewijzigd worden -->
            <input type="hidden" name="movIdVak" value="<?php echo $movId;?>"><br>
            <input type="text"   name="movNameVak"      value="<?=$movName;?>"><br>
            <input type="text"   name="movTypeVak"  value="<?php echo $movType;  ?> "><br>
            <input type="text"   name="movGenreVak" value="<?php echo $movGenre;  ?> "><br><br>
            <input type="text"   name="movLengthVak"  value="<?php echo $movLength;  ?> "><br>
            <input type="text"   name="movReviewVak" value="<?php echo $movReview;  ?> "><br><br>
            <input type="text"   name="movSummaryVak" value="<?php echo $movSummary;  ?> "><br><br>
            <input type="submit"><br><br>
        </form>
    <h2><a href="movieIndex.php">go back to movies</a></h2>
    </body>
</html>
