<!doctype html>
<html>
<body>
<link rel="stylesheet" href="HitList2.css">
<div class="pageInfo">
    <?php
    require "planner.php";
    // putting the info from the array into the variable
    $planId = $_POST["planIdField"];
    $movId = $_POST["movIdField"];
    $showId = $_POST["showIdField"];
    $planName = $_POST["planNameField"];
    $movieName = $_POST["movieNameField"];
    $showName = $_POST["showNameField"];
    $planDate = $_POST["planDateField"];

    // object ---------------------------------------------------
    $planner1 = new planner($movId, $showId, $planName, $movieName, $showName,$planDate); // makes object
    $planner1->updatePlan($planId);                   // replaces de tableinfo fo objectinfo
    echo "this is the updated information: <br/>";
    echo $planId . "<br/>";
    $planner1->afdrukken();                           // prints

    ?>
    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</div>
</body>

</html>
