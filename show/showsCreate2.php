<!doctype html>
<html>
<!--  -->
    <head>
        <title>shows Create 2</title>
    </head>
    <body>
    <h1>shows Create 2</h1>
        <?php
        require "shows.php";
        // reads the fields of showsCreate -----
        $showName = $_POST["showNameField"];
        $showType = $_POST["showTypeField"];
        $showGenre= $_POST["showGenreField"];
        $showSeasons= $_POST["showSeasonsField"];
        $showEpLength = $_POST["showEpLengthField"];
        $showReview = $_POST["showReviewField"];
        $showSummary = $_POST["showSummaryField"];
        // makes object -------------------------------
        $show1 = new shows($showName, $showType, $showGenre, $showSeasons, $showEpLength, $showReview, $showSummary);
        $show1->createshows();

        // prints object ---------------------------

        $show1->afdrukken(); //hallo
        ?>
    </body>
</html>
