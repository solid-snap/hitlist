<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo">
<?php
require "shows.php";

$showId = $_POST["showIdField"];
$show1 = new shows();
$show1->searchshows($showId);
?>

<form action="showsDelete3.php" method="post">
    <!-- $id cant be changed -->
    <input type="hidden" name="showIdField" value=" <?php echo $showId ?> ">
    <!-- 2x deleteBox-->
    <input type="hidden" name="deleteBox" value="nee">
    <input type="checkbox" name="deleteBox" value="ja">
    <label for="deleteBox"> Remove the show.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>

