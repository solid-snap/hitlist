<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <?php
    require "planner.php";

    $planId = $_POST["planIdField"];
    $delete = $_POST["deleteBox"];

    if ($delete == "ja") {
        echo "the plan is removed <br/>";
        $planner1 = new planner();
        $planner1->deletePlan($planId);
    } else {
        echo "the plan isn't removed <br/>";
    }
    ?>

    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</div>
</body>
</html>
