<!doctype html>
<html>
<!--  -->
<head>
    <title>shows Delete 2</title>
</head>
<body>
<h1>delete shows formulier 2 </h1>

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
    <label for="verwijderBox"> Verwijder deze student.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="schoolmenu.php"> terug naar het menu.</a>
</body>
</html>

