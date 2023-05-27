<!doctype html>
<html>
<body>

<div id="centercontent">
    <h1>InkoopOrders Create 2</h1>

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
</div>
</body>
</html>