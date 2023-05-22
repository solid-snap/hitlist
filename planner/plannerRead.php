
<!DOCTYPE html>
<html lang="en">
<body>

<div id="centercontent">
<p>Alle gegevens van de inkooporders:</p>
<?php
require "planner.php";
$planner1 = new planner();
$planner1->readPlan();

?>
</div>
</body>
</html>