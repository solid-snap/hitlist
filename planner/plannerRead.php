
<!DOCTYPE html>
<html lang="en">
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="plannerIndex.php" class="active">go back to planner</a></h2>
    </div>
<h1>All the Plans</h1>
<?php
require "planner.php";
$planner1 = new planner();
$planner1->readPlan();

?>

</div>
</body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>