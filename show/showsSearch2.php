<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo">
<?php
require "shows.php";

$showId = $_POST["showIdVak"];
$show1 = new shows();
$show1->searchshows($showId);
?>

<<h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>
