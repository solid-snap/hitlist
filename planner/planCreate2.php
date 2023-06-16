<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="plannerIndex.php" class="active">go back to planner</a></h2>
    </div>
    <?php
    require "planner.php";

    // reading fields of planCreate -----
    $movId = $_POST["movIdField"];
    $showId = $_POST["showIdField"];
    $planName = $_POST["planNameField"];
    $movieName = $_POST["movieNameField"];
    $showName = $_POST["showNameField"];
    $planDate = $_POST["planDateField"];

    // makes object -------------------------------
    $planner1 = new planner($movId, $showId, $planName, $movieName, $showName, $planDate);
    $planner1->createPlan();

    // print object ---------------------------

    $planner1->afdrukken();
    ?>
</div>
</body>
</html>