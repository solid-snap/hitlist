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

    require "shows.php";                    // nodig om object te maken
    $showId = $_POST["showId"];
    $showId1 = new shows();                // object aanmaken
    $showId1->searchshows($showId);
    // properties in variabelen zetten
    $showName = $showId1->get_showName();
    $showType = $showId1->get_showType();
    $showGenre = $showId1->get_showGenre();
    $showSeasons = $showId1->get_showSeasons();
    $showEpLength = $showId1->get_showEpLength();
    $showReview = $showId1->get_showReview();
    $showSummary = $showId1->get_showSummary();
    ?>

    <form action="showsUpdate3.php" method="post">
        <!-- $inkordid mag niet meer gewijzigd worden -->
        <input type="hidden" name="showId" value="<?php echo $showId; ?> "><br/>
        <input type="text" name="showName" value="<?php echo $showName; ?> "><br/>
        <input type="text" name="showType" value="<?php echo $showType; ?> "><br/>
        <input type="text" name="showGenre" value="<?php echo $showGenre; ?> "><br/><br/>
        <input type="text" name="showSeasons" value="<?php echo $showSeasons; ?> "><br/>
        <input type="text" name="showEpLength" value="<?php echo $showEpLength; ?> "><br/><br/>
        <input type="text" name="showReview" value="<?php echo $showReview; ?> "><br/><br/>
        <input type="text" name="showSummary" value="<?php echo $showSummary; ?> "><br/><br/>
        <input type="submit"><br/><br/>
    </form>
</div>
</body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
