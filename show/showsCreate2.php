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

        $show1->afdrukken();
        ?>
    </body>
</html>
