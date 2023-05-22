<!doctype html>
<html>
<body>
<div id="centercontent">
    <h1>update student formulier 3</h1>


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
    echo "Dit zijn de gewijzigde gegevens: <br/>";
    echo $planId . "<br/>";
    $planner1->afdrukken();                           // drukt object af

    ?>
</div>

</body>

</html>
