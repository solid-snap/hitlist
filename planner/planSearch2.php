<!doctype html>
<html>
<body>
<div id="centercontent">
    <?php
    require "planner.php";
    $planId = $_POST["planIdVak"];
    $planner1 = new planner();
    $planner1->searchplan($planId);
    ?>

    <a href="Artikelenindex.php"> terug naar het menu.</a>
</div>
</body>
</html>