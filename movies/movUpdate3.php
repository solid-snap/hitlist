<!doctype html>
<html>
    <head>
    </head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <?php
        require "Movies.php";
        // info from the array into the variables
        $movId = $_POST["movIdField"];
        $movName = $_POST["movNameField"];
        $movType = $_POST["movTypeField"];
        $movGenre = $_POST["movGenreField"];
        $movLength = $_POST["movLengthField"];
        $movReview = $_POST["movReviewField"];
        $movSummary = $_POST["movSummaryField"];

        // making an object ---------------------------------------------------
        $mov1 = new Movies($movName, $movType, $movGenre, $movLength, $movReview, $movSummary); // makes object
        $mov1->updateMov($movId);		           // changes the tableinfo voor objectinfo
        echo "This is the updated information: <br/>";
        echo $movId ."<br/>";
        $mov1->afdrukken();	                       // drukt object af

        ?>
    <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>

