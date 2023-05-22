<!doctype html>
<html>
<!---->
<head>
    <title>update shows formulier 3</title>
</head>
<body>
<?php

?>
<div id="centercontent">
    <h1>update shows formulier 3</h1>

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
    echo "Dit zijn de gewijzigde gegevens: <br/>";
    echo $showId . "<br/>";
    $showId1->afdrukken();                           // drukt object af

    ?>
</div>
</body>
</html>
