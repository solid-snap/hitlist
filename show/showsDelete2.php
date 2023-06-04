<!doctype html>
<html>
<!--  -->
<head>
</head>
<body>
<?php
include "hitlistCss.php"
?>
<div class="pageInfo">
<?php
require "shows.php";

$showId = $_POST["showIdVak"];
$show1 = new shows();
$show1->searchshows($showId);
?>

<form action="showsDelete3.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <input type="hidden" name="showIdVak" value=" <?php echo $showId ?> ">
    <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
    <input type="hidden" name="verwijderBox" value="nee">
    <input type="checkbox" name="verwijderBox" value="ja">
    <label for="verwijderBox"> Remove the show.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>

