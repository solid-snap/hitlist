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
    $showId1->updateshows($showId);                   // vervangt de tabelgegevens voor objectgegevens
    echo "Dit zijn de gewijzigde gegevens: <br/>";
    echo $showId . "<br/>";
    $showId1->afdrukken();                           // drukt object af

    ?>
</div>
</body>
</html>
