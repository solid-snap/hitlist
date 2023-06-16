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
    // gegevens uit de array in variabelen stoppen
    $planId = $_POST["planIdVak"];
    $movId = $_POST["movIdVak"];
    $showId = $_POST["showIdVak"];
    $planName = $_POST["planNameVak"];
    $movieName = $_POST["movieNameVak"];
    $showName = $_POST["showNameVak"];
    $planDate = $_POST["planDateVak"];

    // maken object ---------------------------------------------------
    $planner1 = new planner($movId, $showId, $planName, $movieName, $showName,$planDate); // maakt object
    $planner1->updatePlan($planId);                   // vervangt de tabelgegevens voor objectgegevens
    echo "this is the updated information: <br/>";
    echo $planId . "<br/>";
    $planner1->afdrukken();                           // drukt object af

    ?>
</div>
</body>
</html>
