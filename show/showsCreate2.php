<!doctype html>
<html>
    <head>
    </head>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
        <?php
        require "shows.php";
        // uitlezen vakjes van KlantenCreate1 -----
        $showName = $_POST["showNameVak"];
        $showType = $_POST["showTypeVak"];
        $showGenre= $_POST["showGenreVak"];
        $showSeasons= $_POST["showSeasonsVak"];
        $showEpLength = $_POST["showEpLengthVak"];
        $showReview = $_POST["showReviewVak"];
        $showSummary = $_POST["showSummaryVak"];
        // maken object -------------------------------
        $show1 = new shows($showName, $showType, $showGenre, $showSeasons, $showEpLength, $showReview, $showSummary);
        $show1->createshows();

        // afdrukken object ---------------------------

        $show1->afdrukken(); //hallo
        ?>
        <h2><a href="showIndex.php">go back to shows</a></h2>
    </div>
    </body>
</html>
