<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="showIndex.php" class="active">go back to show</a></h2>
    </div>
<?php
require "shows.php";

$showId = $_POST["showIdField"];
$show1 = new shows();
$show1->searchshows($showId);
?>
</div>
</body>
</html>
