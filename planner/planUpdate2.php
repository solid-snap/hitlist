<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="plannerIndex.php" class="active">go back to planner</a></h2>
    </div>
    <?php

    require "planner.php";                    // needed to make object
    $planId = $_POST["planIdField"];
    $planner1 = new planner();                // making object
    $planner1->searchplan($planId);

    // putting the properties in the variables
    $movId = $planner1->get_movId();
    $showId = $planner1->get_showId();
    $planName = $planner1->get_planName();
    $movieName = $planner1->get_movieName();
    $showName = $planner1->get_showName();
    $planDate = $planner1->get_planDate();
    ?>

    <form action="planUpdate3.php" method="post">
<<<<<<< Updated upstream
        <!-- id cant be canged -->
        <input type="hidden" name="planIdField" value="<?php echo $planId; ?>"><br>
        <input type="text" name="movIdField" value="<?= $movId; ?>"><br>
        <input type="text" name="showIdField" value="<?php echo $showId; ?> "><br>
        <input type="text" name="planNameField" value="<?php echo $planName; ?> "><br><br>
        <input type="text" name="movieNameField" value="<?php echo $movieName; ?> "><br>
        <input type="text" name="showNameField" value="<?php echo $showName; ?> "><br><br>
        <input type="text" name="planDateField" value="<?php echo $planDate; ?> "><br><br>
=======
        <!-- $klantid mag niet meer gewijzigd worden -->
        <input type="hidden" name="planIdVak" value="<?php echo $planId; ?>"><br>
        <input type="text" name="movIdVak" value="<?= $movId; ?>"><br>
        <input type="text" name="showIdVak" value="<?php echo $showId; ?> "><br>
        <input type="text" name="planNameVak" value="<?php echo $planName; ?> "><br>
        <input type="text" name="movieNameVak" value="<?php echo $movieName; ?> "><br>
        <input type="text" name="showNameVak" value="<?php echo $showName; ?> "><br>
        <input type="text" name="planDateVak" value="<?php echo $planDate; ?> "><br>
>>>>>>> Stashed changes
        <input type="submit"><br><br>
    </form>
</div>
</body>
</html>