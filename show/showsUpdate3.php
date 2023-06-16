<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo">
    <?php
    require "shows.php";

    // info from the array into the variables
    $showId = $_POST["showId"];
    $showName = $_POST["showName"];
    $showType = $_POST["showType"];
    $showGenre = $_POST["showGenre"];
    $showSeasons = $_POST["showSeasons"];
    $showEplength = $_POST["showEpLength"];
    $showReview = $_POST["showReview"];
    $showSummary = $_POST["showSummary"];
    // maken object ---------------------------------------------------
    $showId1 = new shows($showId, $showName, $showType, $showGenre, $showSeasons, $showEplength, $showReview, $showSummary); // maakt object
    $showId1->updateshows($showId);                   // changes the tableinfo to object info
    echo "this is the updated information: <br/>";
    echo $showId . "<br/>";
    $showId1->afdrukken();                           // prints

    ?>
    <h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>
