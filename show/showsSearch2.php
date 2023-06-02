
<!doctype html>
<html>
<!--  -->
<head>
    <title>SearchStudentFormulier2</title>
</head>
<body>
<h1>search student formulier 2 </h1>
<?php
require "shows.php";
$showId = $_POST["showIdVak"];
$show1 = new shows();
$show1->searchshows($showId);
?>
</body>
</html>
