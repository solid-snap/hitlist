<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <?php
    require "planner.php";
    $planId = $_POST["planIdField"];
    $planner1 = new planner();
    $planner1->searchplan($planId);
    ?>
    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</div>
</body>
</html>