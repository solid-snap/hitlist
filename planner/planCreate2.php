<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <?php
    require "planner.php";

    // uitlezen vakjes van InkOrdCreate1 -----
    $movId = $_POST["movIdVak"];
    $showId = $_POST["showIdVak"];
    $planName = $_POST["planNameVak"];
    $movieName = $_POST["movieNameVak"];
    $showName = $_POST["showNameVak"];
    $planDate = $_POST["planDateVak"];

    // maken object -------------------------------
    $planner1 = new planner($movId, $showId, $planName, $movieName, $showName, $planDate);
    $planner1->createPlan();

    // afdrukken object ---------------------------

    $planner1->afdrukken();
    ?>
    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</div>
</body>
</html>