<!doctype html>
<html>
<body>
    <?php
    require "planner.php";

    $planId = $_POST["planIdVak"];
    $verwijderen = $_POST["verwijderBox"];

    if ($verwijderen == "ja") {
        echo "the plan is removed <br/>";
        $planner1 = new planner();
        $planner1->deletePlan($planId);
    } else {
        echo "the plan isn't removed <br/>";
    }
    ?>

    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</body>
</html>
