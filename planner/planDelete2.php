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

    <form action="planDelete3.php" method="post">
        <!-- $studentid mag niet meer gewijzigd worden -->
        <input type="hidden" name="planIdVak" value=" <?php echo $planId ?> ">
        <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
        <input type="hidden" name="verwijderBox" value="nee">
        <input type="checkbox" name="verwijderBox" value="ja">
        <label for="verwijderBox"> Verwijder deze inkooporder.</label><br/><br/>
        <input type="submit"><br/><br/>
    </form>

    <a href="Inkoopordersindex.php"> terug naar het menu.</a>
</div>
</body>
</html>

