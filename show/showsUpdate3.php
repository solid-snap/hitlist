<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo">
    <?php
    require "shows.php";

    // gegevens uit de array in variabelen stoppen
    $showId = $_POST["showIdVak"];
    $showName = $_POST["showNameVak"];
    $showType = $_POST["showTypeVak"];
    $showGenre = $_POST["showGenreVak"];
    $showSeasons = $_POST["showSeasonsVak"];
    $showEplength = $_POST["showEpLengthVak"];
    $showReview = $_POST["showReviewVak"];
    $showSummary = $_POST["showSummaryVak"];
    // maken object ---------------------------------------------------
    $showId1 = new shows($showId, $showName, $showType, $showGenre, $showSeasons, $showEplength, $showReview, $showSummary); // maakt object
    $showId1->updateshows($showId);                   // vervangt de tabelgegevens voor objectgegevens
    echo "this is the updated information: <br/>";
    echo $showId . "<br/>";
    $showId1->afdrukken();                           // drukt object af

    ?>
    <h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>
