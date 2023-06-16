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
$delete = $_POST["verwijderBox"];

if ($delete == "ja") {
    echo "The show is removed <br/>";
    $show1 = new shows();
    $show1->deleteshows($showId);
} else {
    echo "the show isn't removed <br/>";
}
?>
</div>
</body>
</html>
