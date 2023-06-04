
<!DOCTYPE html>
<html lang="en">
<body>

<h1>All the Plans</h1>
<?php
require "planner.php";
$planner1 = new planner();
$planner1->readPlan();

?>
<h2><a href="plannerIndex.php">go back to planner</a></h2>
</body>
</html>