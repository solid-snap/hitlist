<!doctype html>
<html>
<!--  -->
    <head>
        <title>shows Create 2</title>
    </head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="showIndex.php" class="active">go back to show</a></h2>
        </div>
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
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
