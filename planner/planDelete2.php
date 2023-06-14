<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <?php
    require "planner.php";
    $planId = $_POST["planIdVak"];
    $planner1 = new planner();
    $planner1->searchplan($planId);
    ?>

    <form action="planDelete3.php" method="post">
        <!-- $studentid mag niet meer gewijzigd worden -->
        <input type="hidden" name="planIdVak" value=" <?php echo $planId ?> ">
        <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
        <input type="hidden" name="verwijderBox" value="nee">
        <input type="checkbox" name="verwijderBox" value="ja">
        <label for="verwijderBox"> Remove this plan.</label><br/><br/>
        <input type="submit"><br/><br/>
    </form>
    <h2><a href="plannerIndex.php">go back to planner</a></h2>
</div>
</body>
</html>

