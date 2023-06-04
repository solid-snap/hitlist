<!doctype html>
<html>
<body>
    <?php
    require "planner.php";
    $planId = $_POST["planIdVak"];
    $planner1 = new planner();
    $planner1->searchplan($planId);
    ?>
    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</body>
</html>