<!doctype html>
<html>
<body>
<div id="centercontent">
    <a href="Inkoopordersindex.php">Terug naar het hoofdmenu</a>
    <?php
    require "planner.php";

    $planId = $_POST["planIdVak"];
    $verwijderen = $_POST["verwijderBox"];

    if ($verwijderen == "ja") {
        echo "De student is inkooporder <br/>";
        $planner1 = new planner();
        $planner1->deletePlan($planId);
    } else {
        echo "De inkooporder is niet verwijderd <br/>";
    }
    ?>
</div>

</body>
</html>
