<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="showIndex.php" class="active">go back to show</a></h2>
    </div>
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
    $showId1 = new shows( $showName, $showType, $showGenre, $showSeasons, $showEplength, $showReview, $showSummary); // maakt object
    $showId1->updateshows($showId);                   // vervangt de tabelgegevens voor objectgegevens
    echo "this is the updated information: <br/>";
    echo $showId . "<br/>";
    $showId1->afdrukken();                           // prints

    ?>
</div>
</body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
