
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
require "connect.php";
$showId = $_POST["showIdVak"];
$show1 = new shows();
$show1->searchshows($showId);
?>

<a href="schoolmenu.php"> terug naar het menu.</a>
</body>
</html>
