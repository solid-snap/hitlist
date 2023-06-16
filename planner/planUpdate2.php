<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="plannerIndex.php" class="active">go back to planner</a></h2>
    </div>
    <?php

    require "planner.php";                    // nodig om object te maken
    $planId = $_POST["planIdVak"];
    $planner1 = new planner();                // object aanmaken
    $planner1->searchplan($planId);

    // properties in variabelen zetten
    $movId = $planner1->get_movId();
    $showId = $planner1->get_showId();
    $planName = $planner1->get_planName();
    $movieName = $planner1->get_movieName();
    $showName = $planner1->get_showName();
    $planDate = $planner1->get_planDate();
    ?>

    <form action="planUpdate3.php" method="post">
        <!-- $klantid mag niet meer gewijzigd worden -->
        <input type="hidden" name="planIdVak" value="<?php echo $planId; ?>"><br>
        <input type="text" name="movIdVak" value="<?= $movId; ?>"><br>
        <input type="text" name="showIdVak" value="<?php echo $showId; ?> "><br>
        <input type="text" name="planNameVak" value="<?php echo $planName; ?> "><br><br>
        <input type="text" name="movieNameVak" value="<?php echo $movieName; ?> "><br>
        <input type="text" name="showNameVak" value="<?php echo $showName; ?> "><br><br>
        <input type="text" name="planDateVak" value="<?php echo $planDate; ?> "><br><br>
        <input type="submit"><br><br>
    </form>
</div>
</body>
</html>