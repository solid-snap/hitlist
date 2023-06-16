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
    $planId = $_POST["planIdField"];
    $planner1 = new planner();
    $planner1->searchplan($planId);
    ?>

    <form action="planDelete3.php" method="post">
        <!-- $id cant be changed anymore -->
        <input type="hidden" name="planIdVak" value=" <?php echo $planId ?> ">
        <!-- 2x deleteBox for yes or no to continue -->
        <input type="hidden" name="deleteBox" value="nee">
        <input type="checkbox" name="deleteBox" value="ja">
        <label for="deleteBox"> Remove this plan.</label><br/><br/>
        <input type="submit"><br/><br/>
    </form>
</div>
</body>
</html>

