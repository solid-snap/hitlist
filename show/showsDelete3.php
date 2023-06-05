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
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen == "ja") {
    echo "The show is removed <br/>";
    $show1 = new shows();
    $show1->deleteshows($showId);
} else {
    echo "the show isn't removed <br/>";
}
?>
<h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>
