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
    $planId = $_POST["planIdVak"];
    $planner1 = new planner();
    $planner1->searchplan($planId);
    ?>
</div>
</body>
</html>